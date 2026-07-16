import routeros_api
from sqlalchemy.orm import Session
from models import Equipamento, Porta
import datetime

def sync_equipamentos(db: Session):
    equipamentos = db.query(Equipamento).all()
    resultados = []

    for eq in equipamentos:
        try:
            # Conecta ao MikroTik
            connection = routeros_api.RouterOsApiPool(
                eq.ip, username=eq.usuario, password=eq.senha, plaintext_login=True
            )
            api = connection.get_api()
            
            # Coleta as interfaces
            list_interfaces = api.get_resource('/interface')
            interfaces_mk = list_interfaces.get()
            
            # Obtem portas atuais no banco para este equipamento
            portas_bd = db.query(Porta).filter(Porta.equipamento_id == eq.id).all()
            portas_bd_dict = {p.nome_porta: p for p in portas_bd}
            
            nomes_interfaces_mk = []

            for iface in interfaces_mk:
                nome = iface.get('name')
                nomes_interfaces_mk.append(nome)
                
                # Verifica status (running=true -> Up, senão -> Down)
                is_running = iface.get('running', 'false') == 'true'
                status_atual = 'Up' if is_running else 'Down'
                
                mac = iface.get('mac-address', '')
                comentario = iface.get('comment', '')
                
                if nome in portas_bd_dict:
                    # Atualiza porta existente
                    porta = portas_bd_dict[nome]
                    porta.status = status_atual
                    porta.mac_address = mac
                    porta.comentario_mikrotik = comentario
                    porta.ultima_alteracao = datetime.datetime.utcnow()
                else:
                    # Insere nova porta
                    nova_porta = Porta(
                        equipamento_id=eq.id,
                        nome_porta=nome,
                        status=status_atual,
                        mac_address=mac,
                        comentario_mikrotik=comentario
                    )
                    db.add(nova_porta)
            
            # Verifica portas que não existem mais no MikroTik
            for nome_bd, porta_bd in portas_bd_dict.items():
                if nome_bd not in nomes_interfaces_mk:
                    porta_bd.status = 'Inativa/Removida'
                    porta_bd.ultima_alteracao = datetime.datetime.utcnow()

            eq.status_conexao = "Online"
            eq.ultima_leitura = datetime.datetime.utcnow()
            connection.disconnect()
            
            resultados.append({"equipamento": eq.nome, "status": "Sucesso"})

        except Exception as e:
            print(f"Erro ao sincronizar {eq.nome} ({eq.ip}): {e}")
            eq.status_conexao = "Offline"
            resultados.append({"equipamento": eq.nome, "status": f"Erro: {str(e)}"})

    db.commit()
    return resultados

from fastapi import FastAPI, Depends, HTTPException
from fastapi.staticfiles import StaticFiles
from fastapi.responses import FileResponse
from sqlalchemy.orm import Session
from typing import List
import uvicorn
import os

import models
import schemas
from database import engine, get_db
import sync

# Cria as tabelas do banco de dados
models.Base.metadata.create_all(bind=engine)

app = FastAPI(title="Network Port Monitor API")

# Garante que o diretorio static existe
os.makedirs("static", exist_ok=True)

# Monta arquivos estáticos (Frontend)
app.mount("/static", StaticFiles(directory="static"), name="static")

@app.get("/")
def read_root():
    return FileResponse("static/index.html")

@app.get("/api/equipamentos", response_model=List[schemas.EquipamentoList])
def read_equipamentos(skip: int = 0, limit: int = 100, db: Session = Depends(get_db)):
    equipamentos = db.query(models.Equipamento).offset(skip).limit(limit).all()
    resultado = []
    for eq in equipamentos:
        portas_up = db.query(models.Porta).filter(models.Porta.equipamento_id == eq.id, models.Porta.status == "Up").count()
        portas_down = db.query(models.Porta).filter(models.Porta.equipamento_id == eq.id, models.Porta.status == "Down").count()
        
        eq_list = schemas.EquipamentoList(
            id=eq.id,
            nome=eq.nome,
            ip=eq.ip,
            usuario=eq.usuario,
            senha=eq.senha,
            modelo=eq.modelo,
            status_conexao=eq.status_conexao,
            ultima_leitura=eq.ultima_leitura,
            portas_up=portas_up,
            portas_down=portas_down
        )
        resultado.append(eq_list)
    return resultado

@app.post("/api/equipamentos", response_model=schemas.Equipamento)
def create_equipamento(equipamento: schemas.EquipamentoCreate, db: Session = Depends(get_db)):
    db_eq = models.Equipamento(**equipamento.dict())
    db.add(db_eq)
    db.commit()
    db.refresh(db_eq)
    return db_eq

@app.get("/api/equipamentos/{equipamento_id}/portas", response_model=List[schemas.Porta])
def read_portas(equipamento_id: int, db: Session = Depends(get_db)):
    portas = db.query(models.Porta).filter(models.Porta.equipamento_id == equipamento_id).all()
    return portas

@app.put("/api/portas/{porta_id}", response_model=schemas.Porta)
def update_porta_descricao(porta_id: int, porta_update: schemas.PortaUpdateDescricao, db: Session = Depends(get_db)):
    porta = db.query(models.Porta).filter(models.Porta.id == porta_id).first()
    if not porta:
        raise HTTPException(status_code=404, detail="Porta não encontrada")
    
    porta.descricao_customizada_sistema = porta_update.descricao_customizada_sistema
    db.commit()
    db.refresh(porta)
    return porta

@app.post("/api/sync")
def sync_all(db: Session = Depends(get_db)):
    resultados = sync.sync_equipamentos(db)
    return {"message": "Sincronização concluída", "detalhes": resultados}

@app.delete("/api/equipamentos/{equipamento_id}")
def delete_equipamento(equipamento_id: int, db: Session = Depends(get_db)):
    eq = db.query(models.Equipamento).filter(models.Equipamento.id == equipamento_id).first()
    if not eq:
        raise HTTPException(status_code=404, detail="Equipamento não encontrado")
    
    db.delete(eq)
    db.commit()
    return {"message": "Equipamento excluído com sucesso"}

if __name__ == "__main__":
    uvicorn.run(app, host="0.0.0.0", port=8000)

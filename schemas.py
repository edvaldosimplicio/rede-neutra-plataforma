from pydantic import BaseModel
from typing import List, Optional
from datetime import datetime

class PortaBase(BaseModel):
    nome_porta: str
    status: str
    vlan_nativa: Optional[str] = None
    mac_address: Optional[str] = None
    comentario_mikrotik: Optional[str] = None
    descricao_customizada_sistema: Optional[str] = None

class PortaCreate(PortaBase):
    pass

class PortaUpdateDescricao(BaseModel):
    descricao_customizada_sistema: str

class Porta(PortaBase):
    id: int
    equipamento_id: int
    ultima_alteracao: Optional[datetime] = None

    class Config:
        orm_mode = True

class EquipamentoBase(BaseModel):
    nome: str
    ip: str
    usuario: str
    senha: str
    modelo: Optional[str] = "MikroTik"

class EquipamentoCreate(EquipamentoBase):
    pass

class Equipamento(EquipamentoBase):
    id: int
    status_conexao: Optional[str] = None
    ultima_leitura: Optional[datetime] = None

    class Config:
        orm_mode = True

class EquipamentoList(Equipamento):
    portas_up: int = 0
    portas_down: int = 0

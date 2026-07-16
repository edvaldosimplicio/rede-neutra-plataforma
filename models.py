from sqlalchemy import Column, Integer, String, Boolean, ForeignKey, DateTime
from sqlalchemy.orm import relationship
import datetime
from database import Base

class Equipamento(Base):
    __tablename__ = "equipamentos"

    id = Column(Integer, primary_key=True, index=True)
    nome = Column(String, index=True)
    ip = Column(String, unique=True, index=True)
    usuario = Column(String)
    senha = Column(String)
    modelo = Column(String, default="MikroTik")
    status_conexao = Column(String, default="Desconhecido") # Online, Offline, Desconhecido
    ultima_leitura = Column(DateTime, default=datetime.datetime.utcnow)

    portas = relationship("Porta", back_populates="equipamento", cascade="all, delete-orphan")

class Porta(Base):
    __tablename__ = "portas"

    id = Column(Integer, primary_key=True, index=True)
    equipamento_id = Column(Integer, ForeignKey("equipamentos.id"))
    nome_porta = Column(String, index=True)
    status = Column(String) # Up, Down, Inativa/Removida
    vlan_nativa = Column(String, nullable=True)
    mac_address = Column(String, nullable=True)
    comentario_mikrotik = Column(String, nullable=True)
    descricao_customizada_sistema = Column(String, nullable=True)
    ultima_alteracao = Column(DateTime, default=datetime.datetime.utcnow, onupdate=datetime.datetime.utcnow)

    equipamento = relationship("Equipamento", back_populates="portas")

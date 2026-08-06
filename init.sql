-- ============================================================
-- Script de inicialização do banco de dados
-- Cria o banco e importa a estrutura
-- ============================================================

CREATE DATABASE IF NOT EXISTS `provedor`
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_unicode_ci;

USE `provedor`;

-- Importar estrutura do arquivo bancodedados.sql
SOURCE bancodedados.sql;

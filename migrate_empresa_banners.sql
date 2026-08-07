-- Script de Migração: Separação e Isolamento de Propagandas por Empresa/Cliente
-- Executado no MariaDB/MySQL para AdManager Meganet

ALTER TABLE `banners` ADD COLUMN IF NOT EXISTS `empresa_id` VARCHAR(100) DEFAULT NULL AFTER `grupo`;
ALTER TABLE `banners_grupos` ADD COLUMN IF NOT EXISTS `empresa_id` VARCHAR(100) DEFAULT NULL AFTER `codigo`;
ALTER TABLE `banners_ordem` ADD COLUMN IF NOT EXISTS `empresa_id` VARCHAR(100) DEFAULT NULL AFTER `codigo`;

ALTER TABLE `publicidade` ADD COLUMN IF NOT EXISTS `empresa_id` VARCHAR(100) DEFAULT NULL AFTER `codigo`;
ALTER TABLE `publicidade_banners` ADD COLUMN IF NOT EXISTS `empresa_id` VARCHAR(100) DEFAULT NULL AFTER `bloco`;
ALTER TABLE `publicidade_ordem` ADD COLUMN IF NOT EXISTS `empresa_id` VARCHAR(100) DEFAULT NULL AFTER `grupo`;

-- Índices de Performance para rápida busca por empresa
CREATE INDEX `idx_banners_empresa` ON `banners` (`empresa_id`);
CREATE INDEX `idx_banners_grupos_empresa` ON `banners_grupos` (`empresa_id`);
CREATE INDEX `idx_publicidade_empresa` ON `publicidade` (`empresa_id`);

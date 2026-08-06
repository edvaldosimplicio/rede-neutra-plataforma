-- ============================================================
-- Migração: MyISAM → InnoDB
-- Adiciona integridade referencial e transactions
-- ============================================================

USE `provedor`;

-- Otimizar tabelas MyISAM existentes
ALTER TABLE `acordeon` ENGINE=InnoDB;
ALTER TABLE `acordeon_ordem` ENGINE=InnoDB;
ALTER TABLE `adm_config` ENGINE=InnoDB;
ALTER TABLE `adm_setores` ENGINE=InnoDB;
ALTER TABLE `adm_setores_ordem` ENGINE=InnoDB;
ALTER TABLE `adm_setores_perfil` ENGINE=InnoDB;
ALTER TABLE `adm_setores_usuario` ENGINE=InnoDB;
ALTER TABLE `adm_usuario` ENGINE=InnoDB;
ALTER TABLE `balcoes` ENGINE=InnoDB;
ALTER TABLE `banners` ENGINE=InnoDB;
ALTER TABLE `banners_grupos` ENGINE=InnoDB;
ALTER TABLE `banners_ordem` ENGINE=InnoDB;
ALTER TABLE `blocos` ENGINE=InnoDB;
ALTER TABLE `cadastro` ENGINE=InnoDB;
ALTER TABLE `cadastro_comentarios` ENGINE=InnoDB;
ALTER TABLE `cadastro_email_grupos` ENGINE=InnoDB;
ALTER TABLE `cadastro_fone` ENGINE=InnoDB;
ALTER TABLE `cadastro_fone_grupos` ENGINE=InnoDB;
ALTER TABLE `caracteristicas` ENGINE=InnoDB;
ALTER TABLE `caracteristicas_ordem` ENGINE=InnoDB;
ALTER TABLE `cidade` ENGINE=InnoDB;
ALTER TABLE `contador` ENGINE=InnoDB;
ALTER TABLE `contador_ordem` ENGINE=InnoDB;
ALTER TABLE `contato` ENGINE=InnoDB;
ALTER TABLE `contato_ordem` ENGINE=InnoDB;
ALTER TABLE `conteudos` ENGINE=InnoDB;
ALTER TABLE `cupom` ENGINE=InnoDB;
ALTER TABLE `cupom_lista` ENGINE=InnoDB;
ALTER TABLE `depoimentos` ENGINE=InnoDB;
ALTER TABLE `destaques` ENGINE=InnoDB;
ALTER TABLE `destaques_ordem` ENGINE=InnoDB;
ALTER TABLE `duvidas` ENGINE=InnoDB;
ALTER TABLE `duvidas_ordem` ENGINE=InnoDB;

-- Migrar charset para utf8mb4
ALTER TABLE `acordeon` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `adm_setores` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `adm_usuario` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `banners` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `blocos` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `contato` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `conteudos` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `depoimentos` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `destaques` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `duvidas` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE `adm_config` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

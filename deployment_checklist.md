# 🚀 Guia Definitivo de Implantação - Meganet (Produção)

Este guia orienta passo a passo a publicação do site Meganet em qualquer hospedagem PHP/MySQL (cPanel, Hostinger, KingHost, Locaweb ou VPS Linux).

---

## 📋 Pré-requisitos do Servidor
- **PHP**: Versão 7.4 (ou superior) com extensões `mysqli`, `gd`, `mbstring`, `curl`.
- **Banco de Dados**: MySQL 5.6+ ou MariaDB 10.4+.
- **Servidor Web**: Apache com módulo `mod_rewrite` habilitado (para URLs amigáveis).

---

## 📦 Passo 1: Envio dos Arquivos (FTP / Gerenciador de Arquivos)

1. Conecte ao seu servidor via FTP (ex: FileZilla) ou acesse o **Gerenciador de Arquivos** do cPanel.
2. Abra a pasta pública do site (geralmente `public_html` ou `www`).
3. Envie **todos os arquivos e pastas** localizados dentro da pasta `Upload/`.
   
   > ⚠️ **IMPORTANTE - Arquivos Ocultos**:
   > Certifique-se de enviar o arquivo `.htaccess`. Ele pode estar oculto no seu computador. Sem ele, a navegação entre páginas apresentará erro 404.

---

## 🗄️ Passo 2: Configuração do Banco de Dados

1. Acesse o **phpMyAdmin** na sua hospedagem.
2. Crie um novo Banco de Dados (exemplo: `meganet_db`).
3. Clique em **Importar** e selecione o arquivo `bancodedados.sql` que está na raiz deste projeto.
4. Após a importação com sucesso, crie um **Usuário do Banco de Dados** com permissões totais no banco criado.

---

## ⚙️ Passo 3: Conexão no Arquivo `_config.php`

No Gerenciador de Arquivos da hospedagem, edite o arquivo `_config.php` (na raiz do site):

```php
<?php
$config = array();

// Dados de Acesso ao Banco na Hospedagem
$config['SERVIDOR'] = "localhost";        // Geralmente 'localhost' ou IP do MySQL
$config['BANCO']    = "seu_usuario_banco"; // Nome completo do banco de dados
$config['USUARIO']  = "seu_usuario_user";  // Usuário do MySQL
$config['SENHA']    = "sua_senha_forte";   // Senha do usuário do MySQL
$config['PASTA']    = "";                  // Deixe vazio se o site estiver na raiz

// Tokens de Segurança (Mantenha valores únicos)
$config['token1']   = "mgn_sec_8f9a2b4e7c1d603e8a91";
$config['token2']   = "mgn_sec_51d206f4ab3c8901e74f";

// Google reCAPTCHA v2 (Chaves para proteger o formulário de contato)
$config['recaptcha_key']    = "SUA_CHAVE_SITE_RECAPTCHA";
$config['recaptcha_secret'] = "SUA_CHAVE_SECRETA_RECAPTCHA";
```

---

## 🔐 Passo 4: Primeiro Acesso e Alteração da Senha Admin

1. Acesse o painel administrativo pelo navegador:
   `https://www.seudominio.com.br/sistema`
2. Faça login com os dados padrão:
   - **Usuário**: `admin`
   - **Senha**: `12345`
3. 🚨 **Ação Crítica de Segurança**:
   Vá em **Meus Dados** ou **Gerenciar Usuários** e altere imediatamente a senha padrão para uma senha forte.

---

## 📧 Passo 5: Configuração de E-mail (SMTP) e WhatsApp

1. No painel Admin (`/sistema`), acesse **Configurações > SMTP**.
2. Preencha com os dados do seu e-mail corporativo (ex: `contato@meganet.com.br`):
   - **Servidor SMTP**: `mail.seudominio.com.br` ou `smtp.seudominio.com.br`
   - **Porta**: `465` (SSL) ou `587` (TLS)
   - **Usuário / E-mail**: `contato@seudominio.com.br`
   - **Senha**: Senha da conta de e-mail
3. Acesse **Configurações Gerais** para atualizar:
   - Número do WhatsApp de atendimento.
   - Endereço da empresa, CNPJ e telefones.

---

## 🛡️ Checklist de Verificação Final

- [ ] Site principal abre em `https://seudominio.com.br`
- [ ] Banners principais, logo e mascote estão visíveis em alta resolução
- [ ] Painel Admin carrega em `/sistema`
- [ ] Senha do usuário `admin` foi alterada
- [ ] Formulário de contato envia mensagem sem erros
- [ ] Botão flutuante do WhatsApp redireciona para o número correto
- [ ] Certificado SSL (HTTPS) está ativo e forçado

---
*Site preparado e otimizado para Meganet Internet Fibra Óptica.*

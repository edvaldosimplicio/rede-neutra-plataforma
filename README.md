# Meganet - Site Provedor de Internet

CMS para provedores de internet com gerenciador de conteúdo completo.

## Requisitos

- PHP 7.4+
- MySQL 5.6+ / MariaDB 10.4+
- Apache com mod_rewrite
- Extensões PHP: mysqli, gd, mbstring

## Instalação Rápida (Local)

### Com Docker (recomendado)

```bash
# Clone ou copie os arquivos
# Inicie os containers
docker-compose up -d

# Acesse:
# Site: http://localhost:8080
# Admin: http://localhost:8080/sistema (usuario: admin, senha: 12345)
# phpMyAdmin: http://localhost:8081
```

### Manual (XAMPP/WAMP)

1. Copie a pasta `Upload/` para o diretório web (ex: `htdocs/meganet`)
2. Importe o `bancodedados.sql` no phpMyAdmin
3. Ajuste o arquivo `Upload/_config.php` com seus dados do banco
4. Configure o `.htaccess` (certifique-se que está na raiz)
5. Acesse: `http://localhost/meganet`
6. Admin: `http://localhost/meganet/sistema`
   - Usuário: `admin`
   - Senha: `12345`

## Configuração

### Google reCAPTCHA v2

Para receber contatos pelo formulário:
1. Crie uma chave em: https://www.google.com/recaptcha/admin
2. Escolha reCAPTCHA v2 ("Não sou robô")
3. Adicione as chaves no `_config.php` ou no arquivo `.env`:
   ```
   RECAPTCHA_KEY=sua_chave
   RECAPTCHA_SECRET=seu_secret
   ```

### E-mail SMTP

Configure o envio de e-mails pelo admin em: **Configurações > Smtp**

## Estrutura

```
Upload/
  _config.php       - Configuração do sistema
  index.php         - Entry point do site
  .htaccess         - URL amigável (mod_rewrite)
  controllers/      - Controladores
  models/           - Modelos
  views/            - Views do site
  sistema/          - Painel administrativo
  api/              - APIs (MercadoPago, PayPal)
  arquivos/         - Uploads (imagens, fotos)
```

## Segurança

- Altere as senhas padrão (admin/12345) após o primeiro acesso
- Gere novos tokens em `_config.php` (token1 e token2)
- Configure reCAPTCHA para o formulário de contato
- Mantenha PHP e dependências atualizados
- Para produção: NUNCA use root/sem senha no banco de dados

## Licença

Proprietário - Fabrica do Site / Site Responsivo

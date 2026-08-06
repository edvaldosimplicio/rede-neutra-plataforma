<?php
// ============================================================
// Suporte a .env via phpdotenv (se disponível via Composer)
// ============================================================
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->safeLoad();
}

$config = array();

// Database - lê de env vars com fallback para valores padrão
$config['SERVIDOR'] = getenv('DB_SERVIDOR') ?: "localhost";
$config['BANCO'] = getenv('DB_BANCO') ?: "provedor";
$config['USUARIO'] = getenv('DB_USUARIO') ?: "root";
$config['SENHA'] = getenv('DB_SENHA') ?: "";
$config['PASTA'] = getenv('SITE_PASTA') ?: "";

// Security tokens — OBRIGATÓRIO definir no .env
// NÃO há fallback: se não estiver no .env, vai gerar erro intencional
$config['token1'] = getenv('TOKEN1') ?: null;
$config['token2'] = getenv('TOKEN2') ?: null;

if (!$config['token1'] || !$config['token2']) {
    http_response_code(500);
    error_log('SEGURANÇA: TOKEN1 e TOKEN2 devem ser definidos no arquivo .env');
    die('Erro de configuração do servidor.');
}

// Google reCAPTCHA v2
$config['recaptcha_key'] = getenv('RECAPTCHA_KEY') ?: "";
$config['recaptcha_secret'] = getenv('RECAPTCHA_SECRET') ?: "";
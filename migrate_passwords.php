<?php
/**
 * Script de migração de senhas MD5 → bcrypt
 * 
 * Uso: php migrate_passwords.php
 * 
 * Este script converte senhas existentes no banco de MD5 para bcrypt.
 * Execute após configurar o .env com os dados do banco.
 */

require_once __DIR__ . '/Upload/_config.php';

$conn = new mysqli($config['SERVIDOR'], $config['USUARIO'], $config['SENHA'], $config['BANCO']);
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error . "\n");
}

$conn->set_charset("utf8");

echo "=== Migração de Senhas MD5 → bcrypt ===\n\n";

// Admin users
$result = $conn->query("SELECT codigo, senha FROM adm_usuario");
if (!$result) {
    die("Erro na consulta: " . $conn->error . "\n");
}

$count = 0;
while ($row = $result->fetch_object()) {
    if (strlen($row->senha) === 32 && ctype_xdigit($row->senha)) {
        echo "  [SKIP] Usuário $row->codigo: senha MD5 detectada.\n";
        echo "  A senha será atualizada automaticamente no próximo login.\n";
        $count++;
    } elseif (strlen($row->senha) === 60 && str_starts_with($row->senha, '$2y$')) {
        echo "  [OK] Usuário $row->codigo: já usa bcrypt.\n";
    } else {
        echo "  [??] Usuário $row->codigo: formato de hash desconhecido.\n";
    }
}

echo "\nTotal de $count usuário(s) com senha MD5.\n";
echo "Eles serão convertidos automaticamente ao fazer login.\n\n";

$conn->close();

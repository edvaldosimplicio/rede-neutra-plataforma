<?php

class security {

    public static function hash_password($password) {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    }

    public static function verify_password($password, $hash) {
        if (password_verify($password, $hash)) {
            return true;
        }
        if (strlen($hash) === 32 && ctype_xdigit($hash)) {
            if (md5($password) === $hash) {
                return true;
            }
        }
        return false;
    }

    public static function needs_rehash($hash) {
        if (strlen($hash) === 32 && ctype_xdigit($hash)) {
            return true;
        }
        return password_needs_rehash($hash, PASSWORD_BCRYPT, ['cost' => 10]);
    }

    public static function csrf_token() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    public static function csrf_field() {
        return '<input type="hidden" name="_csrf_token" value="' . self::csrf_token() . '">';
    }

    public static function verify_csrf($token) {
        if (empty($_SESSION['csrf_token']) || empty($token)) {
            return false;
        }
        return hash_equals($_SESSION['csrf_token'], $token);
    }

    public static function sanitize($input) {
        if (is_array($input)) {
            return array_map([self::class, 'sanitize'], $input);
        }
        return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
    }

    public static function generate_token() {
        return substr(time() . bin2hex(random_bytes(8)), 0, 20);
    }
}

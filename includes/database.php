<?php

function bethammi_db()
{
    static $connection = null;

    if ($connection instanceof PDO) {
        return $connection;
    }

    $localConfig = dirname(__DIR__) . '/config/database.local.php';
    $config = is_file($localConfig) ? require $localConfig : [];
    if (!is_array($config)) {
        throw new RuntimeException('The local database configuration must return an array.');
    }

    $host = getenv('DB_HOST') ?: ($config['host'] ?? '');
    $port = getenv('DB_PORT') ?: ($config['port'] ?? 3306);
    $database = getenv('DB_NAME') ?: ($config['database'] ?? '');
    $username = getenv('DB_USER') ?: ($config['username'] ?? '');
    $password = getenv('DB_PASSWORD');
    if ($password === false) {
        $password = $config['password'] ?? '';
    }
    $charset = getenv('DB_CHARSET') ?: ($config['charset'] ?? 'utf8mb4');

    if ($host === '' || $database === '' || $username === '') {
        throw new RuntimeException('Database settings are missing. Configure config/database.local.php or the DB_* environment variables.');
    }
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $charset)) {
        throw new RuntimeException('The database character set is invalid.');
    }

    $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', $host, (int) $port, $database, $charset);
    $connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    return $connection;
}

function bethammi_escape($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function bethammi_slugify($value)
{
    $value = mb_strtolower(trim((string) $value), 'UTF-8');
    $value = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $value);
    $value = preg_replace('/[^a-z0-9]+/', '-', strtolower($value));
    return trim($value, '-');
}

function bethammi_valid_image_url($value)
{
    if ($value === '') {
        return true;
    }
    if (str_starts_with($value, '/')) {
        return !str_starts_with($value, '//') && !str_contains($value, '..');
    }
    if (preg_match('/^[a-zA-Z0-9._\/-]+$/', $value)) {
        return !preg_match('#(?:^|/)\.\.(?:/|$)#', $value);
    }
    $url = filter_var($value, FILTER_VALIDATE_URL);
    if ($url === false) {
        return false;
    }
    return in_array(strtolower((string) parse_url($value, PHP_URL_SCHEME)), ['http', 'https'], true);
}

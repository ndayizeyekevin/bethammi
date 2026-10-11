<?php

require_once __DIR__ . '/../includes/database.php';

if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

$username = $argv[1] ?? '';
if (!preg_match('/^[a-zA-Z0-9_.-]{3,80}$/', $username)) {
    fwrite(STDERR, "Usage: php tools/create-admin.php <username>\nUsername must be 3 to 80 letters, numbers, dots, underscores, or hyphens.\n");
    exit(1);
}

fwrite(STDOUT, 'Password (minimum 12 characters): ');
$password = rtrim((string) fgets(STDIN), "\r\n");
fwrite(STDOUT, 'Confirm password: ');
$confirmation = rtrim((string) fgets(STDIN), "\r\n");

if (strlen($password) < 12 || !hash_equals($password, $confirmation)) {
    fwrite(STDERR, "Passwords must match and contain at least 12 characters.\n");
    exit(1);
}

try {
    $statement = bethammi_db()->prepare(
        'INSERT INTO admin_users (username, password_hash) VALUES (:username, :password_hash)'
    );
    $statement->execute([
        'username' => $username,
        'password_hash' => password_hash($password, PASSWORD_DEFAULT),
    ]);
    fwrite(STDOUT, "Administrator account created for {$username}.\n");
} catch (PDOException $error) {
    if ((string) $error->getCode() === '23000') {
        fwrite(STDERR, "That username already exists.\n");
        exit(1);
    }
    fwrite(STDERR, 'Could not create the administrator account: ' . $error->getMessage() . "\n");
    exit(1);
}

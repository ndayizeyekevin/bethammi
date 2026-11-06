<?php

require_once __DIR__ . '/../includes/database.php';

if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

$username = $argv[1] ?? '';
if (!preg_match('/^[a-zA-Z0-9_.-]{3,80}$/', $username)) {
    fwrite(STDERR, "Usage: php tools/set-admin-recovery-email.php <username>\n");
    exit(1);
}

fwrite(STDOUT, 'Recovery email: ');
$email = trim((string) fgets(STDIN));
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false || strlen($email) > 254) {
    fwrite(STDERR, "Enter a valid recovery email address.\n");
    exit(1);
}

try {
    $statement = bethammi_db()->prepare('UPDATE admin_users SET email = :email WHERE username = :username');
    $statement->execute(['email' => $email, 'username' => $username]);
    if ($statement->rowCount() === 0) {
        $check = bethammi_db()->prepare('SELECT 1 FROM admin_users WHERE username = :username LIMIT 1');
        $check->execute(['username' => $username]);
        if (!$check->fetchColumn()) {
            fwrite(STDERR, "No administrator account was found with that username.\n");
            exit(1);
        }
    }
    fwrite(STDOUT, "Recovery email saved for {$username}.\n");
} catch (PDOException $error) {
    if ((string) $error->getCode() === '23000') {
        fwrite(STDERR, "That recovery email is already assigned to another administrator.\n");
        exit(1);
    }
    fwrite(STDERR, 'Could not update the recovery email: ' . $error->getMessage() . "\n");
    exit(1);
}

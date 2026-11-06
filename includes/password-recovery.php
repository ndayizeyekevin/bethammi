<?php

function bethammi_password_recovery_config()
{
    $configPath = dirname(__DIR__) . '/config/smtp.php';
    if (!is_file($configPath)) {
        throw new RuntimeException('Email is not configured. Copy config/smtp.example.php to config/smtp.php and enter the SMTP settings.');
    }

    $config = require $configPath;
    if (!is_array($config)) {
        throw new RuntimeException('The SMTP configuration must return an array.');
    }

    foreach (['host', 'username', 'password', 'from_email', 'from_name', 'base_url'] as $key) {
        if (!isset($config[$key]) || !is_string($config[$key]) || trim($config[$key]) === '') {
            throw new RuntimeException(sprintf('The SMTP configuration is missing "%s".', $key));
        }
    }

    $port = filter_var($config['port'] ?? null, FILTER_VALIDATE_INT, [
        'options' => ['min_range' => 1, 'max_range' => 65535],
    ]);
    if ($port === false || !in_array($config['secure'] ?? null, ['tls', 'ssl'], true)) {
        throw new RuntimeException('The SMTP port or encryption setting is invalid.');
    }

    if (filter_var($config['from_email'], FILTER_VALIDATE_EMAIL) === false) {
        throw new RuntimeException('The SMTP sender email address is invalid.');
    }

    $baseUrl = filter_var($config['base_url'], FILTER_VALIDATE_URL);
    $scheme = strtolower((string) parse_url((string) $baseUrl, PHP_URL_SCHEME));
    $host = strtolower((string) parse_url((string) $baseUrl, PHP_URL_HOST));
    if (
        $baseUrl === false
        || !in_array($scheme, ['http', 'https'], true)
        || parse_url($baseUrl, PHP_URL_USER) !== null
        || parse_url($baseUrl, PHP_URL_PASS) !== null
        || parse_url($baseUrl, PHP_URL_QUERY) !== null
        || parse_url($baseUrl, PHP_URL_FRAGMENT) !== null
        || ($scheme !== 'https' && !in_array($host, ['localhost', '127.0.0.1', '::1'], true))
    ) {
        throw new RuntimeException('The password recovery base URL must be a valid HTTPS URL (HTTP is allowed on localhost).');
    }

    $config['port'] = $port;
    $config['base_url'] = rtrim($baseUrl, '/');
    return $config;
}

function bethammi_send_password_recovery_email($email, $username, $resetUrl, $config)
{
    $autoload = dirname(__DIR__) . '/vendor/autoload.php';
    if (!is_file($autoload)) {
        throw new RuntimeException('Email support is not installed. Run composer install.');
    }
    require_once $autoload;

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $config['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $config['username'];
    $mail->Password = $config['password'];
    $mail->Port = $config['port'];
    $mail->SMTPSecure = $config['secure'] === 'ssl'
        ? PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Timeout = 15;
    $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($email, $username);
    $mail->isHTML(true);
    $mail->Subject = 'Reset your Beth Ammi admin password';

    $safeName = htmlspecialchars($username, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeUrl = htmlspecialchars($resetUrl, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $mail->Body = '<p>Hello ' . $safeName . ',</p>'
        . '<p>We received a request to reset the password for your Beth Ammi admin account.</p>'
        . '<p><a href="' . $safeUrl . '">Reset your password</a></p>'
        . '<p>This link expires in one hour and can only be used once. If you did not request a reset, you can ignore this email.</p>';
    $mail->AltBody = "Hello {$username},\n\n"
        . "We received a request to reset the password for your Beth Ammi admin account.\n\n"
        . "Open this link to reset your password:\n{$resetUrl}\n\n"
        . "This link expires in one hour and can only be used once. If you did not request a reset, you can ignore this email.";
    $mail->send();
}

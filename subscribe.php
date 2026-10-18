<?php

require_once __DIR__ . '/includes/admin-auth.php';

bethammi_start_admin_session();
header('Cache-Control: no-store');

function bethammi_subscribe_response(array $payload, $status = 200)
{
    http_response_code($status);
    if (strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
        return;
    }

    header('Content-Type: text/html; charset=utf-8');
    $message = $payload['message'] ?? $payload['error'] ?? 'The request could not be completed.';
    ?><!doctype html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Newsletter subscription | Beth Ammi</title></head>
<body>
  <main>
    <h1><?= $status < 400 ? 'Thank you' : 'Subscription not completed' ?></h1>
    <p><?= bethammi_escape($message) ?></p>
    <a href="./">Return to Beth Ammi</a>
  </main>
</body>
</html><?php
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    bethammi_subscribe_response(['error' => 'Use the signup form to subscribe.'], 405);
    exit;
}

if (!bethammi_check_admin_csrf()) {
    bethammi_subscribe_response(['error' => 'Your session expired. Refresh the page and try again.'], 403);
    exit;
}

$email = $_POST['email'] ?? '';
if (!is_string($email)) {
    bethammi_subscribe_response(['error' => 'Enter a valid email address.'], 422);
    exit;
}

$email = strtolower(trim($email));
if (strlen($email) > 254 || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    bethammi_subscribe_response(['error' => 'Enter a valid email address.'], 422);
    exit;
}

try {
    $statement = bethammi_db()->prepare(
        'INSERT INTO newsletter_subscribers (email) VALUES (:email)'
    );
    try {
        $statement->execute(['email' => $email]);
    } catch (PDOException $error) {
        $isDuplicateEmail = $error->getCode() === '23000'
            && isset($error->errorInfo[1])
            && (int) $error->errorInfo[1] === 1062;
        if (!$isDuplicateEmail) {
            throw $error;
        }
    }

    bethammi_subscribe_response(['message' => 'Subscribed successfully.']);
} catch (Throwable $error) {
    error_log('Beth Ammi newsletter signup failed: ' . $error->getMessage());
    bethammi_subscribe_response(['error' => 'Your subscription could not be saved right now. Please try again.'], 500);
}

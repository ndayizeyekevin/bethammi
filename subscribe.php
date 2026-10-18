<?php

require_once __DIR__ . '/includes/admin-auth.php';

bethammi_start_admin_session();
header('Cache-Control: no-store');

function bethammi_subscribe_response(array $payload, $status = 200)
{
    http_response_code($status);
    if (
        ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST'
        ||
        strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false
        || ($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'XMLHttpRequest'
    ) {
        header('Content-Type: application/json; charset=utf-8');
        $json = json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
        echo $json === false ? '{"error":"The response could not be encoded."}' : $json;
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

$action = $_POST['action'] ?? 'subscribe';
if (!is_string($action) || !in_array($action, ['subscribe', 'unsubscribe'], true)) {
    bethammi_subscribe_response(['error' => 'Choose whether to subscribe or unsubscribe.'], 422);
    exit;
}

try {
    $database = bethammi_db();
    if ($action === 'subscribe') {
        $database->beginTransaction();
        $statement = $database->prepare(
            "INSERT IGNORE INTO newsletter_subscribers (email, status) VALUES (:email, 'subscribed')"
        );
        $statement->execute(['email' => $email]);
        $wasInserted = $statement->rowCount() === 1;

        $statement = $database->prepare(
            'SELECT status FROM newsletter_subscribers WHERE email = :email FOR UPDATE'
        );
        $statement->execute(['email' => $email]);
        $subscriptionStatus = $statement->fetchColumn();

        if ($subscriptionStatus === 'unsubscribed') {
            $statement = $database->prepare(
                "UPDATE newsletter_subscribers SET status = 'subscribed', subscribed_at = CURRENT_TIMESTAMP WHERE email = :email"
            );
            $statement->execute(['email' => $email]);
            $message = 'Subscribed successfully.';
        } elseif ($wasInserted) {
            $message = 'Subscribed successfully.';
        } else {
            $message = 'This email address is already subscribed.';
        }

        $database->commit();
        bethammi_subscribe_response(['message' => $message]);
    } else {
        $statement = $database->prepare(
            "UPDATE newsletter_subscribers SET status = 'unsubscribed' WHERE email = :email AND status = 'subscribed'"
        );
        $statement->execute(['email' => $email]);

        if ($statement->rowCount() === 1) {
            $message = 'Unsubscribed successfully.';
        } else {
            $statement = $database->prepare(
                'SELECT status FROM newsletter_subscribers WHERE email = :email'
            );
            $statement->execute(['email' => $email]);
            $subscriptionStatus = $statement->fetchColumn();
            $message = $subscriptionStatus === 'unsubscribed'
                ? 'This email address is already unsubscribed.'
                : 'No subscription was found for this email address.';
        }

        bethammi_subscribe_response(['message' => $message]);
    }
} catch (Throwable $error) {
    if (isset($database) && $database->inTransaction()) {
        $database->rollBack();
    }
    error_log('Beth Ammi newsletter subscription update failed: ' . $error->getMessage());
    bethammi_subscribe_response(['error' => 'Your subscription could not be saved right now. Please try again.'], 500);
}

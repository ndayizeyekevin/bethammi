<?php

require_once __DIR__ . '/../includes/admin-auth.php';
require_once __DIR__ . '/../includes/password-recovery.php';

bethammi_start_admin_session();
header('Cache-Control: no-store, private');
header('Referrer-Policy: no-referrer');

$error = '';
$message = '';
$email = '';
$csrfToken = bethammi_admin_csrf_token();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!bethammi_check_admin_csrf()) {
        http_response_code(403);
        $error = 'This request expired or could not be verified. Reload the page and try again.';
    } else {
        $email = trim(is_string($_POST['email'] ?? null) ? $_POST['email'] : '');
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false || strlen($email) > 254) {
            $error = 'Enter a valid email address.';
        } else {
            $message = 'If an administrator account uses that email, we will send a reset link when email delivery is available. If no email arrives within a few minutes, contact the site administrator.';
            try {
                $database = bethammi_db();
                $emailHash = hash('sha256', strtolower($email));
                $ipHash = hash('sha256', (string) ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
                $attempts = $database->prepare(
                    'SELECT COUNT(*) FROM admin_password_reset_attempts
                     WHERE email_hash = :email_hash AND ip_hash = :ip_hash
                     AND attempted_at >= (NOW() - INTERVAL 15 MINUTE)'
                );
                $attempts->execute(['email_hash' => $emailHash, 'ip_hash' => $ipHash]);
                if ((int) $attempts->fetchColumn() < 5) {
                    $database->prepare(
                        'INSERT INTO admin_password_reset_attempts (email_hash, ip_hash)
                         VALUES (:email_hash, :ip_hash)'
                    )->execute(['email_hash' => $emailHash, 'ip_hash' => $ipHash]);

                    $account = $database->prepare(
                        'SELECT id, username, email FROM admin_users WHERE email = :email LIMIT 1'
                    );
                    $account->execute(['email' => $email]);
                    $user = $account->fetch();
                    if ($user) {
                        $smtpConfig = bethammi_password_recovery_config();
                        $token = bin2hex(random_bytes(32));
                        $tokenHash = hash('sha256', $token);
                        $database->prepare(
                            'DELETE FROM admin_password_resets WHERE admin_user_id = :admin_user_id'
                        )->execute(['admin_user_id' => $user['id']]);
                        $database->prepare(
                            'INSERT INTO admin_password_resets (admin_user_id, token_hash, expires_at)
                             VALUES (:admin_user_id, :token_hash, DATE_ADD(NOW(), INTERVAL 1 HOUR))'
                        )->execute(['admin_user_id' => $user['id'], 'token_hash' => $tokenHash]);

                        try {
                            $resetUrl = $smtpConfig['base_url'] . '/admin/reset-password.php?token=' . rawurlencode($token);
                            bethammi_send_password_recovery_email(
                                $user['email'],
                                $user['username'],
                                $resetUrl,
                                $smtpConfig
                            );
                        } catch (Throwable $exception) {
                            $database->prepare(
                                'DELETE FROM admin_password_resets WHERE token_hash = :token_hash'
                            )->execute(['token_hash' => $tokenHash]);
                            throw $exception;
                        }
                    }
                }
            } catch (Throwable $exception) {
                error_log('Beth Ammi password recovery request failed: ' . $exception->getMessage());
            }
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forgot password | Beth Ammi Admin</title>
  <link rel="icon" type="image/png" href="../assets/images/bethammilogo.png">
  <link rel="stylesheet" href="admin.css">
  <script src="../assets/js/form-loading-overlay.js?v=<?= (int) filemtime(__DIR__ . '/../assets/js/form-loading-overlay.js') ?>" defer></script>
</head>
<body>
<main class="login-page">
  <section class="login-card">
    <a class="login-brand" href="../" aria-label="Beth Ammi home">
      <img class="admin-brand-logo" src="../assets/images/bethammilogo.png" alt="">
      <span><strong>BETH AMMI</strong><small>CONTENT ADMINISTRATION</small></span>
    </a>
    <p class="eyebrow">ACCOUNT RECOVERY</p>
    <h1>Forgot your password?</h1>
    <p class="login-intro">Enter the recovery email address associated with your administrator account.</p>
    <?php if ($error !== ''): ?><p class="notice notice--error" role="alert"><?= bethammi_escape($error) ?></p><?php endif; ?>
    <?php if ($message !== ''): ?><p class="notice" role="status"><?= bethammi_escape($message) ?></p><?php endif; ?>
    <form class="admin-form" method="post" data-loading-overlay-form>
      <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
      <label>Email address<input type="email" name="email" placeholder="Enter your email" value="<?= bethammi_escape($email) ?>" maxlength="254" autocomplete="email" required></label>
      <button class="button button--primary" type="submit">Send recovery link</button>
    </form>
    <a class="login-home" href="./">Return to sign in</a>
  </section>
</main>
<div class="loading-overlay" data-loading-overlay hidden>
  <div class="loading-overlay__card" role="dialog" aria-modal="true" aria-labelledby="loading-overlay-title" aria-describedby="loading-overlay-description" tabindex="-1">
    <span class="loading-overlay__spinner" aria-hidden="true"></span>
    <strong id="loading-overlay-title">Sending your recovery link</strong>
    <span id="loading-overlay-description" role="status" aria-live="polite">Please wait while we securely process your request.</span>
  </div>
</div>
</body>
</html>

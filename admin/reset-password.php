<?php

require_once __DIR__ . '/../includes/admin-auth.php';
require_once __DIR__ . '/../includes/database.php';

bethammi_start_admin_session();
header('Cache-Control: no-store, private');
header('Referrer-Policy: no-referrer');

$token = is_string($_POST['token'] ?? null)
    ? $_POST['token']
    : (is_string($_GET['token'] ?? null) ? $_GET['token'] : '');
$tokenIsValid = preg_match('/^[a-f0-9]{64}$/', $token) === 1;
$error = '';
$csrfToken = bethammi_admin_csrf_token();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!bethammi_check_admin_csrf()) {
        http_response_code(403);
        $error = 'This request expired or could not be verified. Reload the page and try again.';
    } else {
        $password = is_string($_POST['password'] ?? null) ? $_POST['password'] : '';
        $confirmation = is_string($_POST['password_confirmation'] ?? null) ? $_POST['password_confirmation'] : '';
        if (strlen($password) < 12) {
            $error = 'Choose a password with at least 12 characters.';
        } elseif (!hash_equals($password, $confirmation)) {
            $error = 'The passwords do not match.';
        } elseif (!$tokenIsValid) {
            $error = 'This reset link is invalid or has expired. Request a new one.';
        } else {
            $database = bethammi_db();
            $database->beginTransaction();
            try {
                $statement = $database->prepare(
                    'SELECT admin_user_id FROM admin_password_resets
                     WHERE token_hash = :token_hash AND used_at IS NULL AND expires_at > NOW()
                     LIMIT 1 FOR UPDATE'
                );
                $statement->execute(['token_hash' => hash('sha256', $token)]);
                $reset = $statement->fetch();
                if (!$reset) {
                    $database->rollBack();
                    $tokenIsValid = false;
                    $error = 'This reset link is invalid or has expired. Request a new one.';
                } else {
                    $database->prepare(
                        'UPDATE admin_users SET password_hash = :password_hash WHERE id = :id'
                    )->execute([
                        'password_hash' => password_hash($password, PASSWORD_DEFAULT),
                        'id' => $reset['admin_user_id'],
                    ]);
                    $database->prepare(
                        'UPDATE admin_password_resets SET used_at = NOW() WHERE token_hash = :token_hash'
                    )->execute(['token_hash' => hash('sha256', $token)]);
                    $database->prepare(
                        'DELETE FROM admin_password_resets
                         WHERE admin_user_id = :admin_user_id AND token_hash <> :token_hash'
                    )->execute([
                        'admin_user_id' => $reset['admin_user_id'],
                        'token_hash' => hash('sha256', $token),
                    ]);
                    $database->commit();
                    header('Location: index.php?password-reset=1', true, 303);
                    exit;
                }
            } catch (Throwable $exception) {
                if ($database->inTransaction()) {
                    $database->rollBack();
                }
                throw $exception;
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $tokenIsValid) {
    $statement = bethammi_db()->prepare(
        'SELECT 1 FROM admin_password_resets
         WHERE token_hash = :token_hash AND used_at IS NULL AND expires_at > NOW()
         LIMIT 1'
    );
    $statement->execute(['token_hash' => hash('sha256', $token)]);
    $tokenIsValid = (bool) $statement->fetchColumn();
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset password | Beth Ammi Admin</title>
  <link rel="icon" type="image/png" href="../assets/images/bethammilogo.png">
  <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="admin.css">
  <script src="../assets/js/password-visibility.js?v=<?= (int) filemtime(__DIR__ . '/../assets/js/password-visibility.js') ?>" defer></script>
</head>
<body>
<main class="login-page">
  <section class="login-card">
    <a class="login-brand" href="../" aria-label="Beth Ammi home">
      <span class="brand-mark">BA</span>
      <span><strong>BETH AMMI</strong><small>CONTENT ADMINISTRATION</small></span>
    </a>
    <p class="eyebrow">ACCOUNT RECOVERY</p>
    <h1>Reset your password</h1>
    <?php if ($error !== ''): ?><p class="notice notice--error" role="alert"><?= bethammi_escape($error) ?></p><?php endif; ?>
    <?php if ($tokenIsValid): ?>
    <p class="login-intro">Choose a new password with at least 12 characters.</p>
    <form class="admin-form" method="post">
      <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
      <input type="hidden" name="token" value="<?= bethammi_escape($token) ?>">
      <label for="reset-password">New password</label>
      <div class="password-field">
        <input id="reset-password" type="password" name="password" autocomplete="new-password" minlength="12" required>
        <button class="password-toggle" type="button" aria-label="Show password" aria-pressed="false"><i class="fa-solid fa-eye" aria-hidden="true"></i></button>
      </div>
      <label for="reset-password-confirmation">Confirm new password</label>
      <div class="password-field">
        <input id="reset-password-confirmation" type="password" name="password_confirmation" autocomplete="new-password" minlength="12" required>
        <button class="password-toggle" type="button" aria-label="Show password" aria-pressed="false"><i class="fa-solid fa-eye" aria-hidden="true"></i></button>
      </div>
      <button class="button button--primary" type="submit">Update password</button>
    </form>
    <?php elseif ($error === ''): ?>
    <p class="login-intro">This reset link is invalid or has expired. Request a new one to continue.</p>
    <?php endif; ?>
    <a class="login-home" href="forgot-password.php">Request a new reset link</a>
  </section>
</main>
</body>
</html>

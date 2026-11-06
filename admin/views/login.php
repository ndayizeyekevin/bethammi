<main class="login-page">
  <button class="theme-toggle login-theme-toggle" type="button" data-admin-theme-toggle aria-label="Switch to dark theme" aria-pressed="false">
    <i class="fa-solid fa-moon" aria-hidden="true"></i>
    <span>Dark mode</span>
  </button>
  <section class="login-card">
    <a class="login-brand" href="../" aria-label="Beth Ammi home">
      <img class="admin-brand-logo" src="../assets/images/bethammilogo.png" alt="">
      <span><strong>BETH AMMI</strong><small>CONTENT ADMINISTRATION</small></span>
    </a>
    <p class="eyebrow">WELCOME BACK</p>
    <h1>Sign in to your workspace</h1>
    <p class="login-intro">Manage church posts, team profiles, and parish information.</p>
    <?php if ($error !== ''): ?><p class="notice notice--error" role="alert"><?= bethammi_escape($error) ?></p><?php endif; ?>
    <?php if ($message !== ''): ?><p class="notice" role="status"><?= bethammi_escape($message) ?></p><?php endif; ?>
    <form class="admin-form" method="post">
      <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
      <input type="hidden" name="action" value="login">
      <label>Username or email<input name="username" autocomplete="username" placeholder="Enter username or email" required></label>
      <label for="admin-password">Password</label>
      <div class="password-field">
        <input id="admin-password" type="password" name="password" placeholder="Enter Password" autocomplete="current-password" required>
        <button class="password-toggle" type="button" aria-label="Show password" aria-pressed="false"><i class="fa-solid fa-eye" aria-hidden="true"></i></button>
      </div>
      <button class="button button--primary" type="submit">Sign in</button>
    </form>
    <a class="login-recovery" href="forgot-password.php">Forgot your password?</a>
    <a class="login-home" href="../">Return to Beth Ammi website</a>
  </section>
</main>

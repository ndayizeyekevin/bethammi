<main class="login-page">
  <section class="login-card">
    <a class="login-brand" href="../" aria-label="Beth Ammi home">
      <span class="brand-mark">BA</span>
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
      <label>Username<input name="username" autocomplete="username" required></label>
      <label>Password<input type="password" name="password" autocomplete="current-password" required></label>
      <button class="button button--primary" type="submit">Sign in</button>
    </form>
    <a class="login-home" href="../">Return to Beth Ammi website</a>
  </section>
</main>

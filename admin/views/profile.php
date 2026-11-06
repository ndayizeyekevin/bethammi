<?php if ($adminProfile !== null): ?>
<section class="profile-grid">
  <article class="panel profile-details">
    <div class="panel-heading">
      <div><p class="eyebrow">ACCOUNT DETAILS</p><h2>Your profile</h2></div>
    </div>
    <div class="profile-avatar" aria-hidden="true"><?= bethammi_escape(strtoupper(substr($adminProfile['username'], 0, 1))) ?></div>
    <dl class="profile-details__list">
      <div><dt>Username</dt><dd><?= bethammi_escape($adminProfile['username']) ?></dd></div>
      <div><dt>Recovery email</dt><dd><?= $adminProfile['email'] !== null && $adminProfile['email'] !== '' ? bethammi_escape($adminProfile['email']) : 'Not set' ?></dd></div>
      <div><dt>Account created</dt><dd><?= bethammi_escape(date('F j, Y', strtotime($adminProfile['created_at']))) ?></dd></div>
      <div><dt>Last sign-in</dt><dd><?= $adminProfile['last_login_at'] ? bethammi_escape(date('F j, Y \a\t g:i A', strtotime($adminProfile['last_login_at']))) : 'Not available' ?></dd></div>
    </dl>
    <p class="profile-note"><i class="fa-solid fa-lock" aria-hidden="true"></i> Account details are view-only. Contact the site administrator if they need to be updated.</p>
  </article>

  <section class="panel profile-password">
    <div class="panel-heading">
      <div><p class="eyebrow">ACCOUNT SECURITY</p><h2>Change password</h2></div>
    </div>
    <p class="profile-intro">Choose a strong password with at least 12 characters. You’ll stay signed in after changing it.</p>
    <form class="admin-form" method="post">
      <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
      <input type="hidden" name="action" value="change-password">
      <label for="current-password">Current password</label>
      <div class="password-field">
        <input id="current-password" type="password" name="current_password" autocomplete="current-password" required>
        <button class="password-toggle" type="button" aria-label="Show password" aria-pressed="false"><i class="fa-solid fa-eye" aria-hidden="true"></i></button>
      </div>
      <label for="new-password">New password</label>
      <div class="password-field">
        <input id="new-password" type="password" name="new_password" autocomplete="new-password" minlength="12" required>
        <button class="password-toggle" type="button" aria-label="Show password" aria-pressed="false"><i class="fa-solid fa-eye" aria-hidden="true"></i></button>
      </div>
      <label for="new-password-confirmation">Confirm new password</label>
      <div class="password-field">
        <input id="new-password-confirmation" type="password" name="new_password_confirmation" autocomplete="new-password" minlength="12" required>
        <button class="password-toggle" type="button" aria-label="Show password" aria-pressed="false"><i class="fa-solid fa-eye" aria-hidden="true"></i></button>
      </div>
      <div class="form-actions">
        <button class="button button--primary" type="submit"><i class="fa-solid fa-key" aria-hidden="true"></i> Update password</button>
      </div>
    </form>
  </section>
</section>
<?php endif; ?>

<?php
$adminPages = [
    'dashboard' => ['label' => 'Dashboard', 'description' => 'A clear overview of your church website content'],
    'posts' => ['label' => 'Posts', 'description' => 'Create and organize news, stories, and sermons.'],
    'add-post' => ['label' => 'Add post', 'description' => 'Write a post, format its text, and add images with captions.'],
    'team' => ['label' => 'Team', 'description' => 'Keep church leadership and team profiles up to date.'],
    'parishes' => ['label' => 'Parishes', 'description' => 'Manage parish information shown across the website.'],
    'profile' => ['label' => 'Profile', 'description' => 'View your account details and update your password.'],
];
$currentPage = $adminPages[$adminPage];
?>
<div class="admin-shell">
  <aside class="sidebar">
    <a class="sidebar-brand" href="dashboard.php" aria-label="Beth Ammi admin dashboard">
      <img class="admin-brand-logo" src="../assets/images/bethammilogo.png" alt="">
      <span class="brand-copy"><strong>BETH AMMI</strong><small>CONTENT ADMIN</small></span>
    </a>
    <button class="sidebar-toggle" type="button" aria-controls="admin-navigation" aria-expanded="false" aria-label="Open admin navigation">
      <i class="fa-solid fa-bars" aria-hidden="true"></i>
    </button>
    <p class="sidebar-label">WORKSPACE</p>
    <nav class="sidebar-nav" id="admin-navigation" aria-label="Admin pages">
      <?php foreach ($adminPages as $key => $page): ?>
        <a class="sidebar-link<?= $adminPage === $key ? ' is-active' : '' ?>" href="<?= bethammi_escape($key === 'dashboard' ? 'dashboard.php' : ($key === 'add-post' ? 'add-post.php' : $key . '.php')) ?>"<?= $adminPage === $key ? ' aria-current="page"' : '' ?>>
          <span class="sidebar-icon" aria-hidden="true"><i class="fa-solid <?= ['dashboard' => 'fa-gauge', 'posts' => 'fa-newspaper', 'add-post' => 'fa-circle-plus', 'team' => 'fa-users', 'parishes' => 'fa-location-dot', 'profile' => 'fa-user'][$key] ?>"></i></span>
          <span><?= bethammi_escape($page['label']) ?></span>
        </a>
      <?php endforeach; ?>
    </nav>
    <div class="sidebar-bottom">
      <a class="website-link" href="../" target="_blank" rel="noopener noreferrer"><span aria-hidden="true">↗</span> View live website</a>
      <p>Manage your church content in one place.</p>
    </div>
  </aside>
  <main class="admin-main">
    <header class="topbar">
      <div class="topbar-title">
        <span>CONTENT MANAGEMENT</span>
        <strong><?= bethammi_escape($currentPage['label']) ?></strong>
      </div>
      <div class="account">
        <button class="theme-toggle" type="button" data-admin-theme-toggle aria-label="Switch to dark theme" aria-pressed="false">
          <i class="fa-solid fa-moon" aria-hidden="true"></i>
          <span>Dark mode</span>
        </button>
        <button class="account-menu-toggle" type="button" aria-controls="account-menu" aria-expanded="false" aria-label="Open account menu">
          <span class="account-avatar" aria-hidden="true"><?= bethammi_escape(strtoupper(substr($_SESSION['admin_user']['username'], 0, 1))) ?></span>
          <span class="account-name"><?= bethammi_escape($_SESSION['admin_user']['username']) ?></span>
          <i class="fa-solid fa-chevron-down account-menu-chevron" aria-hidden="true"></i>
        </button>
        <div class="account-menu" id="account-menu" hidden>
          <a href="profile.php"><i class="fa-solid fa-user" aria-hidden="true"></i> Profile</a>
          <form method="post" action="index.php">
            <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
            <input type="hidden" name="action" value="logout">
            <button class="signout-button" type="submit"><i class="fa-solid fa-arrow-right-from-bracket" aria-hidden="true"></i> Sign out</button>
          </form>
        </div>
      </div>
    </header>
    <div class="page-content">
      <header class="page-heading">
        <div>
          <p class="eyebrow">BETH AMMI / <?= strtoupper(bethammi_escape($currentPage['label'])) ?></p>
          <h1><?= bethammi_escape($currentPage['label']) ?></h1>
          <p><?= bethammi_escape($currentPage['description']) ?></p>
        </div>
        <?php if ($adminPage === 'posts'): ?>
          <a class="button button--primary" href="add-post.php">+ Add post</a>
        <?php elseif ($adminPage !== 'dashboard' && $adminPage !== 'add-post' && $adminPage !== 'profile'): ?>
          <a class="button button--primary" href="#editor">+ <?= $selectedRecord ? 'Edit ' . bethammi_escape($sections[$section]['singular']) : 'Add ' . bethammi_escape($sections[$section]['singular']) ?></a>
        <?php elseif ($adminPage === 'add-post'): ?>
          <a class="button button--secondary" href="posts.php">Back to posts</a>
        <?php endif; ?>
      </header>

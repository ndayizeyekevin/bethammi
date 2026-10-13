<?php
$adminPages = [
    'dashboard' => ['label' => 'Dashboard', 'description' => 'A clear overview of your church website content.'],
    'posts' => ['label' => 'Posts', 'description' => 'Create and organize news, stories, and sermons.'],
    'team' => ['label' => 'Team', 'description' => 'Keep church leadership and team profiles up to date.'],
    'parishes' => ['label' => 'Parishes', 'description' => 'Manage parish information shown across the website.'],
];
$currentPage = $adminPages[$adminPage];
?>
<div class="admin-shell">
  <aside class="sidebar">
    <a class="sidebar-brand" href="dashboard.php" aria-label="Beth Ammi admin dashboard">
      <span class="brand-mark">BA</span>
      <span class="brand-copy"><strong>BETH AMMI</strong><small>CONTENT ADMIN</small></span>
    </a>
    <p class="sidebar-label">WORKSPACE</p>
    <nav class="sidebar-nav" aria-label="Admin pages">
      <?php foreach ($adminPages as $key => $page): ?>
        <a class="sidebar-link<?= $adminPage === $key ? ' is-active' : '' ?>" href="<?= bethammi_escape($key === 'dashboard' ? 'dashboard.php' : $key . '.php') ?>"<?= $adminPage === $key ? ' aria-current="page"' : '' ?>>
          <span class="sidebar-icon" aria-hidden="true"><?= ['dashboard' => '⌂', 'posts' => '▤', 'team' => '♙', 'parishes' => '⌖'][$key] ?></span>
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
        <span class="account-avatar" aria-hidden="true"><?= bethammi_escape(strtoupper(substr($_SESSION['admin_user']['username'], 0, 1))) ?></span>
        <span class="account-name"><?= bethammi_escape($_SESSION['admin_user']['username']) ?></span>
        <form method="post" action="index.php">
          <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
          <input type="hidden" name="action" value="logout">
          <button class="signout-button" type="submit">Sign out</button>
        </form>
      </div>
    </header>
    <div class="page-content">
      <header class="page-heading">
        <div>
          <p class="eyebrow">BETH AMMI / <?= strtoupper(bethammi_escape($currentPage['label'])) ?></p>
          <h1><?= bethammi_escape($currentPage['label']) ?></h1>
          <p><?= bethammi_escape($currentPage['description']) ?></p>
        </div>
        <?php if ($adminPage !== 'dashboard'): ?>
          <a class="button button--primary" href="#editor">+ <?= $selectedRecord ? 'Edit ' . bethammi_escape($sections[$section]['singular']) : 'Add ' . bethammi_escape($sections[$section]['singular']) ?></a>
        <?php endif; ?>
      </header>

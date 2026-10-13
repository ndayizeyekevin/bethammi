<?php if ($error === ''): ?>
<section class="stats-grid" aria-label="Content overview">
  <article class="stat-card">
    <span class="stat-icon stat-icon--posts" aria-hidden="true">▤</span>
    <div><p>Published posts</p><strong><?= $dashboardCounts['posts_published'] ?? 0 ?></strong><small><?= $dashboardCounts['posts'] ?? 0 ?> total posts</small></div>
  </article>
  <article class="stat-card">
    <span class="stat-icon stat-icon--team" aria-hidden="true">♙</span>
    <div><p>Team members</p><strong><?= $dashboardCounts['team'] ?? 0 ?></strong><small><?= $dashboardCounts['team_published'] ?? 0 ?> visible on the website</small></div>
  </article>
  <article class="stat-card">
    <span class="stat-icon stat-icon--parishes" aria-hidden="true">⌖</span>
    <div><p>Parishes</p><strong><?= $dashboardCounts['parishes'] ?? 0 ?></strong><small><?= $dashboardCounts['parishes_published'] ?? 0 ?> visible on the website</small></div>
  </article>
</section>

<section class="dashboard-grid">
  <section class="panel recent-panel">
    <div class="panel-heading">
      <div><p class="eyebrow">LATEST ACTIVITY</p><h2>Recent posts</h2></div>
      <a class="text-link" href="posts.php">All posts <span aria-hidden="true">→</span></a>
    </div>
    <?php if (!$recentPosts): ?>
      <p class="empty-state">No posts have been added yet.</p>
    <?php else: ?>
      <div class="recent-list">
        <?php foreach ($recentPosts as $post): ?>
          <article class="recent-item">
            <span class="recent-date"><?= bethammi_escape(date('M j', strtotime($post['published_at']))) ?></span>
            <div class="recent-copy"><strong><?= bethammi_escape($post['title']) ?></strong><small><?= bethammi_escape(date('F j, Y', strtotime($post['published_at']))) ?></small></div>
            <span class="status<?= $post['is_published'] ? ' status--published' : ' status--hidden' ?>"><?= $post['is_published'] ? 'Published' : 'Hidden' ?></span>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </section>
  <?php endif; ?>
  <section class="panel shortcuts-panel">
    <div class="panel-heading"><div><p class="eyebrow">QUICK ACCESS</p><h2>Manage content</h2></div></div>
    <div class="shortcut-list">
      <a class="shortcut" href="posts.php"><span class="shortcut-icon">▤</span><span><strong>Posts</strong><small>Stories, news, and sermons</small></span><span class="shortcut-arrow" aria-hidden="true">→</span></a>
      <a class="shortcut" href="team.php"><span class="shortcut-icon">♙</span><span><strong>Team</strong><small>Leadership and profiles</small></span><span class="shortcut-arrow" aria-hidden="true">→</span></a>
      <a class="shortcut" href="parishes.php"><span class="shortcut-icon">⌖</span><span><strong>Parishes</strong><small>Locations and community details</small></span><span class="shortcut-arrow" aria-hidden="true">→</span></a>
    </div>
  </section>
</section>

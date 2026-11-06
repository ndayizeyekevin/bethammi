<?php if ($error === ''): ?>
<section class="stats-grid" aria-label="Content overview">
  <article class="stat-card">
    <span class="stat-icon stat-icon--posts" aria-hidden="true"><i class="fa-solid fa-newspaper"></i></span>
    <div><p>Published posts</p><strong><?= $dashboardCounts['posts_published'] ?? 0 ?></strong><small><?= $dashboardCounts['posts'] ?? 0 ?> total posts</small></div>
  </article>
  <article class="stat-card">
    <span class="stat-icon stat-icon--team" aria-hidden="true"><i class="fa-solid fa-users"></i></span>
    <div><p>Team members</p><strong><?= $dashboardCounts['team'] ?? 0 ?></strong><small><?= $dashboardCounts['team_published'] ?? 0 ?> visible on the website</small></div>
  </article>
  <article class="stat-card">
    <span class="stat-icon stat-icon--parishes" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span>
    <div><p>Parishes</p><strong><?= $dashboardCounts['parishes'] ?? 0 ?></strong><small><?= $dashboardCounts['parishes_published'] ?? 0 ?> visible on the website</small></div>
  </article>
</section>

<section class="dashboard-charts" aria-label="Content analytics">
  <article class="panel chart-panel chart-panel--wide">
    <div class="panel-heading">
      <div><p class="eyebrow">CONTENT LIBRARY</p><h2>Published by category</h2></div>
      <span class="chart-period">CURRENT TOTALS</span>
    </div>
    <div class="chart-canvas chart-canvas--bar">
      <canvas id="content-breakdown-chart" role="img" aria-label="Published and unpublished content by category"></canvas>
    </div>
  </article>
  <article class="panel chart-panel">
    <div class="panel-heading">
      <div><p class="eyebrow">PUBLISHING STATUS</p><h2>Visibility overview</h2></div>
    </div>
    <div class="chart-canvas chart-canvas--doughnut">
      <canvas id="content-visibility-chart" role="img" aria-label="Published and unpublished content totals"></canvas>
    </div>
    <p class="chart-note"><?= (int) (($dashboardCounts['posts_published'] ?? 0) + ($dashboardCounts['team_published'] ?? 0) + ($dashboardCounts['parishes_published'] ?? 0)) ?> items are currently visible on the website.</p>
  </article>
</section>
<script type="application/json" id="dashboard-chart-data"><?= json_encode([
    'categories' => ['Posts', 'Team', 'Parishes'],
    'published' => [
        (int) ($dashboardCounts['posts_published'] ?? 0),
        (int) ($dashboardCounts['team_published'] ?? 0),
        (int) ($dashboardCounts['parishes_published'] ?? 0),
    ],
    'unpublished' => [
        max(0, (int) ($dashboardCounts['posts'] ?? 0) - (int) ($dashboardCounts['posts_published'] ?? 0)),
        max(0, (int) ($dashboardCounts['team'] ?? 0) - (int) ($dashboardCounts['team_published'] ?? 0)),
        max(0, (int) ($dashboardCounts['parishes'] ?? 0) - (int) ($dashboardCounts['parishes_published'] ?? 0)),
    ],
], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?></script>

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
      <a class="shortcut" href="posts.php"><span class="shortcut-icon" aria-hidden="true"><i class="fa-solid fa-newspaper"></i></span><span><strong>Posts</strong><small>Stories, news, and sermons</small></span><span class="shortcut-arrow" aria-hidden="true">→</span></a>
      <a class="shortcut" href="team.php"><span class="shortcut-icon" aria-hidden="true"><i class="fa-solid fa-users"></i></span><span><strong>Team</strong><small>Leadership and profiles</small></span><span class="shortcut-arrow" aria-hidden="true">→</span></a>
      <a class="shortcut" href="parishes.php"><span class="shortcut-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span><span><strong>Parishes</strong><small>Locations and community details</small></span><span class="shortcut-arrow" aria-hidden="true">→</span></a>
    </div>
  </section>
</section>

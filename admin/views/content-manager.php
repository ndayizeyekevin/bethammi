<?php
$publishedCount = count(array_filter($records, function ($record) {
    return (int) $record['is_published'] === 1;
}));
$hiddenCount = count($records) - $publishedCount;
?>
<section class="stats-grid stats-grid--compact" aria-label="<?= bethammi_escape($sections[$section]['label']) ?> summary">
  <article class="stat-card stat-card--compact"><div><p>Total <?= bethammi_escape(strtolower($sections[$section]['label'])) ?></p><strong><?= count($records) ?></strong></div></article>
  <article class="stat-card stat-card--compact"><div><p>Published</p><strong><?= $publishedCount ?></strong></div></article>
  <article class="stat-card stat-card--compact"><div><p>Hidden</p><strong><?= $hiddenCount ?></strong></div></article>
</section>

<section class="panel editor-panel" id="editor">
  <div class="panel-heading">
    <div><p class="eyebrow"><?= $selectedRecord ? 'UPDATE CONTENT' : 'CREATE CONTENT' ?></p><h2><?= $selectedRecord ? 'Edit ' . bethammi_escape($sections[$section]['singular']) : 'Add a ' . bethammi_escape(strtolower($sections[$section]['singular'])) ?></h2></div>
    <?php if ($selectedRecord): ?><span class="edit-badge">Editing #<?= (int) $selectedRecord['id'] ?></span><?php endif; ?>
  </div>
  <form class="admin-form" method="post">
    <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
    <input type="hidden" name="action" value="save">
    <input type="hidden" name="section" value="<?= bethammi_escape($section) ?>">
    <input type="hidden" name="id" value="<?= bethammi_escape($selectedRecord['id'] ?? '') ?>">
    <?php if ($section === 'posts'): ?>
      <div class="form-row">
        <?php bethammi_admin_field('title', 'Post title', 'text', true); ?>
        <?php bethammi_admin_field('slug', 'URL slug (leave blank to create from title)'); ?>
      </div>
      <div class="form-row">
        <?php bethammi_admin_field('published_at', 'Post date', 'date', true); ?>
        <?php bethammi_admin_field('featured_image_url', 'Highlight image URL or path'); ?>
      </div>
      <?php bethammi_admin_field('youtube_url', 'YouTube video URL', 'url', false, true); ?>
      <p class="admin-help">Optional. Use an https:// YouTube video, Shorts, or live link.</p>
      <?php bethammi_admin_field('short_info', 'Short info for cards', 'textarea', false, true); ?>
        <thead><tr><th>Photo</th><th>Name / title</th><th>Details</th><?php if ($section === 'posts'): ?><th>YouTube</th><?php endif; ?><th>Status</th><th>Actions</th></tr></thead>
      <?php bethammi_admin_field('description', 'Full post description (plain text; blank lines create paragraphs)', 'textarea', true, true); ?>
    <?php elseif ($section === 'team'): ?>
      <div class="form-row">
        <?php bethammi_admin_field('name', 'Full name', 'text', true); ?>
        <?php bethammi_admin_field('title', 'Position or title', 'text', true); ?>
      </div>
      <?php bethammi_admin_image_field('photo_url', 'Photo URL or path'); ?>
      <?php bethammi_admin_field('bio', 'Short bio (optional)', 'textarea', false, true); ?>
      <?php bethammi_admin_field('sort_order', 'Display order (lower appears first)', 'number'); ?>
    <?php else: ?>
      <div class="form-row">
        <?php bethammi_admin_field('name', 'Parish name', 'text', true); ?>
        <?php bethammi_admin_field('country', 'Country', 'text', true); ?>
      </div>
      <div class="form-row">
        <?php bethammi_admin_field('region', 'Region or province'); ?>
        <?php bethammi_admin_field('location', 'Town, district, or address'); ?>
      </div>
      <?php bethammi_admin_image_field('photo_url', 'Photo URL or path'); ?>
      <div class="form-row">
        <?php bethammi_admin_field('short_info', 'Short summary'); ?>
        <?php bethammi_admin_field('member_count', 'Number of members (optional)', 'number'); ?>
      </div>
      <?php bethammi_admin_field('description', 'Additional information', 'textarea', false, true); ?>
      <?php bethammi_admin_field('sort_order', 'Display order (lower appears first)', 'number'); ?>
    <?php endif; ?>
    <label class="checkbox-field"><input type="checkbox" name="is_published" value="1"<?= !array_key_exists('is_published', $_POST) ? (!isset($selectedRecord['is_published']) || $selectedRecord['is_published'] ? ' checked' : '') : (isset($_POST['is_published']) ? ' checked' : '') ?>> Show on website</label>
    <div class="form-actions">
      <button class="button button--primary" type="submit"><?= $selectedRecord ? 'Save changes' : 'Add ' . bethammi_escape($sections[$section]['singular']) ?></button>
      <?php if ($selectedRecord): ?><a class="button button--secondary" href="<?= bethammi_escape($section) ?>.php">Cancel edit</a><?php endif; ?>
    </div>
  </form>
</section>

<section class="panel records-panel">
  <div class="panel-heading">
    <div><p class="eyebrow">CONTENT LIBRARY</p><h2>Existing <?= bethammi_escape(strtolower($sections[$section]['label'])) ?></h2></div>
    <span class="record-count"><?= count($records) ?> <?= count($records) === 1 ? 'record' : 'records' ?></span>
  </div>
  <?php if (!$records): ?>
    <p class="empty-state">No records yet. Use the form above to add the first one.</p>
  <?php else: ?>
    <div class="table-wrap"><table class="records-table">
      <thead><tr><th>Photo</th><th>Name / title</th><th>Details</th><th>Status</th><th>Actions</th></tr></thead>
      <tbody>
      <?php foreach ($records as $record): ?>
        <?php
          $recordTitle = $section === 'posts' ? $record['title'] : $record['name'];
          $recordDetails = $section === 'posts'
              ? $record['published_at']
              : ($section === 'team' ? $record['title'] : trim($record['location'] . ', ' . $record['country'], ', '));
          $image = $section === 'posts' ? $record['featured_image_url'] : $record['photo_url'];
        ?>
        <tr>
          <td><?php if ($image !== ''): ?><img class="record-image" src="<?= bethammi_escape($image) ?>" alt="" loading="lazy"><?php else: ?><span class="image-placeholder" aria-hidden="true">—</span><?php endif; ?></td>
          <td class="record-title"><?= bethammi_escape($recordTitle) ?></td>
          <td><?= bethammi_escape($recordDetails) ?></td>
          <?php if ($section === 'posts'): ?>
          <td><?php if (bethammi_valid_youtube_url($record['youtube_url'] ?? '')): ?><?php if (($record['youtube_url'] ?? '') !== ''): ?><a href="<?= bethammi_escape($record['youtube_url']) ?>" target="_blank" rel="noopener noreferrer">Open video ↗</a><?php else: ?>—<?php endif; ?><?php else: ?>—<?php endif; ?></td>
          <?php endif; ?>
          <td><span class="status<?= $record['is_published'] ? ' status--published' : ' status--hidden' ?>"><?= $record['is_published'] ? 'Published' : 'Hidden' ?></span></td>
          <td class="record-actions"><a href="<?= bethammi_escape($section) ?>.php?edit=<?= (int) $record['id'] ?>">Edit</a>
            <form method="post" onsubmit="return confirm('Permanently delete this record?');">
              <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
              <input type="hidden" name="action" value="delete">
              <input type="hidden" name="section" value="<?= bethammi_escape($section) ?>">
              <input type="hidden" name="id" value="<?= (int) $record['id'] ?>">
              <button type="submit">Delete</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table></div>
  <?php endif; ?>
</section>

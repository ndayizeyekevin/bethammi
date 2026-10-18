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
      <div class="post-description-field admin-field--wide">
        <label for="post-description">Full post description</label>
        <div class="post-formatting-toolbar" role="group" aria-label="Format post description">
          <button type="button" data-format="bold" aria-label="Bold selected text"><strong>B</strong></button>
          <button type="button" data-format="italic" aria-label="Italicize selected text"><em>I</em></button>
        </div>
        <textarea id="post-description" name="description" required><?= bethammi_escape(bethammi_admin_value('description')) ?></textarea>
        <div class="post-image-insert" data-upload-endpoint="post-image-upload.php">
          <h3>Add an image to your post</h3>
          <div class="post-image-insert__fields">
            <label>Image source
              <select data-image-source>
                <option value="url">Image URL or site path</option>
                <option value="upload">Upload from computer</option>
              </select>
            </label>
            <label data-image-url-field>Image URL or site path
              <input type="text" data-image-url placeholder="https://example.com/image.jpg or assets/images/photo.jpg">
            </label>
            <label data-image-file-field hidden>Choose image
              <input type="file" data-image-file accept="image/jpeg,image/png,image/webp">
            </label>
            <label>Text below the image
              <select data-image-text-type>
                <option value="caption">Caption</option>
                <option value="paragraph">Regular paragraph</option>
              </select>
            </label>
            <label>Image placement
              <select data-image-layout>
                <option value="left">Left, above the following text</option>
                <option value="center">Center, above the following text</option>
                <option value="right">Right, above the following text</option>
                <option value="gallery">Side-by-side gallery after the post text</option>
              </select>
            </label>
            <label data-image-caption-field><span>Caption shown below the image</span>
              <input type="text" data-image-caption maxlength="300" placeholder="Write a short caption">
            </label>
            <label>Image description for accessibility (not displayed)
              <input type="text" data-image-alt maxlength="200" placeholder="Describe the image">
            </label>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ad dignissimos assumenda mollitia ipsam iure eos corrupti officiis nesciunt at? Atque quaerat ab, numquam id obcaecati nesciunt? Ab quibusdam vitae quidem recusandae assumenda praesentium incidunt! Molestiae velit adipisci architecto vero sunt, sequi nulla facilis deserunt assumenda voluptas quam! Quos, dolores?
          </div>
          <button type="button" class="button button--secondary post-image-insert__button" data-insert-image>Insert image</button>
          <p class="post-image-insert__status" role="status" aria-live="polite" hidden></p>
        </div>
        <p class="admin-help">Enter the caption or paragraph in the image controls; it will be inserted with the image and displayed below it. Add multiple gallery images to place them side by side. Click Add Post or Save changes to store the post text and images. Site paths are relative to the website root, for example assets/images/photo.jpg.</p>
      </div>
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

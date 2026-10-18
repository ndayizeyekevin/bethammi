<?php
if ($adminPage !== 'add-post') {
    $publishedCount = count(array_filter($records, function ($record) {
        return (int) $record['is_published'] === 1;
    }));
    $hiddenCount = count($records) - $publishedCount;
}
?>
<?php if ($adminPage !== 'add-post'): ?>
<section class="stats-grid stats-grid--compact" aria-label="<?= bethammi_escape($sections[$section]['label']) ?> summary">
  <article class="stat-card stat-card--compact"><div><p>Total <?= bethammi_escape(strtolower($sections[$section]['label'])) ?></p><strong><?= count($records) ?></strong></div></article>
  <article class="stat-card stat-card--compact"><div><p>Published</p><strong><?= $publishedCount ?></strong></div></article>
  <article class="stat-card stat-card--compact"><div><p>Hidden</p><strong><?= $hiddenCount ?></strong></div></article>
</section>
<?php endif; ?>

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
        <div class="admin-field">
          <label for="featured-image-source">Highlight image source</label>
          <select id="featured-image-source" data-featured-image-source>
            <option value="url">Online URL or site path</option>
            <option value="upload">Upload from computer</option>
          </select>
          <label class="featured-image-url-field" data-featured-image-url-field>Highlight image URL or path
            <input id="featured-image-url" type="text" name="featured_image_url" data-featured-image-url value="<?= bethammi_escape(bethammi_admin_value('featured_image_url')) ?>" placeholder="https://example.com/image.jpg or assets/images/photo.jpg">
          </label>
          <div class="featured-image-upload" data-featured-image-upload hidden>
            <label>Choose highlight image
              <input type="file" data-featured-image-file accept="image/jpeg,image/png,image/webp">
            </label>
            <button type="button" class="button button--secondary" data-upload-featured-image>Upload highlight image</button>
          </div>
          <p class="featured-image-status admin-help" data-featured-image-status role="status" aria-live="polite" hidden></p>
        </div>
      </div>
      <?php bethammi_admin_field('youtube_url', 'YouTube video URL', 'url', false, true); ?>
      <p class="admin-help">Optional. Use an https:// YouTube video, Shorts, or live link.</p>
      <?php bethammi_admin_field('short_info', 'Short info for cards', 'textarea', false, true); ?>
      <div class="post-description-field admin-field--wide">
        <label for="post-description">Full post description</label>
        <div class="post-formatting-toolbar" role="group" aria-label="Format post description">
          <button type="button" data-format="bold" aria-label="Bold selected text"><strong>B</strong></button>
          <button type="button" data-format="italic" aria-label="Italicize selected text"><em>I</em></button>
          <label class="post-formatting-toolbar__heading">
            <select data-heading-level aria-label="Heading level">
              <option value="1">Heading 1</option>
              <option value="2">Heading 2</option>
              <option value="3">Heading 3</option>
              <option value="4">Heading 4</option>
              <option value="5">Heading 5</option>
              <option value="6">Heading 6</option>
            </select>
          </label>
          <button type="button" data-format-heading>Apply heading</button>
        </div>
        <textarea id="post-description" name="description"><?= bethammi_escape(bethammi_admin_value('description')) ?></textarea>
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
            <label>Text style below the image
              <select data-image-text-type>
                <option value="caption">Caption</option>
                <option value="paragraph">Regular paragraph</option>
              </select>
            </label>
            <label>Image placement
              <select data-image-layout>
                <option value="left">Left aligned</option>
                <option value="center">Center aligned</option>
                <option value="right">Right aligned</option>
                <option value="gallery">Side-by-side gallery after the post text</option>
              </select>
            </label>
            <label><span data-image-below-label>Caption shown below the image (optional)</span>
              <textarea data-image-below-text maxlength="5000" rows="3" placeholder="Write a short caption"></textarea>
            </label>
            <label>Image description for accessibility (optional, not displayed)
              <input type="text" data-image-alt maxlength="200" placeholder="Describe the image">
            </label>
          </div>
          <button type="button" class="button button--secondary post-image-insert__button" data-add-post-image>Add image to post</button>
          <p class="post-image-insert__status" role="status" aria-live="polite" hidden></p>
          <div class="post-image-list" data-post-image-list data-existing-images="<?= bethammi_escape(json_encode($postImages, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP) ?: '[]') ?>"></div>
        </div>
        <p class="admin-help">After choosing a computer image, click Add image to post to upload it. The accessibility description and caption or paragraph are optional. Uploaded files are saved in assets/images/posts/ with a generated filename (JPEG, PNG, or WebP; maximum 8 MB). Save the post to store its image details in the database. Site paths are relative to the website root, for example assets/images/photo.jpg.</p>
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

<?php if ($adminPage !== 'add-post'): ?>
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
<?php endif; ?>

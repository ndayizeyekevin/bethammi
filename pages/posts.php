<?php

require_once __DIR__ . '/../includes/posts-data.php';

header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-store');

$siteRoot = '../';
$post = null;
$posts = [];
$pageError = '';
$isSinglePost = isset($_GET['slug']) || isset($_GET['id']);
$pageScripts = $isSinglePost ? ['script.js'] : ['script.js', 'posts-archive.js'];

try {
    if ($isSinglePost) {
        if (isset($_GET['slug'], $_GET['id'])) {
            http_response_code(400);
            $pageError = 'Choose a post by slug or ID, not both.';
        } elseif (isset($_GET['slug'])) {
            $slug = is_string($_GET['slug']) ? $_GET['slug'] : '';
            if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $slug)) {
                http_response_code(404);
                $pageError = 'This post could not be found.';
            } else {
                $post = bethammi_post_by_slug($slug);
            }
        } else {
            $idValue = is_string($_GET['id']) ? $_GET['id'] : '';
            $id = filter_var($idValue, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
            if ($id === false) {
                http_response_code(404);
                $pageError = 'This post could not be found.';
            } else {
                $post = bethammi_post_by_id($id);
            }
        }

        if ($pageError === '' && $post === null) {
            http_response_code(404);
            $pageError = 'This post could not be found.';
        }
    } else {
        $posts = bethammi_list_posts();
    }
} catch (Throwable $error) {
    error_log('Beth Ammi posts page failed: ' . $error->getMessage());
    http_response_code(500);
    $pageError = 'Posts could not be loaded right now. Please try again later.';
}

$pageTitle = $isSinglePost && $post !== null
    ? $post['title'] . ' | Beth Ammi Christian Fellowship Church'
    : ($isSinglePost ? 'Post unavailable | Beth Ammi Christian Fellowship Church' : 'News & Sermons | Beth Ammi Christian Fellowship Church');
$pageDescription = $isSinglePost && $post !== null
    ? $post['short_info']
    : 'Explore the latest news, sermons, services, and events from Beth Ammi Christian Fellowship Church.';
$postContentHtml = $isSinglePost && $post !== null
    ? bethammi_post_response($post, true)['content']['rendered']
    : '';

require __DIR__ . '/../includes/site-head.php';
require __DIR__ . '/../includes/site-header.php';

?>
<main id="main">
  <?php if ($isSinglePost): ?>
    <section class="page-banner" aria-labelledby="page-title">
      <div class="container">
        <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="../index">Home</a><span aria-hidden="true">/</span><a href="posts">News &amp; sermons</a><span aria-hidden="true">/</span><span><?= $post !== null ? bethammi_escape($post['title']) : 'Post unavailable' ?></span></nav>
        <p class="eyebrow eyebrow--light"><span></span> News &amp; sermons</p>
        <h1 id="page-title"><?= $post !== null ? bethammi_escape($post['title']) : 'Post unavailable' ?></h1>
        <?php if ($post !== null && $post['short_info'] !== ''): ?>
        <p class="page-banner__summary"><?= bethammi_escape($post['short_info']) ?></p>
        <?php endif; ?>
      </div>
    </section>
    <?php if ($pageError !== ''): ?>
    <div class="container page-message" role="status"><?= bethammi_escape($pageError) ?></div>
    <?php endif; ?>
    <?php if ($post !== null): ?>
    <section class="container page-layout post-page-layout">
      <article class="page-article post-article">
        <div class="page-meta">Published <?= bethammi_escape(date('j F Y', strtotime($post['published_at']))) ?></div>
        <?php if ($post['featured_image_url'] !== '' && bethammi_valid_image_url($post['featured_image_url'])): ?>
        <img class="post-featured-image" src="<?= bethammi_escape($post['featured_image_url']) ?>" alt="<?= bethammi_escape($post['title']) ?>">
        <?php endif; ?>
        <div class="remote-content"><?= $postContentHtml ?></div>
      </article>
      <aside class="page-sidebar">
        <div class="sidebar-card sidebar-card--visit">
          <p class="eyebrow"><span></span> From our church family</p>
          <h2>More news<br>and <em>sermons.</em></h2>
          <p>Browse updates, services, events, and stories from Beth Ammi.</p>
          <a class="btn button button--navy" href="posts">View all posts <span aria-hidden="true">↗</span></a>
        </div>
      </aside>
    </section>
    <?php endif; ?>
  <?php else: ?>
    <section class="page-banner" aria-labelledby="page-title">
      <div class="container">
        <nav class="breadcrumbs" aria-label="Breadcrumb"><a href="../index">Home</a><span aria-hidden="true">/</span><span>News &amp; sermons</span></nav>
        <p class="eyebrow eyebrow--light"><span></span> From our church family</p>
        <h1 id="page-title">News &amp; sermons</h1>
        <p class="page-banner__summary">Explore services, events, and updates from Beth Ammi.</p>
      </div>
    </section>
    <?php if ($pageError !== ''): ?>
    <div class="container page-message" role="status"><?= bethammi_escape($pageError) ?></div>
    <?php endif; ?>
    <section class="container archive posts-archive">
      <div class="archive__heading">
        <div><p class="eyebrow"><span></span> Stories and updates</p><h2>Faith in <em>action.</em></h2><p>Read the latest news, sermons, services, and events from our church.</p></div>
        <label class="archive-search"><span>Search stories</span><input id="posts-search" type="search" placeholder="Try a title or date…" autocomplete="off"><span class="archive-search__icon" aria-hidden="true">⌕</span></label>
      </div>
      <p class="archive__count" id="posts-count"><?= count($posts) ?> <?= count($posts) === 1 ? 'story' : 'stories' ?></p>
      <div class="archive-grid" id="posts-archive">
        <?php foreach ($posts as $post): ?>
        <article class="archive-card" data-search="<?= bethammi_escape(mb_strtolower($post['title'] . ' ' . $post['short_info'] . ' ' . $post['published_at'], 'UTF-8')) ?>">
          <?php if ($post['featured_image_url'] !== '' && bethammi_valid_image_url($post['featured_image_url'])): ?>
          <div class="archive-card__image"><img src="<?= bethammi_escape($post['featured_image_url']) ?>" alt="<?= bethammi_escape($post['title']) ?>" loading="lazy"></div>
          <?php else: ?>
          <div class="archive-card__image" aria-hidden="true"></div>
          <?php endif; ?>
          <div class="archive-card__body">
            <p class="story-card__meta">BETH AMMI <span>·</span> <?= bethammi_escape(date('j F Y', strtotime($post['published_at']))) ?></p>
            <h3><?= bethammi_escape($post['title']) ?></h3>
            <p><?= bethammi_escape($post['short_info']) ?></p>
            <a class="story-card__link" href="posts?slug=<?= rawurlencode($post['slug']) ?>">Read the story <span aria-hidden="true">↗</span></a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
      <p class="archive-empty" id="posts-empty"<?= $posts || $pageError !== '' ? ' hidden' : '' ?>><?= $posts ? 'No stories match that search. Try a different word.' : 'There are no stories to show right now.' ?></p>
    </section>
  <?php endif; ?>
</main>
<?php require __DIR__ . '/../includes/site-footer.php'; ?>

<?php

require_once __DIR__ . '/includes/posts-data.php';

header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-store');

$slug = isset($_GET['slug']) && is_string($_GET['slug']) ? $_GET['slug'] : '';
$post = null;

if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $slug)) {
    http_response_code(404);
} else {
    try {
        $post = bethammi_post_by_slug($slug);
        if ($post === null) {
            http_response_code(404);
        }
    } catch (Throwable $error) {
        error_log('Beth Ammi post page failed: ' . $error->getMessage());
        http_response_code(500);
    }
}

$title = $post === null ? 'Post unavailable' : $post['title'];
$summary = $post === null ? '' : $post['short_info'];
$description = function_exists('mb_substr')
    ? mb_substr($summary, 0, 155, 'UTF-8')
    : substr($summary, 0, 155);
$publishedLabel = $post === null
    ? ''
    : date('j F Y', strtotime($post['published_at']));
$contentHtml = $post === null
    ? ''
    : bethammi_post_response($post, true)['content']['rendered'];

$template = file_get_contents(__DIR__ . '/page.html');
if ($template === false) {
    http_response_code(500);
    exit('The post page template could not be read.');
}

$bodyAttributes = ' data-content-kind="post" data-content-slug="' . bethammi_escape($slug) . '"';
$template = str_replace('<body>', '<body' . $bodyAttributes . '>', $template);
$template = str_replace(
    '<title>Beth Ammi Christian Fellowship Church</title>',
    '<title>' . bethammi_escape($title) . ' | Beth Ammi Christian Fellowship Church</title>',
    $template
);
$template = preg_replace_callback(
    '/<meta name="description" content="[^"]*">/',
    function () use ($description) {
        return '<meta name="description" content="' . bethammi_escape($description) . '">';
    },
    $template,
    1
);
$template = str_replace(
    '<h1 id="page-title">Loading page…</h1>',
    '<h1 id="page-title">' . bethammi_escape($title) . '</h1>',
    $template
);
$template = str_replace(
    '<span id="breadcrumb-label">Explore</span>',
    '<span id="breadcrumb-label">' . bethammi_escape($title) . '</span>',
    $template
);
$template = str_replace(
    '<p class="page-banner__summary" id="page-summary"></p>',
    '<p class="page-banner__summary" id="page-summary">' . bethammi_escape($summary) . '</p>',
    $template
);
$template = str_replace(
    '<div class="page-meta" id="page-meta" hidden></div>',
    $publishedLabel === ''
        ? '<div class="page-meta" id="page-meta" hidden></div>'
        : '<div class="page-meta" id="page-meta">Published ' . bethammi_escape($publishedLabel) . '</div>',
    $template
);
$template = str_replace(
    '<div class="remote-content" id="page-content"></div>',
    '<div class="remote-content" id="page-content">' . $contentHtml . '</div>',
    $template
);

echo $template;

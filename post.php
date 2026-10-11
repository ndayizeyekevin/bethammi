<?php

require_once __DIR__ . '/includes/posts-data.php';

header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-store');

$contentKind = 'post';
$contentSlug = isset($_GET['slug']) && is_string($_GET['slug']) ? $_GET['slug'] : '';
$pageScripts = ['page.js'];
$pageError = '';
$post = null;

if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $contentSlug)) {
    http_response_code(404);
    $pageError = 'This post could not be found.';
} else {
    try {
        $post = bethammi_post_by_slug($contentSlug);
        if ($post === null) {
            http_response_code(404);
            $pageError = 'This post could not be found.';
        }
    } catch (Throwable $error) {
        error_log('Beth Ammi post page failed: ' . $error->getMessage());
        http_response_code(500);
        $pageError = 'The post could not be loaded right now. Please try again later.';
    }
}

$pageTitle = $post === null
    ? 'Post unavailable | Beth Ammi Christian Fellowship Church'
    : $post['title'] . ' | Beth Ammi Christian Fellowship Church';
$pageDescription = $post === null ? '' : $post['short_info'];
$postContentHtml = $post === null
    ? ''
    : bethammi_post_response($post, true)['content']['rendered'];

require __DIR__ . '/includes/site-head.php';
require __DIR__ . '/includes/site-header.php';
require __DIR__ . '/includes/page-content.php';
require __DIR__ . '/includes/site-footer.php';

<?php

require_once __DIR__ . '/database.php';
require_once __DIR__ . '/static-pages.php';
$staticPages = bethammi_static_pages();

$slug = isset($staticPageSlug) && is_string($staticPageSlug) ? $staticPageSlug : '';
if (!isset($staticPages[$slug])) {
    http_response_code(404);
    exit('Page not found.');
}

$contentPath = dirname(__DIR__) . '/page-content/' . $slug . '.html';
$staticPageHtml = file_get_contents($contentPath);
if ($staticPageHtml === false) {
    error_log('Beth Ammi static page content could not be read: ' . $slug);
    http_response_code(500);
    exit('Page content is temporarily unavailable.');
}

$isStaticPage = true;
$contentKind = 'page';
$contentSlug = $slug;
$staticPageTitle = $staticPages[$slug];
$pageTitle = $staticPageTitle . ' | Beth Ammi Christian Fellowship Church';
$pageDescription = 'Learn about ' . $staticPageTitle . ' at Beth Ammi Christian Fellowship Church.';
$pageScripts = ['page.js'];

require dirname(__DIR__) . '/includes/site-head.php';
require dirname(__DIR__) . '/includes/site-header.php';
require dirname(__DIR__) . '/includes/page-content.php';
require dirname(__DIR__) . '/includes/site-footer.php';

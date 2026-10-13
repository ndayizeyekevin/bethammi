<?php

$pageDescription = 'Explore Beth Ammi Christian Fellowship Church, our ministries, community, news, sermons, and ways to connect.';
$pageScripts = ['page.js'];
$contentKind = isset($_GET['type']) && $_GET['type'] === 'post' ? 'post' : 'page';
$contentSlug = isset($_GET['slug']) && is_string($_GET['slug']) ? $_GET['slug'] : '';

if ($contentKind === 'page' && $contentSlug === 'our-staff') {
    header('Location: pages/team', true, 301);
    exit;
}
if ($contentKind === 'page' && in_array($contentSlug, ['contact', 'contact-us'], true)) {
    header('Location: pages/contact-us', true, 301);
    exit;
}
if ($contentKind === 'page' && $contentSlug === 'news-and-sermons') {
    header('Location: pages/posts', true, 301);
    exit;
}

require_once __DIR__ . '/includes/static-pages.php';
if ($contentKind === 'page' && preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $contentSlug)) {
    if (isset(bethammi_static_pages()[$contentSlug])) {
        header('Location: pages/' . rawurlencode($contentSlug), true, 301);
        exit;
    }
}

require __DIR__ . '/includes/site-head.php';
require __DIR__ . '/includes/site-header.php';
require __DIR__ . '/includes/page-content.php';
require __DIR__ . '/includes/site-footer.php';

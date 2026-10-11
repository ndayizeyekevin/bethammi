<?php

$pageDescription = 'Explore Beth Ammi Christian Fellowship Church, our ministries, community, news, sermons, and ways to connect.';
$pageScripts = ['page.js'];
$contentKind = isset($_GET['type']) && $_GET['type'] === 'post' ? 'post' : 'page';
$contentSlug = isset($_GET['slug']) && is_string($_GET['slug']) ? $_GET['slug'] : '';

require __DIR__ . '/includes/site-head.php';
require __DIR__ . '/includes/site-header.php';
require __DIR__ . '/includes/page-content.php';
require __DIR__ . '/includes/site-footer.php';

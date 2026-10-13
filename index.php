<?php

$pageTitle = 'Beth Ammi Christian Fellowship Church | Welcome Home';
$pageDescription = 'Find a church home at Beth Ammi Christian Fellowship Church. Join us for worship, prayer, fellowship, and the Word of God.';
$pageScripts = ['posts.js', 'script.js'];
$homePosts = [];
$homePostsError = false;

require_once __DIR__ . '/includes/posts-data.php';
try {
    $homePosts = bethammi_list_posts(6);
} catch (Throwable $error) {
    error_log('Beth Ammi homepage posts failed: ' . $error->getMessage());
    $homePostsError = true;
}

require __DIR__ . '/includes/site-head.php';
require __DIR__ . '/includes/site-header.php';
require __DIR__ . '/includes/home-content.php';
require __DIR__ . '/includes/site-footer.php';

<?php

$postQuery = [];
if (isset($_GET['slug']) && is_string($_GET['slug']) && preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $_GET['slug'])) {
    $postQuery['slug'] = $_GET['slug'];
} elseif (isset($_GET['id']) && is_string($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) !== false) {
    $postQuery['id'] = $_GET['id'];
}

header('Location: pages/posts' . ($postQuery ? '?' . http_build_query($postQuery) : ''), true, 301);
exit;

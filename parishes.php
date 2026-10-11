<?php

require_once __DIR__ . '/includes/posts-data.php';

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

try {
    echo json_encode(['parishes' => bethammi_parishes()], JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
} catch (Throwable $error) {
    error_log('Beth Ammi parishes endpoint failed: ' . $error->getMessage());
    http_response_code(500);
    echo '{"error":"Parish information could not be loaded."}';
}

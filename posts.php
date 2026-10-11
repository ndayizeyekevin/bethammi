<?php

require_once __DIR__ . '/includes/posts-data.php';

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function bethammi_json_response(array $payload, $status = 200)
{
    http_response_code($status);
    $json = json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
    if ($json === false) {
        http_response_code(500);
        echo '{"error":"The response could not be encoded."}';
        return;
    }
    echo $json;
}

try {
    if (isset($_GET['slug'])) {
        $slug = is_string($_GET['slug']) ? $_GET['slug'] : '';
        if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $slug)) {
            bethammi_json_response(['error' => 'Invalid post slug.'], 400);
            exit;
        }

        $post = bethammi_post_by_slug($slug);
        if ($post === null) {
            bethammi_json_response(['error' => 'Post not found.'], 404);
            exit;
        }

        bethammi_json_response(bethammi_post_response($post, true));
        exit;
    }

    $limit = null;
    if (isset($_GET['limit'])) {
        $limitValue = is_string($_GET['limit']) ? $_GET['limit'] : '';
        $limit = filter_var($limitValue, FILTER_VALIDATE_INT);
        if ($limit === false || $limit < 1 || $limit > 100) {
            bethammi_json_response(['error' => 'Limit must be a number between 1 and 100.'], 400);
            exit;
        }
    }

    $posts = array_map(
        function ($post) {
            return bethammi_post_response($post);
        },
        bethammi_list_posts($limit)
    );
    bethammi_json_response(['posts' => $posts]);
} catch (Throwable $error) {
    error_log('Beth Ammi posts endpoint failed: ' . $error->getMessage());
    bethammi_json_response(['error' => 'Posts could not be loaded.'], 500);
}

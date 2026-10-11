<?php

require_once __DIR__ . '/../includes/database.php';

function bethammi_import_text($html)
{
    $text = preg_replace('/<br\s*\/?>|<\/(p|div|section|h[1-6]|li|blockquote|tr)>/i', "\n\n", (string) $html);
    $text = html_entity_decode(strip_tags($text), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $text = preg_replace('/[ \t]+\n/', "\n", $text);
    $text = preg_replace('/\n[ \t]+/', "\n", $text);
    $text = preg_replace('/\n{3,}/', "\n\n", $text);
    return trim($text);
}

$source = dirname(__DIR__) . '/site-content.json';
$json = file_get_contents($source);
if ($json === false) {
    fwrite(STDERR, "Could not read site-content.json.\n");
    exit(1);
}

try {
    $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    $posts = $data['posts'] ?? null;
    if (!is_array($posts)) {
        throw new RuntimeException('The content snapshot does not contain a posts collection.');
    }

    $connection = bethammi_db();
    $statement = $connection->prepare(
        'INSERT IGNORE INTO posts
            (slug, title, published_at, featured_image_url, short_info, description, is_published)
         VALUES
            (:slug, :title, :published_at, :featured_image_url, :short_info, :description, 1)'
    );
    $connection->beginTransaction();
    $imported = 0;

    foreach ($posts as $post) {
        $slug = (string) ($post['slug'] ?? '');
        $title = bethammi_import_text($post['title']['rendered'] ?? '');
        $date = strtotime((string) ($post['date'] ?? ''));
        $description = bethammi_import_text($post['content']['rendered'] ?? '');
        $shortInfo = bethammi_import_text($post['excerpt']['rendered'] ?? '');
        if ($shortInfo === '') {
            $shortInfo = mb_substr($description, 0, 240, 'UTF-8');
        }
        $imageUrl = (string) ($post['featuredImage']['url'] ?? '');

        if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $slug) || $title === '' || $date === false) {
            throw new RuntimeException('A post in the snapshot is missing a valid slug, title, or date.');
        }
        if (!bethammi_valid_image_url($imageUrl)) {
            throw new RuntimeException(sprintf('Post "%s" has an invalid featured image URL.', $slug));
        }

        $statement->execute([
            'slug' => $slug,
            'title' => $title,
            'published_at' => date('Y-m-d', $date),
            'featured_image_url' => $imageUrl,
            'short_info' => mb_substr($shortInfo, 0, 500, 'UTF-8'),
            'description' => $description,
        ]);
        $imported += $statement->rowCount();
    }

    $connection->commit();
    printf("Imported %d posts. Existing posts were left unchanged.\n", $imported);
} catch (Throwable $error) {
    if (isset($connection) && $connection->inTransaction()) {
        $connection->rollBack();
    }
    fwrite(STDERR, 'Content import failed: ' . $error->getMessage() . "\n");
    exit(1);
}

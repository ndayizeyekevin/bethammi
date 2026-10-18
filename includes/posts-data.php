<?php

require_once __DIR__ . '/database.php';

function bethammi_list_posts($limit = null, $excludeId = null)
{
    $sql = 'SELECT id, slug, title, published_at, featured_image_url, youtube_url, short_info, description
        FROM posts WHERE is_published = 1';
    if ($excludeId !== null) {
        $sql .= ' AND id <> :exclude_id';
    }
    $sql .= ' ORDER BY published_at DESC, id DESC';
    if ($limit !== null) {
        $statement = bethammi_db()->prepare($sql . ' LIMIT :limit');
        $statement->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        if ($excludeId !== null) {
            $statement->bindValue(':exclude_id', (int) $excludeId, PDO::PARAM_INT);
        }
        $statement->execute();
        return $statement->fetchAll();
    }
    if ($excludeId !== null) {
        $statement = bethammi_db()->prepare($sql);
        $statement->bindValue(':exclude_id', (int) $excludeId, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll();
    }
    return bethammi_db()->query($sql)->fetchAll();
}

function bethammi_post_by_slug($slug)
{
    $statement = bethammi_db()->prepare(
        'SELECT id, slug, title, published_at, featured_image_url, youtube_url, short_info, description
         FROM posts WHERE slug = :slug AND is_published = 1 LIMIT 1'
    );
    $statement->execute(['slug' => $slug]);
    return $statement->fetch() ?: null;
}

function bethammi_post_by_id($id)
{
    $statement = bethammi_db()->prepare(
        'SELECT id, slug, title, published_at, featured_image_url, youtube_url, short_info, description
         FROM posts WHERE id = :id AND is_published = 1 LIMIT 1'
    );
    $statement->execute(['id' => $id]);
    return $statement->fetch() ?: null;
}

function bethammi_post_inline_image($paragraph)
{
    if (!preg_match('/^!\[([^\]\r\n]*)\]\(([^)\s]+)(?:\s+"([^"\r\n]*)")?\)(?:\{layout=(left|center|right|gallery)\})?$/u', trim($paragraph), $imageMatch)) {
        return null;
    }

    $imageUrl = $imageMatch[2];
    if ($imageUrl === '' || !bethammi_valid_image_url($imageUrl)) {
        return null;
    }

    $layout = $imageMatch[4] ?? 'left';
    $caption = trim($imageMatch[3] ?? '');
    $figure = '<figure class="post-inline-image post-inline-image--' . $layout . '">'
        . '<img src="' . bethammi_escape($imageUrl) . '" alt="' . bethammi_escape($imageMatch[1]) . '" loading="lazy">'
        . ($caption !== '' ? '<figcaption>' . bethammi_escape($caption) . '</figcaption>' : '')
        . '</figure>';

    return ['layout' => $layout, 'html' => $figure];
}

function bethammi_post_response(array $post, $includeDescription = false)
{
    $paragraphs = preg_split('/\R{2,}/u', trim((string) $post['description']));
    $renderedParagraphs = [];
    $galleryImages = [];
    $flushGallery = function () use (&$renderedParagraphs, &$galleryImages) {
        if ($galleryImages !== []) {
            $renderedParagraphs[] = '<div class="post-inline-gallery">' . implode('', $galleryImages) . '</div>';
            $galleryImages = [];
        }
    };

    foreach (array_filter($paragraphs, 'strlen') as $paragraph) {
        $paragraph = trim($paragraph);
        $image = bethammi_post_inline_image($paragraph);
        if ($image !== null) {
            if ($image['layout'] === 'gallery') {
                $galleryImages[] = $image['html'];
                continue;
            }

            $flushGallery();
            $renderedParagraphs[] = $image['html'];
            continue;
        }

        $flushGallery();
        $escapedParagraph = bethammi_escape($paragraph);
        $formattedParagraph = preg_replace_callback(
            '/\*\*([^*\r\n]+)\*\*|\*([^*\r\n]+)\*/u',
            function ($matches) {
                if (($matches[1] ?? '') !== '') {
                    return '<strong>' . $matches[1] . '</strong>';
                }
                return '<em>' . $matches[2] . '</em>';
            },
            $escapedParagraph
        );
        $renderedParagraphs[] = '<p>' . nl2br($formattedParagraph, false) . '</p>';
    }
    $flushGallery();
    $content = implode('', $renderedParagraphs);

    $result = [
        'id' => (int) $post['id'],
        'date' => $post['published_at'],
        'slug' => $post['slug'],
        'link' => 'https://www.bethammicfc.org/' . rawurlencode($post['slug']) . '/',
        'title' => ['rendered' => $post['title']],
        'excerpt' => ['rendered' => '<p>' . bethammi_escape($post['short_info']) . '</p>'],
        'featuredImage' => [
            'url' => $post['featured_image_url'],
            'alt' => $post['title'],
        ],
        'youtubeUrl' => $post['youtube_url'] ?? '',
    ];
    if ($includeDescription) {
        $result['content'] = ['rendered' => $content];
    }

    return $result;
}

function bethammi_team_members()
{
    return bethammi_db()->query(
        'SELECT id, name, title, photo_url, bio
         FROM team_members WHERE is_published = 1
         ORDER BY sort_order ASC, name ASC'
    )->fetchAll();
}

function bethammi_parishes()
{
    return bethammi_db()->query(
        'SELECT id, name, country, region, location, photo_url, short_info, description, member_count
         FROM parishes WHERE is_published = 1
         ORDER BY sort_order ASC, name ASC'
    )->fetchAll();
}

function bethammi_plain_text($html)
{
    $text = html_entity_decode(strip_tags((string) $html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    return trim(preg_replace('/\s+/u', ' ', $text));
}

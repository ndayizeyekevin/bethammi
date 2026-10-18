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
        'SELECT id, slug, title, published_at, featured_image_url, youtube_url,
                action_button_text, action_button_url, action_button_new_tab, short_info, description
         FROM posts WHERE slug = :slug AND is_published = 1 LIMIT 1'
    );
    $statement->execute(['slug' => $slug]);
    return $statement->fetch() ?: null;
}

function bethammi_post_by_id($id)
{
    $statement = bethammi_db()->prepare(
        'SELECT id, slug, title, published_at, featured_image_url, youtube_url,
                action_button_text, action_button_url, action_button_new_tab, short_info, description
         FROM posts WHERE id = :id AND is_published = 1 LIMIT 1'
    );
    $statement->execute(['id' => $id]);
    return $statement->fetch() ?: null;
}

function bethammi_post_images($postId)
{
    $statement = bethammi_db()->prepare(
        'SELECT image_path, alt_text, below_text, below_text_type, layout
         FROM post_images WHERE post_id = :post_id ORDER BY sort_order ASC, id ASC'
    );
    $statement->execute(['post_id' => (int) $postId]);
    return $statement->fetchAll();
}

function bethammi_render_post_images(array $images)
{
    $output = [];
    $gallery = [];
    $flushGallery = function () use (&$output, &$gallery) {
        if ($gallery !== []) {
            $output[] = '<div class="post-inline-gallery">' . implode('', $gallery) . '</div>';
            $gallery = [];
        }
    };

    foreach ($images as $image) {
        $imagePath = (string) ($image['image_path'] ?? '');
        $layout = (string) ($image['layout'] ?? 'left');
        $textType = (string) ($image['below_text_type'] ?? 'caption');
        if (
            $imagePath === ''
            || !bethammi_valid_image_url($imagePath)
            || !in_array($layout, ['left', 'center', 'right', 'gallery'], true)
            || !in_array($textType, ['caption', 'paragraph'], true)
        ) {
            continue;
        }

        $belowText = (string) ($image['below_text'] ?? '');
        $figure = '<figure class="post-inline-image post-inline-image--' . $layout . '">'
            . '<img src="' . bethammi_escape($imagePath) . '" alt="' . bethammi_escape($image['alt_text'] ?? '') . '" loading="lazy">'
            . ($belowText !== ''
                ? ($textType === 'caption'
                    ? '<figcaption>' . bethammi_escape($belowText) . '</figcaption>'
                    : '<p>' . nl2br(bethammi_escape($belowText), false) . '</p>')
                : '')
            . '</figure>';

        if ($layout === 'gallery') {
            $gallery[] = $figure;
            continue;
        }

        $flushGallery();
        $output[] = $figure;
    }
    $flushGallery();

    return $output === [] ? '' : '<div class="post-media">' . implode('', $output) . '</div>';
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

function bethammi_post_card_summary(array $post, $limit = 180)
{
    $shortInfo = trim((string) ($post['short_info'] ?? ''));
    if ($shortInfo !== '') {
        return $shortInfo;
    }

    $description = (string) ($post['description'] ?? '');
    $paragraphs = preg_split('/\R{2,}/u', $description);
    $text = [];
    foreach ($paragraphs as $paragraph) {
        $paragraph = trim($paragraph);
        if ($paragraph === '' || bethammi_post_inline_image($paragraph) !== null) {
            continue;
        }
        $paragraph = preg_replace('/\[([^\]]+)\]\([^)]+\)/u', '$1', $paragraph);
        $paragraph = preg_replace('/!\[([^\]]*)\]\([^)]+\)/u', '$1', $paragraph);
        $paragraph = preg_replace('/^#{1,6}[ \t]+/u', '', $paragraph);
        $paragraph = preg_replace('/\*\*([^*]+)\*\*|\*([^*]+)\*/u', '$1$2', $paragraph);
        $paragraph = preg_replace('/(?:^|\s)[*-][ \t]+/u', ' ', $paragraph);
        $text[] = trim(strip_tags($paragraph));
    }

    $summary = trim(preg_replace('/\s+/u', ' ', implode(' ', array_filter($text, 'strlen'))));
    if ($summary === '') {
        return '';
    }

    $limit = max(1, (int) $limit);
    if (mb_strlen($summary, 'UTF-8') <= $limit) {
        return $summary;
    }

    $truncated = rtrim(mb_substr($summary, 0, $limit - 1, 'UTF-8'));
    $lastSpace = mb_strrpos($truncated, ' ', 0, 'UTF-8');
    if ($lastSpace !== false && $lastSpace >= (int) ($limit * 0.65)) {
        $truncated = rtrim(mb_substr($truncated, 0, $lastSpace, 'UTF-8'));
    }
    return $truncated . '…';
}

function bethammi_post_action_button(array $post)
{
    $text = trim((string) ($post['action_button_text'] ?? ''));
    $url = trim((string) ($post['action_button_url'] ?? ''));
    if ($text === '' || $url === '' || !bethammi_valid_post_button_url($url)) {
        return '';
    }

    $urlParts = parse_url($url);
    if (!isset($urlParts['scheme']) && !str_starts_with($url, '/') && !str_starts_with($url, '#') && !str_starts_with($url, '?')) {
        $url = '/' . $url;
    }
    $newTab = (int) ($post['action_button_new_tab'] ?? 0) === 1;
    return '<p class="post-action"><a class="button button--navy post-action__button" href="'
        . bethammi_escape($url) . '"'
        . ($newTab ? ' target="_blank" rel="noopener noreferrer"' : '')
        . '>' . bethammi_escape($text) . '</a></p>';
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
        if (preg_match('/^(#{1,6})[ \t]+(.+)$/u', $formattedParagraph, $headingMatch)) {
            $level = strlen($headingMatch[1]);
            $renderedParagraphs[] = '<h' . $level . '>' . $headingMatch[2] . '</h' . $level . '>';
        } else {
            $renderedParagraphs[] = '<p>' . nl2br($formattedParagraph, false) . '</p>';
        }
    }
    $flushGallery();
    $content = implode('', $renderedParagraphs);
    if ($includeDescription) {
        $content .= bethammi_render_post_images(bethammi_post_images((int) $post['id']));
    }

    $result = [
        'id' => (int) $post['id'],
        'date' => $post['published_at'],
        'slug' => $post['slug'],
        'link' => 'https://www.bethammicfc.org/' . rawurlencode($post['slug']) . '/',
        'title' => ['rendered' => $post['title']],
        'excerpt' => ['rendered' => '<p>' . bethammi_escape($post['short_info']) . '</p>'],
        'cardSummary' => bethammi_post_card_summary($post),
        'featuredImage' => [
            'url' => $post['featured_image_url'],
            'alt' => $post['title'],
        ],
        'youtubeUrl' => $post['youtube_url'] ?? '',
    ];
    if ($includeDescription) {
        $result['content'] = ['rendered' => $content];
        $result['actionButton'] = [
            'text' => $post['action_button_text'] ?? '',
            'url' => $post['action_button_url'] ?? '',
            'newTab' => (int) ($post['action_button_new_tab'] ?? 0) === 1,
        ];
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

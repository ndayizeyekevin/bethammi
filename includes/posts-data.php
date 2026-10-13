<?php

require_once __DIR__ . '/database.php';

function bethammi_list_posts($limit = null)
{
    $sql = 'SELECT id, slug, title, published_at, featured_image_url, short_info, description
        FROM posts WHERE is_published = 1 ORDER BY published_at DESC, id DESC';
    if ($limit !== null) {
        $statement = bethammi_db()->prepare($sql . ' LIMIT :limit');
        $statement->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll();
    }
    return bethammi_db()->query($sql)->fetchAll();
}

function bethammi_post_by_slug($slug)
{
    $statement = bethammi_db()->prepare(
        'SELECT id, slug, title, published_at, featured_image_url, short_info, description
         FROM posts WHERE slug = :slug AND is_published = 1 LIMIT 1'
    );
    $statement->execute(['slug' => $slug]);
    return $statement->fetch() ?: null;
}

function bethammi_post_by_id($id)
{
    $statement = bethammi_db()->prepare(
        'SELECT id, slug, title, published_at, featured_image_url, short_info, description
         FROM posts WHERE id = :id AND is_published = 1 LIMIT 1'
    );
    $statement->execute(['id' => $id]);
    return $statement->fetch() ?: null;
}

function bethammi_post_response(array $post, $includeDescription = false)
{
    $paragraphs = preg_split('/\R{2,}/u', trim((string) $post['description']));
    $content = implode('', array_map(function ($paragraph) {
        return '<p>' . nl2br(bethammi_escape(trim($paragraph)), false) . '</p>';
    }, array_filter($paragraphs, 'strlen')));

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

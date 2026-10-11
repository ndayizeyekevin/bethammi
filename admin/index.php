<?php

require_once __DIR__ . '/../includes/admin-auth.php';

bethammi_start_admin_session();
header('Cache-Control: no-store, private');

$sections = [
    'posts' => [
        'label' => 'Posts',
        'singular' => 'Post',
        'table' => 'posts',
        'fields' => ['title', 'slug', 'published_at', 'featured_image_url', 'short_info', 'description', 'is_published'],
    ],
    'team' => [
        'label' => 'Team',
        'singular' => 'Team member',
        'table' => 'team_members',
        'fields' => ['name', 'title', 'photo_url', 'bio', 'sort_order', 'is_published'],
    ],
    'parishes' => [
        'label' => 'Parishes',
        'singular' => 'Parish',
        'table' => 'parishes',
        'fields' => ['name', 'country', 'region', 'location', 'photo_url', 'short_info', 'description', 'member_count', 'sort_order', 'is_published'],
    ],
];

function bethammi_admin_redirect($query)
{
    header('Location: index.php?' . $query);
    exit;
}

function bethammi_admin_value($key, $fallback = '')
{
    if (array_key_exists($key, $_POST)) {
        return is_string($_POST[$key]) ? $_POST[$key] : $fallback;
    }
    return isset($GLOBALS['selectedRecord'][$key]) ? (string) $GLOBALS['selectedRecord'][$key] : $fallback;
}

function bethammi_admin_input($key, $fallback = '')
{
    $value = $_POST[$key] ?? $fallback;
    return is_string($value) || is_numeric($value) ? (string) $value : $fallback;
}

function bethammi_admin_field($name, $label, $type = 'text', $required = false, $wide = false)
{
    $value = bethammi_admin_value($name);
    $requiredAttribute = $required ? ' required' : '';
    $class = $wide ? ' class="admin-field--wide"' : '';
    echo '<label' . $class . '>' . bethammi_escape($label);
    if ($type === 'textarea') {
        echo '<textarea name="' . bethammi_escape($name) . '"' . $requiredAttribute . '>' . bethammi_escape($value) . '</textarea>';
    } else {
        echo '<input type="' . bethammi_escape($type) . '" name="' . bethammi_escape($name) . '" value="' . bethammi_escape($value) . '"' . $requiredAttribute . '>';
    }
    echo '</label>';
}

function bethammi_admin_image_field($name, $label)
{
    bethammi_admin_field($name, $label);
    echo '<p class="admin-help">Use a public https image URL or a path such as assets/images/photo.jpg.</p>';
}

$message = '';
$error = '';
$isAuthenticated = isset($_SESSION['admin_user']);
$section = isset($_GET['section']) && is_string($_GET['section']) && isset($sections[$_GET['section']])
    ? $_GET['section']
    : 'posts';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!bethammi_check_admin_csrf()) {
        http_response_code(403);
        $error = 'This form expired or could not be verified. Reload the page and try again.';
    } else {
        $action = is_string($_POST['action'] ?? null) ? $_POST['action'] : '';
        try {
            if (!$isAuthenticated && $action === 'login') {
                $username = trim(bethammi_admin_input('username'));
                $password = bethammi_admin_input('password');
                $ipHash = hash('sha256', (string) ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
                $attempts = bethammi_db()->prepare(
                    'SELECT COUNT(*) FROM admin_login_attempts
                     WHERE username = :username AND ip_hash = :ip_hash
                     AND attempted_at >= (NOW() - INTERVAL 15 MINUTE)'
                );
                $attempts->execute(['username' => $username, 'ip_hash' => $ipHash]);
                if ((int) $attempts->fetchColumn() >= 5) {
                    $error = 'Too many sign-in attempts. Wait 15 minutes before trying again.';
                } else {
                    $statement = bethammi_db()->prepare('SELECT id, username, password_hash FROM admin_users WHERE username = :username LIMIT 1');
                    $statement->execute(['username' => $username]);
                    $user = $statement->fetch();
                    if (!$user || !password_verify($password, $user['password_hash'])) {
                        bethammi_db()->prepare(
                            'INSERT INTO admin_login_attempts (username, ip_hash) VALUES (:username, :ip_hash)'
                        )->execute(['username' => $username, 'ip_hash' => $ipHash]);
                        $error = 'The username or password was not recognized.';
                    } else {
                        session_regenerate_id(true);
                        $_SESSION['admin_user'] = ['id' => (int) $user['id'], 'username' => $user['username']];
                        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                        bethammi_db()->prepare(
                            'DELETE FROM admin_login_attempts WHERE username = :username AND ip_hash = :ip_hash'
                        )->execute(['username' => $username, 'ip_hash' => $ipHash]);
                        bethammi_db()->prepare('UPDATE admin_users SET last_login_at = NOW() WHERE id = :id')
                            ->execute(['id' => $user['id']]);
                        bethammi_admin_redirect('section=posts');
                    }
                }
            } elseif ($isAuthenticated && $action === 'logout') {
                $_SESSION = [];
                session_destroy();
                bethammi_admin_redirect('logged-out=1');
            } elseif ($isAuthenticated && $action === 'save') {
                $section = is_string($_POST['section'] ?? null) && isset($sections[$_POST['section']])
                    ? $_POST['section']
                    : 'posts';
                $entity = $sections[$section];
                $recordId = filter_var($_POST['id'] ?? null, FILTER_VALIDATE_INT);
                $values = [];

                if ($section === 'posts') {
                    $values['title'] = trim(bethammi_admin_input('title'));
                    $values['slug'] = trim(bethammi_admin_input('slug'));
                    if ($values['slug'] === '') $values['slug'] = bethammi_slugify($values['title']);
                    $values['published_at'] = trim(bethammi_admin_input('published_at'));
                    $values['featured_image_url'] = trim(bethammi_admin_input('featured_image_url'));
                    $values['short_info'] = trim(bethammi_admin_input('short_info'));
                    $values['description'] = trim(bethammi_admin_input('description'));
                    $date = DateTime::createFromFormat('!Y-m-d', $values['published_at']);
                    if (!$date || $date->format('Y-m-d') !== $values['published_at']) {
                        throw new InvalidArgumentException('Enter a valid post date.');
                    }
                    if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $values['slug'])) {
                        throw new InvalidArgumentException('Use a URL-friendly post slug made of lowercase letters, numbers, and hyphens.');
                    }
                    if ($values['title'] === '' || $values['description'] === '') {
                        throw new InvalidArgumentException('Post title and full description are required.');
                    }
                    if (mb_strlen($values['short_info'], 'UTF-8') > 500) {
                        throw new InvalidArgumentException('Post short info must be 500 characters or fewer.');
                    }
                    if (!bethammi_valid_image_url($values['featured_image_url'])) {
                        throw new InvalidArgumentException('Enter a valid http(s) image URL or a site-relative image path.');
                    }
                } elseif ($section === 'team') {
                    $values['name'] = trim(bethammi_admin_input('name'));
                    $values['title'] = trim(bethammi_admin_input('title'));
                    $values['photo_url'] = trim(bethammi_admin_input('photo_url'));
                    $values['bio'] = trim(bethammi_admin_input('bio'));
                    $values['sort_order'] = filter_var(bethammi_admin_input('sort_order', '0'), FILTER_VALIDATE_INT);
                    if ($values['name'] === '' || $values['title'] === '') {
                        throw new InvalidArgumentException('Team member name and title are required.');
                    }
                    if ($values['sort_order'] === false) {
                        throw new InvalidArgumentException('Team display order must be a whole number.');
                    }
                    if (!bethammi_valid_image_url($values['photo_url'])) {
                        throw new InvalidArgumentException('Enter a valid http(s) image URL or a site-relative image path.');
                    }
                } else {
                    $values['name'] = trim(bethammi_admin_input('name'));
                    $values['country'] = trim(bethammi_admin_input('country', 'Rwanda'));
                    $values['region'] = trim(bethammi_admin_input('region'));
                    $values['location'] = trim(bethammi_admin_input('location'));
                    $values['photo_url'] = trim(bethammi_admin_input('photo_url'));
                    $values['short_info'] = trim(bethammi_admin_input('short_info'));
                    $values['description'] = trim(bethammi_admin_input('description'));
                    $values['member_count'] = trim(bethammi_admin_input('member_count')) === ''
                        ? null
                        : filter_var(bethammi_admin_input('member_count'), FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]);
                    $values['sort_order'] = filter_var(bethammi_admin_input('sort_order', '0'), FILTER_VALIDATE_INT);
                    if ($values['name'] === '') {
                        throw new InvalidArgumentException('Parish name is required.');
                    }
                    if ($values['member_count'] === false || $values['sort_order'] === false) {
                        throw new InvalidArgumentException('Member count and display order must be whole numbers.');
                    }
                    if (!bethammi_valid_image_url($values['photo_url'])) {
                        throw new InvalidArgumentException('Enter a valid http(s) image URL or a site-relative image path.');
                    }
                }

                $values['is_published'] = ($_POST['is_published'] ?? '') === '1' ? 1 : 0;
                $columns = array_keys($values);
                if ($recordId) {
                    $assignments = array_map(function ($column) {
                        return "`{$column}` = :{$column}";
                    }, $columns);
                    $values['id'] = $recordId;
                    $sql = 'UPDATE `' . $entity['table'] . '` SET ' . implode(', ', $assignments) . ' WHERE id = :id';
                } else {
                    $columnNames = array_map(function ($column) {
                        return "`{$column}`";
                    }, $columns);
                    $placeholders = array_map(function ($column) {
                        return ':' . $column;
                    }, $columns);
                    $sql = 'INSERT INTO `' . $entity['table'] . '` (' . implode(', ', $columnNames) . ') VALUES (' . implode(', ', $placeholders) . ')';
                }
                bethammi_db()->prepare($sql)->execute($values);
                bethammi_admin_redirect('section=' . $section . '&saved=1');
            } elseif ($isAuthenticated && $action === 'delete') {
                $section = is_string($_POST['section'] ?? null) && isset($sections[$_POST['section']])
                    ? $_POST['section']
                    : 'posts';
                $recordId = filter_var($_POST['id'] ?? null, FILTER_VALIDATE_INT);
                if (!$recordId) {
                    throw new InvalidArgumentException('Select a valid record to delete.');
                }
                $entity = $sections[$section];
                bethammi_db()->prepare('DELETE FROM `' . $entity['table'] . '` WHERE id = :id')
                    ->execute(['id' => $recordId]);
                bethammi_admin_redirect('section=' . $section . '&deleted=1');
            }
        } catch (InvalidArgumentException $exception) {
            $error = $exception->getMessage();
        } catch (PDOException $exception) {
            error_log('Beth Ammi admin database operation failed: ' . $exception->getMessage());
            $error = (string) $exception->getCode() === '23000'
                ? 'That post slug is already in use.'
                : 'The change could not be saved. Check the database connection and try again.';
        } catch (Throwable $exception) {
            error_log('Beth Ammi admin request failed: ' . $exception->getMessage());
            $error = 'The request could not be completed. Check the server log for details.';
        }
    }
}

$isAuthenticated = isset($_SESSION['admin_user']);
if (isset($_GET['logged-out'])) $message = 'You have been signed out.';
if (isset($_GET['saved'])) $message = 'Changes saved.';
if (isset($_GET['deleted'])) $message = 'Record deleted.';

$selectedRecord = [];
$records = [];
if ($isAuthenticated) {
    try {
        $entity = $sections[$section];
        $editId = filter_var($_GET['edit'] ?? null, FILTER_VALIDATE_INT);
        if ($editId) {
            $statement = bethammi_db()->prepare('SELECT * FROM `' . $entity['table'] . '` WHERE id = :id LIMIT 1');
            $statement->execute(['id' => $editId]);
            $selectedRecord = $statement->fetch() ?: [];
        }
        $orderBy = $section === 'posts' ? 'published_at DESC, id DESC' : 'sort_order ASC, id DESC';
        $listColumns = [
            'posts' => 'id, title, slug, published_at, featured_image_url, is_published',
            'team' => 'id, name, title, photo_url, is_published',
            'parishes' => 'id, name, country, location, photo_url, is_published',
        ];
        $records = bethammi_db()->query(
            'SELECT ' . $listColumns[$section] . ' FROM `' . $entity['table'] . '` ORDER BY ' . $orderBy
        )->fetchAll();
    } catch (Throwable $exception) {
        error_log('Beth Ammi admin records could not be loaded: ' . $exception->getMessage());
        $error = 'Database records could not be loaded. Check the connection and schema setup.';
    }
}

$csrfToken = bethammi_admin_csrf_token();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Church content admin | Beth Ammi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="admin.css">
</head>
<body>
<?php if (!$isAuthenticated): ?>
  <main class="admin-card admin-login">
    <a class="admin-brand" href="../index.php">BETH AMMI · ADMIN</a>
    <h1>Sign in</h1>
    <p>Manage published posts, team profiles, and parish information.</p>
    <?php if ($error !== ''): ?><p class="admin-alert admin-alert--error" role="alert"><?= bethammi_escape($error) ?></p><?php endif; ?>
    <?php if ($message !== ''): ?><p class="admin-alert" role="status"><?= bethammi_escape($message) ?></p><?php endif; ?>
    <form class="admin-form" method="post">
      <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
      <input type="hidden" name="action" value="login">
      <label>Username<input name="username" autocomplete="username" required></label>
      <label>Password<input type="password" name="password" autocomplete="current-password" required></label>
      <button class="btn admin-button" type="submit">Sign in</button>
    </form>
  </main>
<?php else: ?>
  <main class="admin-shell">
    <header class="admin-header">
      <div><a class="admin-brand" href="../index.php">BETH AMMI · ADMIN</a><h1>Church content</h1><p>Signed in as <?= bethammi_escape($_SESSION['admin_user']['username']) ?>.</p></div>
      <form method="post">
        <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
        <input type="hidden" name="action" value="logout">
        <button class="btn admin-button admin-button--light" type="submit">Sign out</button>
      </form>
    </header>
    <?php if ($error !== ''): ?><p class="admin-alert admin-alert--error" role="alert"><?= bethammi_escape($error) ?></p><?php endif; ?>
    <?php if ($message !== ''): ?><p class="admin-alert" role="status"><?= bethammi_escape($message) ?></p><?php endif; ?>
    <nav class="admin-nav" aria-label="Content type">
      <?php foreach ($sections as $key => $item): ?>
        <a href="?section=<?= bethammi_escape($key) ?>"<?= $section === $key ? ' aria-current="page"' : '' ?>><?= bethammi_escape($item['label']) ?></a>
      <?php endforeach; ?>
      <a href="../index.php" target="_blank" rel="noopener noreferrer">View website ↗</a>
    </nav>
    <div class="admin-card">
      <h2 class="admin-section-title"><?= $selectedRecord ? 'Edit ' . bethammi_escape($entity['singular']) : 'Add ' . bethammi_escape($entity['singular']) ?></h2>
      <form class="admin-form" method="post">
        <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
        <input type="hidden" name="action" value="save">
        <input type="hidden" name="section" value="<?= bethammi_escape($section) ?>">
        <input type="hidden" name="id" value="<?= bethammi_escape($selectedRecord['id'] ?? '') ?>">
        <?php if ($section === 'posts'): ?>
          <div class="admin-form__row">
            <?php bethammi_admin_field('title', 'Post title', 'text', true); ?>
            <?php bethammi_admin_field('slug', 'URL slug (leave blank to create from title)'); ?>
          </div>
          <div class="admin-form__row">
            <?php bethammi_admin_field('published_at', 'Post date', 'date', true); ?>
            <?php bethammi_admin_field('featured_image_url', 'Highlight image URL or path'); ?>
          </div>
          <?php bethammi_admin_field('short_info', 'Short info for cards', 'textarea', false, true); ?>
          <?php bethammi_admin_field('description', 'Full post description (plain text; blank lines create paragraphs)', 'textarea', true, true); ?>
        <?php elseif ($section === 'team'): ?>
          <div class="admin-form__row">
            <?php bethammi_admin_field('name', 'Full name', 'text', true); ?>
            <?php bethammi_admin_field('title', 'Position or title', 'text', true); ?>
          </div>
          <?php bethammi_admin_image_field('photo_url', 'Photo URL or path'); ?>
          <?php bethammi_admin_field('bio', 'Short bio (optional)', 'textarea', false, true); ?>
          <?php bethammi_admin_field('sort_order', 'Display order (lower appears first)', 'number'); ?>
        <?php else: ?>
          <div class="admin-form__row">
            <?php bethammi_admin_field('name', 'Parish name', 'text', true); ?>
            <?php bethammi_admin_field('country', 'Country', 'text', true); ?>
          </div>
          <div class="admin-form__row">
            <?php bethammi_admin_field('region', 'Region or province'); ?>
            <?php bethammi_admin_field('location', 'Town, district, or address'); ?>
          </div>
          <?php bethammi_admin_image_field('photo_url', 'Photo URL or path'); ?>
          <div class="admin-form__row">
            <?php bethammi_admin_field('short_info', 'Short summary'); ?>
            <?php bethammi_admin_field('member_count', 'Number of members (optional)', 'number'); ?>
          </div>
          <?php bethammi_admin_field('description', 'Additional information', 'textarea', false, true); ?>
          <?php bethammi_admin_field('sort_order', 'Display order (lower appears first)', 'number'); ?>
        <?php endif; ?>
        <label class="admin-checkbox"><input type="checkbox" name="is_published" value="1"<?= !array_key_exists('is_published', $_POST) ? (!isset($selectedRecord['is_published']) || $selectedRecord['is_published'] ? ' checked' : '') : (isset($_POST['is_published']) ? ' checked' : '') ?>> Show on website</label>
        <div class="admin-actions">
          <button class="btn admin-button" type="submit"><?= $selectedRecord ? 'Save changes' : 'Add ' . bethammi_escape($entity['singular']) ?></button>
          <?php if ($selectedRecord): ?><a class="btn admin-button admin-button--light" href="?section=<?= bethammi_escape($section) ?>">Cancel edit</a><?php endif; ?>
        </div>
      </form>
    </div>
    <div class="admin-table-wrap">
      <h2 class="admin-section-title">Existing <?= bethammi_escape(strtolower($entity['label'])) ?></h2>
      <?php if (!$records): ?>
        <p class="admin-empty">No records yet. Use the form above to add the first one.</p>
      <?php else: ?>
        <table class="admin-table">
          <thead><tr><th>Photo</th><th>Name / title</th><th>Details</th><th>Status</th><th>Actions</th></tr></thead>
          <tbody>
          <?php foreach ($records as $record): ?>
            <?php
              $recordTitle = $section === 'posts' ? $record['title'] : $record['name'];
              $recordDetails = $section === 'posts'
                  ? $record['published_at']
                  : ($section === 'team' ? $record['title'] : trim($record['location'] . ', ' . $record['country'], ', '));
              $image = $section === 'posts' ? $record['featured_image_url'] : $record['photo_url'];
            ?>
            <tr>
              <td><?php if ($image !== ''): ?><img src="<?= bethammi_escape($image) ?>" alt="" loading="lazy"><?php else: ?>—<?php endif; ?></td>
              <td><?= bethammi_escape($recordTitle) ?></td>
              <td><?= bethammi_escape($recordDetails) ?></td>
              <td><?= $record['is_published'] ? 'Published' : 'Hidden' ?></td>
              <td><a href="?section=<?= bethammi_escape($section) ?>&amp;edit=<?= (int) $record['id'] ?>">Edit</a>
                <form class="admin-inline" method="post" onsubmit="return confirm('Permanently delete this record?');">
                  <input type="hidden" name="csrf_token" value="<?= bethammi_escape($csrfToken) ?>">
                  <input type="hidden" name="action" value="delete">
                  <input type="hidden" name="section" value="<?= bethammi_escape($section) ?>">
                  <input type="hidden" name="id" value="<?= (int) $record['id'] ?>">
                  <button type="submit">Delete</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </main>
<?php endif; ?>
</body>
</html>

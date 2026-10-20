<?php

require_once __DIR__ . '/admin-auth.php';
bethammi_start_admin_session();
$loginCsrfToken = bethammi_admin_csrf_token();
header('Cache-Control: no-store, private');
$pageTitle = isset($pageTitle) && is_string($pageTitle) ? $pageTitle : 'Beth Ammi Christian Fellowship Church';
$pageDescription = isset($pageDescription) && is_string($pageDescription)
    ? $pageDescription
    : 'Beth Ammi Christian Fellowship Church. Join us for worship, prayer, fellowship, and the Word of God.';
$contentKind = isset($contentKind) && is_string($contentKind) ? $contentKind : '';
$contentSlug = isset($contentSlug) && is_string($contentSlug) ? $contentSlug : '';
$isStaticPage = ($isStaticPage ?? false) === true;
$siteRoot = isset($siteRoot) && is_string($siteRoot) ? $siteRoot : ($isStaticPage ? '../' : '');
$staticPageTitle = isset($staticPageTitle) && is_string($staticPageTitle) ? $staticPageTitle : '';
$pageScripts = isset($pageScripts) && is_array($pageScripts) ? $pageScripts : [];
if (!in_array('script.js', $pageScripts, true)) {
    $pageScripts[] = 'script.js';
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f8f7f3">
  <meta name="description" content="<?= bethammi_escape($pageDescription) ?>">
  <title><?= bethammi_escape($pageTitle) ?></title>
  <link rel="icon" type="image/png" href="<?= bethammi_escape($siteRoot) ?>assets/images/bethammilogo.png">
  <link href="<?= bethammi_escape($siteRoot) ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= bethammi_escape($siteRoot) ?>assets/bootstrap/icons/bootstrap-icons.min.css" rel="stylesheet">
  <link href="<?= bethammi_escape($siteRoot) ?>assets/bootstrap/googlefonts/css2.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= bethammi_escape($siteRoot) ?>styles.css?v=<?= (int) filemtime(__DIR__ . '/../styles.css') ?>">
  <?php foreach ($pageScripts as $script): ?>
  <script src="<?= bethammi_escape($siteRoot . $script) ?><?= $script === 'script.js' ? '?v=' . (int) filemtime(__DIR__ . '/../script.js') : '' ?>" defer></script>
  <?php endforeach; ?>
</head>
<body data-site-root="<?= bethammi_escape($siteRoot) ?>"<?= $contentKind !== '' ? ' data-content-kind="' . bethammi_escape($contentKind) . '"' : '' ?><?= $contentSlug !== '' ? ' data-content-slug="' . bethammi_escape($contentSlug) . '"' : '' ?><?= $isStaticPage ? ' data-static-page="true" data-page-title="' . bethammi_escape($staticPageTitle) . '"' : '' ?>>

<?php

http_response_code(403);
$siteRoot = rtrim(dirname((string) ($_SERVER['SCRIPT_NAME'] ?? '/')), '/\\') . '/';

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f8f7f3">
  <title>Access denied | Beth Ammi Christian Fellowship Church</title>
  <style>
    :root { color-scheme: light; font-family: Arial, sans-serif; color: #172a2d; background: #f8f7f3; }
    body { box-sizing: border-box; min-height: 100vh; margin: 0; display: grid; place-items: center; padding: 24px; }
    main { width: min(100%, 560px); padding: 40px; border-radius: 16px; background: #fff; box-shadow: 0 12px 40px #12343b12; }
    p { color: #6d7774; line-height: 1.7; }
    a { display: inline-block; margin-top: 12px; padding: 12px 18px; border-radius: 999px; background: #12343b; color: #fff; text-decoration: none; }
    @media (max-width: 480px) { main { padding: 28px 22px; } }
  </style>
</head>
<body>
  <main>
    <p>403 · Access denied</p>
    <h1>You can’t access this page.</h1>
    <p>The server refused this request. If you believe you should have access, please contact the site administrator.</p>
    <a href="<?= htmlspecialchars($siteRoot . 'index', ENT_QUOTES, 'UTF-8') ?>">Return to the homepage</a>
  </main>
</body>
</html>

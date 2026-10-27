<?php

http_response_code(500);
$siteRoot = rtrim(dirname((string) ($_SERVER['SCRIPT_NAME'] ?? '/')), '/\\') . '/';

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#f8f7f3">
  <title>Server error | Beth Ammi Christian Fellowship Church</title>
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
    <p>500 · Server error</p>
    <h1>Something went wrong.</h1>
    <p>The server couldn’t complete your request. Please try again in a little while.</p>
    <a href="<?= htmlspecialchars($siteRoot . 'index', ENT_QUOTES, 'UTF-8') ?>">Return to the homepage</a>
  </main>
</body>
</html>

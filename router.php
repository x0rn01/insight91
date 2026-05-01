<?php
// Local dev router — emulates .htaccess rules for the PHP built-in server.
// Run: php -S localhost:8000 router.php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Static assets — let the built-in server serve them directly
if (preg_match('/\.(css|js|jpe?g|png|gif|webp|svg|ico|woff2?|mp4|webmanifest|json|xml|map|txt|avif)$/i', $uri)) {
    return false;
}

// 410 Gone for retired sport pages
if (preg_match('#^/(en|fr)/sport(\.php)?/?$#', $uri)) {
    http_response_code(410);
    echo '<!doctype html><meta charset="utf-8"><title>410 Gone</title><h1>410 Gone</h1>';
    exit;
}

// 301 redirects — legacy flat URLs to new nested ones
$legacy = [
    '#^/(en|fr)/qlik(\.php)?/?$#'     => '/$1/solutions/qlik',
    '#^/(en|fr)/powerbi(\.php)?/?$#'  => '/$1/solutions/powerbi',
    '#^/(en|fr)/business(\.php)?/?$#' => '/$1/services/data',
];
foreach ($legacy as $pat => $repl) {
    if (preg_match($pat, $uri)) {
        header('Location: ' . preg_replace($pat, $repl, $uri), true, 301);
        exit;
    }
}

// Root → /fr/
if ($uri === '/' || $uri === '') {
    header('Location: /fr/', true, 301);
    exit;
}

// Hide .php — /en/foo.php → /en/foo, /en/foo/bar.php → /en/foo/bar
if (preg_match('#^/(en|fr)/index\.php$#', $uri, $m)) {
    header('Location: /' . $m[1] . '/', true, 301);
    exit;
}
if (preg_match('#^/(en|fr)/(.+)\.php$#', $uri, $m)) {
    header('Location: /' . $m[1] . '/' . $m[2], true, 301);
    exit;
}

// /en/ or /fr/ → /<lang>/index.php
if (preg_match('#^/(en|fr)/?$#', $uri, $m)) {
    require __DIR__ . '/' . $m[1] . '/index.php';
    exit;
}

// /(en|fr)/blog/<slug> → article.php?slug=<slug>
if (preg_match('#^/(en|fr)/blog/([a-z0-9-]+)/?$#', $uri, $m)) {
    $articleFile = __DIR__ . '/' . $m[1] . '/blog/article.php';
    if (is_file($articleFile)) {
        $_GET['slug'] = $m[2];
        require $articleFile;
        exit;
    }
}

// Nested: /(en|fr)/dir/page → /(en|fr)/dir/page.php
if (preg_match('#^/(en|fr)/([^/]+)/([^/]+)/?$#', $uri, $m)) {
    $file = __DIR__ . '/' . $m[1] . '/' . $m[2] . '/' . $m[3] . '.php';
    if (is_file($file)) {
        require $file;
        exit;
    }
}

// Single-level: /(en|fr)/page → /(en|fr)/page.php
if (preg_match('#^/(en|fr)/([^/]+)/?$#', $uri, $m)) {
    $file = __DIR__ . '/' . $m[1] . '/' . $m[2] . '.php';
    if (is_file($file)) {
        require $file;
        exit;
    }
    require __DIR__ . '/' . $m[1] . '/index.php';
    exit;
}

return false;

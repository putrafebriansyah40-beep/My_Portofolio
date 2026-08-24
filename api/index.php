<?php

/**
 * Vercel Serverless PHP handler
 * Forwards requests to Laravel's public/index.php
 */

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath($_ENV['APP_STORAGE'] ?? '/tmp');

// Clean up empty environment variables to prevent Laravel from crashing
// (Vercel sometimes passes empty strings for undefined variables, which crashes Laravel's Managers)
foreach ($_ENV as $key => $value) {
    if ($value === '') {
        unset($_ENV[$key]);
        unset($_SERVER[$key]);
        putenv($key); // Unset from putenv
    }
}

$app->handleRequest(Illuminate\Http\Request::capture());

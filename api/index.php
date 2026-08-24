<?php

/**
 * Vercel Serverless PHP handler
 * Forwards requests to Laravel's public/index.php
 */

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath($_ENV['APP_STORAGE'] ?? '/tmp');
$app->handleRequest(Illuminate\Http\Request::capture());

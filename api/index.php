<?php

/**
 * Vercel Serverless PHP handler
 * Forwards requests to Laravel's public/index.php
 */

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath($_ENV['APP_STORAGE'] ?? '/tmp');

// TEMPORARY DIAGNOSTIC DUMP TO FIND EMPTY DRIVER ERROR
echo "<pre>DIAGNOSTIC DUMP:\n";
$emptyVars = [];
foreach ($_ENV as $k => $v) {
    if ($v === '') {
        $emptyVars[] = $k;
    }
}
if (count($emptyVars) > 0) {
    echo "FOUND EMPTY VARIABLES! These are causing the crash:\n";
    foreach ($emptyVars as $k) {
        echo "- " . $k . " (PLEASE DELETE THIS VARIABLE IN VERCEL DASHBOARD)\n";
    }
} else {
    echo "No empty variables found in \$_ENV. Let's dump all of them:\n";
    foreach ($_ENV as $k => $v) {
        echo "$k = " . var_export($v, true) . "\n";
    }
}
echo "</pre>";
exit;

$app->handleRequest(Illuminate\Http\Request::capture());

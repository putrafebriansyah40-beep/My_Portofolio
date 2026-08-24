<?php

/**
 * Vercel Serverless PHP handler
 * Forwards requests to Laravel's public/index.php
 */

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath($_ENV['APP_STORAGE'] ?? '/tmp');
try {
    $app->handleRequest(Illuminate\Http\Request::capture());
} catch (\Throwable $e) {
    echo "<pre>";
    echo $e->getMessage() . "\n\n";
    foreach ($e->getTrace() as $trace) {
        $class = $trace['class'] ?? '';
        $type = $trace['type'] ?? '';
        $function = $trace['function'] ?? '';
        $file = $trace['file'] ?? 'unknown file';
        $line = $trace['line'] ?? 'unknown line';
        echo "{$class}{$type}{$function} in {$file}:{$line}\n";
    }
    echo "</pre>";
}

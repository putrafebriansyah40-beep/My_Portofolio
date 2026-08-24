<?php
$_ENV['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = 'true';
$_ENV['LOG_CHANNEL'] = 'stderr';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['QUEUE_CONNECTION'] = 'sync';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/events.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';

// Remove all other envs to simulate vercel
$allowed = ['APP_ENV', 'APP_DEBUG', 'LOG_CHANNEL', 'CACHE_STORE', 'SESSION_DRIVER', 'QUEUE_CONNECTION', 'VIEW_COMPILED_PATH', 'APP_CONFIG_CACHE', 'APP_EVENTS_CACHE', 'APP_PACKAGES_CACHE', 'APP_ROUTES_CACHE', 'APP_SERVICES_CACHE'];
foreach ($_ENV as $k => $v) {
    if (!in_array($k, $allowed)) {
        unset($_ENV[$k]);
        unset($_SERVER[$k]);
        putenv($k);
    }
}

require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$app->useStoragePath('/tmp');
$request = Illuminate\Http\Request::capture();
try {
    $response = $app->handleRequest($request);
    echo "Success: " . $response->getStatusCode();
} catch (\Throwable $e) {
    echo $e->getMessage() . "\n";
    echo $e->getTraceAsString();
}

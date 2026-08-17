<?php

$storageLogs = __DIR__.'/../storage/logs';
$runningServerless = ! is_writable($storageLogs);

if ($runningServerless) {
    $tmp = '/tmp/laravel';

    foreach ([
        'bootstrap/cache',
        'framework/cache/data',
        'framework/sessions',
        'framework/views',
        'logs',
        'app/public',
        'app/private',
    ] as $dir) {
        $path = $tmp.'/'.$dir;
        if (! is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }

    $vercelHost = getenv('VERCEL_PROJECT_PRODUCTION_URL') ?: getenv('VERCEL_URL') ?: 'crg-mu.vercel.app';
    $appKey = getenv('APP_KEY');

    $forced = [
        'APP_ENV' => 'production',
        'APP_DEBUG' => 'true',
        'APP_URL' => 'https://'.$vercelHost,
        'APP_CONFIG_CACHE' => $tmp.'/bootstrap/cache/config.php',
        'APP_EVENTS_CACHE' => $tmp.'/bootstrap/cache/events.php',
        'APP_PACKAGES_CACHE' => $tmp.'/bootstrap/cache/packages.php',
        'APP_ROUTES_CACHE' => $tmp.'/bootstrap/cache/routes.php',
        'APP_SERVICES_CACHE' => $tmp.'/bootstrap/cache/services.php',
        'VIEW_COMPILED_PATH' => $tmp.'/framework/views',
        'CACHE_STORE' => 'array',
        'SESSION_DRIVER' => 'cookie',
        'QUEUE_CONNECTION' => 'sync',
        'LOG_CHANNEL' => 'errorlog',
        'LOG_STACK' => 'stderr',
        'LOG_PATH' => 'php://stderr',
        'LOG_EMERGENCY_PATH' => 'php://stderr',
        'MAIL_MAILER' => 'log',
        'DB_CONNECTION' => 'sqlite',
        'DB_DATABASE' => ':memory:',
        'APP_MAINTENANCE_DRIVER' => 'file',
        'APP_MAINTENANCE_STORE' => 'array',
    ];

    if ($appKey === false || $appKey === '') {
        $forced['APP_KEY'] = 'base64:BkYo4IKCUJQOp/AUUYCZf4wAk2Z9mcOlRWCyLmUOOGw=';
    }

    foreach ($forced as $key => $value) {
        putenv($key.'='.$value);
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}

require __DIR__.'/../public/index.php';

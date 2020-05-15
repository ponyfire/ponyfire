<?php

// Load konstanta-konstanta framework
require_once __DIR__ . DIRECTORY_SEPARATOR . 'constants.php';

// Load autoload composer
require_once BASE_PATH . 'vendor/autoload.php';

// Menyiapkan error handler
$whoops = new \Whoops\Run();

// Jika aplikasi dijalankan pada lingkungan web (http/https)
if (PONYFIRE_STARTED_AT === 'http')
{
    // Switch untuk environment aplikasi
    switch (APP_ENVIRONMENT)
    {
        case 'testing':
        case 'development':
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
        break;
        // Jika aplikasi dijalankan pada environment tertentu yang tidak menjadi standar
        // environment pada framework, maka program akan menampilkan error handler untuk mode production
        case 'production':
        default:
            $whoops->pushHandler(new \PonyFire\View\Handler\HttpProductionError());
    }
}
// Jika aplikasi dijalankna pada lingkungan CLI
elseif (PONYFIRE_STARTED_AT === 'cli')
{
    // Jika ingin menggunakan error handler yang berbeda, ganti nama kelas dibawah
    $whoops->pushHandler(new \PonyFire\View\Handler\ConsoleError());
}

// Mendaftarkan error handler
$whoops->register();

// Load seluruh konfigurasi router
require_once __DIR__ . DIRECTORY_SEPARATOR . 'routes.php';

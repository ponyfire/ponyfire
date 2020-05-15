<?php

// Bootstrap path
$bootstrap = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'bootstrap.php';

// Validasi path bootstrap
if ( ! file_exists($bootstrap))
{
    die('Application bootstrap is not exists!');
}

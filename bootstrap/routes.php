<?php

use PonyFire\Exceptions\RouterNotFoundException;

// HTTP router path
$httpRouter = APP_PATH . 'Routes/http.php';
// CLI router path
$cliRouter = APP_PATH . 'Routes/console.php';

if ( ! file_exists($httpRouter))
{
    throw new RouterNotFoundException('HTTP router file is not exists');
}

if ( ! file_exists($cliRouter))
{
    throw new RouterNotFoundException('Console router file is not exists');
}

<?php

use PonyFire\Router\Exceptions\RouteNotFoundException;

// HTTP router path
$httpRouter = APP_PATH . 'Routes/http.php';
// CLI router path
$cliRouter = APP_PATH . 'Routes/console.php';

if ( ! file_exists($httpRouter))
{
    throw new RouteNotFoundException('HTTP router file is not exists');
}

if ( ! file_exists($cliRouter))
{
    throw new RouteNotFoundException('Console router file is not exists');
}

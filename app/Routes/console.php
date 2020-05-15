<?php

use PonyFire\Console\Console;
use PonyFire\Console\Router;
use PonyFire\Console\IO;

Console::on('hello', function (Router $router) {
    IO::write('Hello :)');
});
<?php

use PonyFire\Router\Route;
use PonyFire\Http\Request;

Route::get('/', function (Request $request) {
    // Mengirim response
    return view('welcome');
});

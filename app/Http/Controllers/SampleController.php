<?php

namespace App\Http\Controllers;

use PonyFire\Http\Controller;
use PonyFire\Http\Request;
use PonyFire\Http\Response;

class SampleController extends Controller
{
    /**
     * @param \PonyFire\Http\Request $request
     * 
     * @return mixed
     */
    public function index(Request $request)
    {
        return view('welcome');
    }
}

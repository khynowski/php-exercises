<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function ping()
    {
        return ['status' => 'ok', 'controller' => true];
    }
}

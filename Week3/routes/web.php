<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'To jest mój pierwszy route w Laravelu';
});

Route::get('/api/ping', [TestController::class, 'ping']);
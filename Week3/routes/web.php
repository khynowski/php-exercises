<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'To jest mój pierwszy route w Laravelu';
});

Route::get('/api/ping', function () {
    return ['status' => 'ok', 'time' => time()];
});
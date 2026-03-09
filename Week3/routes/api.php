<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Middleware\LogRequests;
use App\Http\Middleware\CheckApiKey;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->middleware([LogRequests::class, CheckApiKey::class])->group(function () {
    Route::resource('accounts', AccountController::class);
});
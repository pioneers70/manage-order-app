<?php

use App\Http\Controllers\Client\DeleteController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Client\ShowController;
use App\Http\Controllers\Client\StoreController;
use App\Http\Controllers\Client\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['namespace' => 'App\Http\Controllers\Client', 'prefix' => 'leads'], function () {
    Route::post('/', StoreController::class);
    Route::get('/', IndexController::class);
    Route::get('/{client}', ShowController::class);
    Route::patch('/{client}', UpdateController::class);
    Route::delete('/{client}', DeleteController::class);
});

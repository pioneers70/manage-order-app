<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/{page}', IndexController::class)->where('page','.*');

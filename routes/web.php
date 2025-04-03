<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', [ServiceController::class, 'index']);
Route::get('/detail/{service}', [ServiceController::class, 'detail']);
Route::get('/kontakt', [ContactController::class, 'index']);


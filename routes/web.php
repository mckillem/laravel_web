<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome', ['name' => 'jméno']);
//});

//Route::get('/user', [UserController::class, 'index']);
Route::get('/', [ServiceController::class, 'index']);
Route::get('/detail/{service}', [ServiceController::class, 'detail']);

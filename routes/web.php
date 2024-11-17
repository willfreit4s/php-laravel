<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [UserController::class, 'profile']);
Route::get('/profile/{id}', [UserController::class, 'findById']);
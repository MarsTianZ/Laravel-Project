<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [AuthController::class, 'showLoginForm']);
Route::post('/auth/login', [AuthController::class, 'loginHandler'])->name('login');
Route::get('/authenticating', [AuthController::class, 'showAuthenticatingPage'])->name('authenticating');

Route::get('/auth/register', 'Auth\AuthController@showRegistrationForm');

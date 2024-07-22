<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login_page');
Route::post('/auth/login', [AuthController::class, 'loginHandler'])->name('login');

Route::get('/auth/register', [AuthController::class, 'showRegisterForm'])->name('register_page');
Route::post('/auth/register', [AuthController::class, 'registerHandler'])->name('register');

Route::get('/authenticating', [AuthController::class, 'showAuthenticatingPage'])->name('authenticating');

Route::get('/movies', [MoviesController::class, 'showMoviesPage'])->name('movie_list_page');
Route::get('/movies/{slug}', [MoviesController::class, 'showMovieDetailsPage'])->name('movie_detail_page');

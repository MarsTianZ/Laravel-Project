<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MoviesController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login_page');
Route::post('/auth/login', [AuthController::class, 'loginHandler'])->name('login');

Route::get('/auth/register', [AuthController::class, 'showRegisterForm'])->name('register_page');
Route::post('/auth/register', [AuthController::class, 'registerHandler'])->name('register');

Route::get('/movies/back', [MoviesController::class, 'backToMoviesList'])->name('movies.back');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/authenticating', [AuthController::class, 'showAuthenticatingPage'])->name('authenticating');
    Route::get('/movies', [MoviesController::class, 'showMoviesPage'])->name('movie_list_page');
    Route::get('/movies/{slug}', [MoviesController::class, 'showMovieDetailsPage'])->name('movie_detail_page');
    Route::get('/movies/{slug}/studios', [MoviesController::class, 'showStudioPage'])->name('movie_detail_page');
    Route::get('/movies/{slug}/studios/{studio_slug}', [MoviesController::class, 'showStudioDetailsPage'])->name('studio_choose_seat_page');
    Route::get('/movies/{slug}/studios/{studio_slug}/checkout', [MoviesController::class, 'ticketPayment'])->name('ticket_checkout_page');
    Route::get('/history',[MoviesController::class,'showHistoryPage'])->name('ticket_history_page');
});

Route::fallback(function () {
    if (Auth::check()) {
        return redirect()->route('authenticating');
    } else {
        return redirect()->route('login_page');
    }
});


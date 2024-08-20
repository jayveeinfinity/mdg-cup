<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SocialAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::get('/league-rules', function () {
    return view('pages.league-rules');
})->name('league-rules');
Route::get('/terms-and-conditions', function () {
    return view('pages.terms-and-conditions');
})->name('terms-and-conditions');
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');
Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');
Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('google-auth');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback'])->name('google-auth-callback');
Route::get('auth/signout', [SocialAuthController::class, 'logout'])->name('signout');

/*
|--------------------------------------------------------------------------
| Auth Middleware Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('myteam', [TeamController::class, 'index'])->name('team.index');
    Route::get('myteam/player/{id}', [PlayerController::class, 'show'])->name('team.player.show');

    Route::get('team-registration', [TeamController::class, 'create'])->name('team-registration');

    Route::get('team/{id}', [TeamController::class, 'show'])->name('team.show');
    Route::post('team/store', [TeamController::class, 'store'])->name('team.store');

    Route::get('player/{id}', [PlayerController::class, 'show'])->name('player.show');
    Route::post('player/store', [PlayerController::class, 'store'])->name('player.store');
});
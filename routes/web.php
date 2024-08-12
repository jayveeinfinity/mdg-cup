<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/terms-and-conditions', function () {
    return view('pages.terms-and-conditions');
})->name('terms-and-conditions');
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');
Route::get('/contact-us', function () {
    return view('contacts-us');
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
    Route::get('myteam', function() {
        return view('team.index');
    })->name('team.index');
    Route::get('team-registration', function() {
        return view('team.create');
    })->name('team-registeration');
    Route::post('team/store', function() {
        $data = request()->get('players');

        dd($data);
    })->name('team.store');
});
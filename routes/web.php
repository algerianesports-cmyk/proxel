<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Root Redirect
|--------------------------------------------------------------------------
| Visiting / with no locale prefix redirects to /fr (or session/browser pref).
*/

Route::get('/', function () {
    $locale = session('locale', 'fr');
    return redirect('/' . $locale);
});

/*
|--------------------------------------------------------------------------
| Language Switch API (no locale prefix needed)
|--------------------------------------------------------------------------
*/
Route::post('/api/language/switch', [LanguageController::class, 'switch'])
    ->name('language.switch');

/*
|--------------------------------------------------------------------------
| Localized Routes
|--------------------------------------------------------------------------
| All routes are grouped under /{locale} and pass through the SetLocale
| middleware which validates the locale, sets it, and persists it.
*/
Route::prefix('{locale}')
    ->where(['locale' => 'en|fr'])
    ->middleware('locale')
    ->group(function () {
        Route::get('/', function () {
            return view('home');
        })->name('home');

        Route::get('/service', function () {
            return view('service');
        })->name('service');

        Route::get('/empty', function () {
            return view('empty');
        })->name('empty');
    });

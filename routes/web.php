<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

// Language switching route
Route::get('language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

// Define routes without locale prefix
Route::middleware(['locale'])->group(function () {
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

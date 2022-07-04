<?php

use App\Http\Controllers\PortfolioController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::view('/contact', 'contact')->name('contact');

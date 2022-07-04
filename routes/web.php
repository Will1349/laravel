<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessagesController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

Route::post('contact', [MessagesController::class, 'store'])->name('messagescontroller');


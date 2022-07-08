<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');


Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portfolio/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/portfolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/portfolio/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::post('/portfolio', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portfolio/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::delete('/portfolio/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');


Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('message.store');

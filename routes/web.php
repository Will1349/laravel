<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;


//DB::listen(function ($query) {
//var_dump($query->sql);
//});

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('portafolio', ProjectController::class)
    ->parameters(['portafolio' => 'project'])
    ->names('projects');


Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');


//Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
//Route::get('/portfolio/create', [ProjectController::class, 'create'])->name('projects.create');
//Route::get('/portfolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
//Route::patch('/portfolio/{project}', [ProjectController::class, 'update'])->name('projects.update');
//Route::post('/portfolio', [ProjectController::class, 'store'])->name('projects.store');
//Route::get('/portfolio/{project}', [ProjectController::class, 'show'])->name('projects.show');
//Route::delete('/portfolio/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');


Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('message.store');

Auth::routes(['register' => false]);

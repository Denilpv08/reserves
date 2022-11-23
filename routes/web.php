<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;

// Home page path
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

//Logging routes
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

//Book controller paths
Route::prefix('books')->group(function(){
    Route::get('/', [BookController::class, 'index'])->name('books.index');
    Route::get('/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/show/{id}', [BookController::class, 'show'])->name('books.show');
    Route::get('/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/update/{id}', [BookController::class, 'update'])->name('books.update');
    Route::delete('/destroy/{id}', [BookController::class, 'destroy'])->name('books.destroy');
}) ->middleware('auth');




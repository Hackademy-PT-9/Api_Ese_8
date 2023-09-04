<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/index', [PublicController::class, 'index'])->name('index');

Route::get('/show/{id}', [PublicController::class, 'show'])->name('show');
Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');
Route::get('/test', [PublicController::class, 'test'])->name('test');

<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;


Route::get('/', [GenreController::class,'films'])->name('film');

Route::get('/film/create', [FilmController::class,'create'])->name('film.create');
Route::post('/film/store', [FilmController::class,'store'])->name('film.store');
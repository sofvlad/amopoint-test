<?php

use App\Http\Controllers\JokeController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));
Route::get('/fields', fn() => view('fields'))->name('fields.index');
Route::get('/jokes', [JokeController::class, 'index'])->name('jokes.index');

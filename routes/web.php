<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));
Route::get('/fields', fn() => view('fields'))->name('fields.index');

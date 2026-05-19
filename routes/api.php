<?php

use App\Http\Controllers\JokeController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/jokes', [JokeController::class, 'index']);
});

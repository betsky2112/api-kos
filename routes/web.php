<?php

use App\Http\Controllers\KosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kos', [KosController::class, 'index']);
Route::get('/kos/{id}', [KosController::class, 'show']);

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartIndexController;
use App\Http\Controllers\ServicesController;

Route::get('/')->uses([StartIndexController::class, 'index'])->name('start.index');
Route::get('/services/{service}')->uses([ServicesController::class, 'show'])->name('services.show');

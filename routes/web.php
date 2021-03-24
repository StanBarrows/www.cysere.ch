<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartIndexController;

Route::get('/')->uses([StartIndexController::class, 'index'])->name('start.index');

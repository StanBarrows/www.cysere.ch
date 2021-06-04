<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartIndexController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\CheklistController;
use App\Http\Controllers\TeamControllerTest;

Route::get('/')->uses([StartIndexController::class, 'index'])->name('start.index');

Route::get('services/{service}')->uses([ServicesController::class, 'show'])->name('services.show');

Route::get('checklist/index')->uses([CheklistController::class, 'index'])->name('checklist.index');
Route::post('checklist/store')->uses([CheklistController::class, 'store'])->name('checklist.store');

Route::get('assessment/index')->uses([AssessmentController::class, 'index'])->name('assessment.index');
Route::post('assessment/check')->uses([AssessmentController::class, 'check'])->name('assessment.check');

Route::get('assessment/reset')->uses([AssessmentController::class, 'reset'])->name('assessment.reset');
Route::get('assessment/finish')->uses([AssessmentController::class, 'finish'])->name('assessment.finish');

Route::get('assessment/set/{service}')->uses([AssessmentController::class, 'set'])->name('assessment.set');

Route::get('/team')->uses([TeamControllerTest::class, 'index'])->name('team.index');


<?php

use App\Http\Controllers\OilCheckController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OilCheckController::class, 'create'])->name('oil-checks.create');
Route::post('/check', [OilCheckController::class, 'store'])->name('oil-checks.store');
Route::get('/result/{oilCheck}', [OilCheckController::class, 'show'])->name('oil-checks.show');

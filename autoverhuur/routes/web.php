<?php

use App\Http\Controllers\CarController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

Route::get('index', [CarController::class, 'index']);

Route::get('create', [CarController::class, 'create']);

Route::get('edit/{autonummer}', [CarController::class, 'edit']);

Route::post('store', [CarController::class, 'store']);

Route::put('edit/update/{autonummer}', [CarController::class, 'update']);

Route::get('index/{autonummer}', [CarController::class, 'show']);

Route::delete('delete/{autonummer}', [CarController::class, 'destroy']);



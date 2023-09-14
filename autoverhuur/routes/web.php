<?php

use App\Http\Controllers\CarController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('index', [CarController::class, 'index']);

Route::get('create', [CarController::class, 'create']);

Route::get('edit/{autonummer}', [CarController::class, 'edit']);

Route::post('store', [CarController::class, 'store']);

Route::put('edit/update/{autonummer}', [CarController::class, 'update']);

Route::delete('index/{autonummer}', [CarController::class, 'destroy']);


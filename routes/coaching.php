<?php

use App\Http\Controllers\Auth\CoachingAuth;
use App\Http\Controllers\Coaching\BatchController;
use App\Http\Controllers\Coaching\MainController;
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


Route::match(['get', 'post'], 'login', [CoachingAuth::class, 'login'])->middleware('CoachingLoginCheck');
Route::get('logout', [CoachingAuth::class, 'logout']);

Route::middleware('CoachingCheck')->group(function () {
    Route::get('/', [MainController::class, 'dashboard']);

    Route::prefix('batch')->group(function () {
        Route::get('/all/{type?}', [BatchController::class, 'list']);
        Route::match(['get', 'post'], '/create', [BatchController::class, 'create']);
        Route::match(['get', 'post'], '/edit/{id}', [BatchController::class, 'edit']);
        Route::get('/status/{id}/{status}', [BatchController::class, 'status']);
    });
});

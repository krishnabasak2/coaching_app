<?php

use App\Http\Controllers\Admin\CoachingController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Auth\AdminAuth;
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

Route::match(['get', 'post'], 'login', [AdminAuth::class, 'login'])->middleware('AdminLoginCheck');
Route::get('logout', [AdminAuth::class, 'logout']);

Route::middleware('AdminCheck')->group(function () {
    Route::get('/', [MainController::class, 'dashboard']);

    Route::prefix('coaching')->group(function () {
        Route::get('/all/{type?}', [CoachingController::class, 'list']);
        Route::match(['get', 'post'], '/create', [CoachingController::class, 'create']);
        Route::match(['get', 'post'], '/edit/{id}', [CoachingController::class, 'edit']);
        Route::get('/status/{id}/{status}', [CoachingController::class, 'status']);
    });
});

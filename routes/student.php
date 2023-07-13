<?php

use App\Http\Controllers\Auth\StudentAuth;
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


Route::match(['get', 'post'], 'login', [StudentAuth::class, 'login'])->middleware('StudentLoginCheck');
Route::get('logout', [StudentAuth::class, 'logout']);

Route::middleware('StudentCheck')->group(function () {

    Route::get('/', function () {
        return view('student.layout');
    });
});


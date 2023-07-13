<?php

use App\Http\Controllers\Auth\TeacherAuth;
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


Route::match(['get', 'post'], 'login', [TeacherAuth::class, 'login'])->middleware('TeacherLoginCheck');
Route::get('logout', [TeacherAuth::class, 'logout']);

Route::middleware('TeacherCheck')->group(function () {

    Route::get('/', function () {
        return view('teacher.layout');
    });
});

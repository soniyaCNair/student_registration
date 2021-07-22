<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index']);
Route::post('/register', [HomeController::class, 'register']);
Route::get('/display', [HomeController::class, 'display']);
Route::get('edit/{id}', [HomeController::class, 'edit']);
Route::put('update/{id}', [HomeController::class, 'update']);
Route::get('destroy/{id}', [HomeController::class, 'destroy']);
Route::get('/marks', [HomeController::class, 'mark']);
Route::post('/marklist', [HomeController::class, 'marklist']);
Route::get('/student', [HomeController::class, 'student'])->name('student');
Route::get('edit_detail/{id}', [HomeController::class, 'edit_detail']);
Route::put('update_detail/{id}', [HomeController::class, 'update_detail']);
Route::get('delete/{id}', [HomeController::class, 'delete']);














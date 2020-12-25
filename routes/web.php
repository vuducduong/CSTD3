<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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





Route::get('student',[StudentController::class,'index'])->name('student.index');
Route::get('student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/',[AdminController::class,'submitLogin'])->name('admin.login');
Route::get('/',[AdminController::class,'login']);
Route::get('home',[StudentController::class,'home'])->name('home');

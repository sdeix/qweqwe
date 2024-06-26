<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'index']);

Route::any('/register', [AuthController::class,'register'] );
Route::any('/login', [AuthController::class,'login'] );
Route::get('/logout', [AuthController::class,'logout'] );

Route::any('/makenew', [AdminController::class,'makenew'] );

Route::any('/new/{id}', [UserController::class,'new'] );


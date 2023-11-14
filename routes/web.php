<?php

use App\Http\Controllers\Admin\KaryaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\KaryaController as ControllersKaryaController;
use App\Http\Controllers\NavigationController;
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

Route::get('/', [NavigationController::class,'index']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/c_login', [LoginController::class,'login'])->name('c_login');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'register'])->name('c_register');
Route::get('/tentang-kami', [NavigationController::class,'about']);
Route::get('/unggah-karya', [NavigationController::class,'uploadScript']);
Route::post('/unggah-karya', [ControllersKaryaController::class,'uploadKarya']);
Route::get('/event', [NavigationController::class,'event']);
Route::get('/baca-karya', [NavigationController::class,'readScript']);
Route::get('/baca-karya/{id}', [NavigationController::class,'read']);
Route::get('/{id}', [NavigationController::class,'annouchement']);

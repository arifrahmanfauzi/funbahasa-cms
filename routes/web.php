<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class,'index']);
Route::get('/register',[\App\Http\Controllers\Auth\RegisterController::class,'index']);
Route::get('/tentang-kami',[\App\Http\Controllers\NavigationController::class,'about']);
Route::get('/unggah-karya',[\App\Http\Controllers\NavigationController::class,'uploadScript']);
Route::get('/event',[\App\Http\Controllers\NavigationController::class,'event']);
Route::get('/baca-karya',[\App\Http\Controllers\NavigationController::class,'readScript']);


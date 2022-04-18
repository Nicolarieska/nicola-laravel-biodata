<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\nicolaController;
use App\Http\Controllers\komentarController;
use App\Http\Controllers\nicolaLoginController;
use App\Http\Controllers\nicolaRegisterController;

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

Route::get('/home', [homeController::class, 'home']);

Route::get('/biodata', [nicolaController::class, 'biodata']);

Route::get('/komentar', [komentarController::class, 'komentar']);

Route::get('/login', [nicolaLoginController::class, 'login']);
Route::get('/register', [nicolaRegisterController::class, 'register']);

Route::post('/register', [nicolaRegisterController::class, 'store']);
Route::post('/login', [nicolaLoginController::class, 'inilogin']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');


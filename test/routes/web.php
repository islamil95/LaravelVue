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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/login', [App\Http\Controllers\Login::class, 'show'])->name('login');
Route::post('/logout', [App\Http\Controllers\LogoutController::class, 'show'])->name('logout');
Route::post('/login', [App\Http\Controllers\Login::class, 'ValidatesRequests'])->name('loginv');
Route::get('/register', [App\Http\Controllers\Registration::class, 'show'])->name('register');
Route::post('/register', [App\Http\Controllers\Registration::class, 'ValidateRequest'])->name('registerv');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/PersoneData', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

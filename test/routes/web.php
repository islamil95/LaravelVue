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
Route::post('/PersoneData', [App\Http\Controllers\HomeController::class, 'PersoneData'])->name('PersoneData');
Route::post('/deletepersonefile',[App\Http\Controllers\HomeController::class,'deletePersoneFile'])->name('deletepersonefile');
//Route::get('pdf/preview', [App\Http\Controllers\PDFController::class, 'preview'])->name('pdf.preview');
Route::get('pdf/generate/personedata', [App\Http\Controllers\PDFController::class, 'generatePDF'])->name('pdf.generate');
Route::get('/test/get', [App\Http\Controllers\TestController::class, 'get'])->name('testget');
Route::get('/test', [App\Http\Controllers\TestController::class, 'show'])->name('test');
Route::get('/test/instruction', [App\Http\Controllers\TestController::class, 'instruction'])->name('testinstruction');

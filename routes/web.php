<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cryptocurrencies', [HomeController::class, 'crypto'])->name('crypto');
Route::get('/cryptocurrencies/{id}', [HomeController::class, 'detail'])->name('detail.crypto');
Route::get('/exchanges', [HomeController::class, 'exchange'])->name('exchanges');
Route::get('/exchanges/{id}', [HomeController::class, 'exchangeDetail'])->name('detail.exchanges');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/categories/{id}', [HomeController::class, 'category'])->name('category');
Route::get('/about', [AboutController::class, 'index'])->name('about');
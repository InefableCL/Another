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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/category/{number}', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/news/{number}', [\App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::match(['post', 'get'], '/getDataForm', [\App\Http\Controllers\FormController::class, 'getDataForm'])->name('getDataForm');

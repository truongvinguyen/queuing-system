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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/thiet-bi', [App\Http\Controllers\DeviceController::class, 'index'])->name('');
Route::get('/them-thiet-bi', [App\Http\Controllers\DeviceController::class, 'create'])->name('');

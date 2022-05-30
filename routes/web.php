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
Route::post('/luu-thiet-bi', [App\Http\Controllers\DeviceController::class, 'save'])->name('');
Route::get('/chi-tiet/{id}', [App\Http\Controllers\DeviceController::class, 'detail'])->name('');
Route::get('/chinh-sua-thiet-bi/{id}', [App\Http\Controllers\DeviceController::class, 'edit'])->name('');
Route::post('/cap-nhat/{id}', [App\Http\Controllers\DeviceController::class, 'update'])->name('');

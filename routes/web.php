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
//home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//thiết bị
Route::get('/thiet-bi', [App\Http\Controllers\DeviceController::class, 'index'])->name('');
Route::get('/them-thiet-bi', [App\Http\Controllers\DeviceController::class, 'create'])->name('');
Route::post('/luu-thiet-bi', [App\Http\Controllers\DeviceController::class, 'save'])->name('');
Route::get('/chi-tiet/{id}', [App\Http\Controllers\DeviceController::class, 'detail'])->name('');
Route::get('/chinh-sua-thiet-bi/{id}', [App\Http\Controllers\DeviceController::class, 'edit'])->name('');
Route::post('/cap-nhat/{id}', [App\Http\Controllers\DeviceController::class, 'update'])->name('');
Route::get('/device-active', [App\Http\Controllers\DeviceController::class, 'device_active'])->name('');
Route::get('/device-shut-dow', [App\Http\Controllers\DeviceController::class, 'device_shut_dow'])->name('');
Route::get('/device-connecting', [App\Http\Controllers\DeviceController::class, 'device_connecting'])->name('');
Route::get('/device-disconnect', [App\Http\Controllers\DeviceController::class, 'device_disconnect'])->name('');

//dịch vụ
Route::get('/dich-vu', [App\Http\Controllers\ServiceController::class, 'index'])->name('');
Route::get('/them-dich-vu', [App\Http\Controllers\ServiceController::class, 'create'])->name('');
Route::post('/luu-dich-vu', [App\Http\Controllers\ServiceController::class, 'savse'])->name('');
Route::get('/service-active', [App\Http\Controllers\ServiceController::class, 'service_active'])->name('');
Route::get('/service-shut-dow', [App\Http\Controllers\ServiceController::class, 'service_shut_dow'])->name('');
Route::get('/service-detail/{id}', [App\Http\Controllers\ServiceController::class, 'service_detail'])->name('');
Route::get('/edit-service/{id}', [App\Http\Controllers\ServiceController::class, 'edit_service'])->name('');
Route::post('/update-service/{id}', [App\Http\Controllers\ServiceController::class, 'update_service'])->name('');

//cấp số
Route::get('/number', [App\Http\Controllers\NumberController::class, 'index'])->name('');
Route::get('/add-number', [App\Http\Controllers\NumberController::class, 'create'])->name('');

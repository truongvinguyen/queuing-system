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
Route::post('/luu-dich-vu', [App\Http\Controllers\ServiceController::class, 'save'])->name('');
Route::get('/service-active', [App\Http\Controllers\ServiceController::class, 'service_active'])->name('');
Route::get('/service-shut-dow', [App\Http\Controllers\ServiceController::class, 'service_shut_dow'])->name('');
Route::get('/service-detail/{id}', [App\Http\Controllers\ServiceController::class, 'service_detail'])->name('');
Route::get('/edit-service/{id}', [App\Http\Controllers\ServiceController::class, 'edit_service'])->name('');
Route::post('/update-service/{id}', [App\Http\Controllers\ServiceController::class, 'update_service'])->name('');

//cấp số
Route::get('/number', [App\Http\Controllers\NumberController::class, 'index'])->name('');
Route::get('/add-number', [App\Http\Controllers\NumberController::class, 'create'])->name('');
Route::get('/save-number/{number_name}/{number_service}', [App\Http\Controllers\NumberController::class, 'save'])->name('');
Route::get('/ten-dich-vu/{name}', [App\Http\Controllers\NumberController::class, 'fill_name'])->name('');
Route::get('/trang-thai/dang-cho', [App\Http\Controllers\NumberController::class, 'fill_dangcho'])->name('');
Route::get('/trang-thai/da-su-dung', [App\Http\Controllers\NumberController::class, 'fill_done'])->name('');
Route::get('/trang-thai/da-huy', [App\Http\Controllers\NumberController::class, 'fill_huy'])->name('');
//báo cáo cấp số
Route::get('/report', [App\Http\Controllers\NumberController::class, 'report'])->name('');

//role
Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('');
Route::get('/add-role', [App\Http\Controllers\RoleController::class, 'create'])->name('');
Route::post('/save', [App\Http\Controllers\RoleController::class, 'save'])->name('');
Route::get('/edit-role', [App\Http\Controllers\RoleController::class, 'edit'])->name('');

//account
Route::get('/account', [App\Http\Controllers\accountController::class, 'index'])->name('');
Route::get('/add-account', [App\Http\Controllers\accountController::class, 'create'])->name('');
Route::get('/edit-account', [App\Http\Controllers\accountController::class, 'edit'])->name('');
//normalizer_get_raw_decomposition
Route::get('/note', [App\Http\Controllers\accountController::class, 'note'])->name('');
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
    return view('FE.index');
});

Route::get('/show', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/thiet-ke', [App\Http\Controllers\HomeController::class, 'thietke'])->name('thietke');
Route::get('/thiet-ke/{id_dv}{slug?}', [App\Http\Controllers\HomeController::class, 'thietkesg'])->name('thietkesg');



Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(['middleware' => ['auth','Quantri']], function () {

Route::resource('dichvu', App\Http\Controllers\DichVuController::class);
Route::resource('sanpham', App\Http\Controllers\SanPhamController::class);
Route::resource('loaiblog', App\Http\Controllers\LoaiBlogController::class);
Route::resource('blog', App\Http\Controllers\BlogController::class);
Route::resource('tuyendung', App\Http\Controllers\TuyenDungController::class);
Route::resource('nhanvien', App\Http\Controllers\NhanVienController::class);
Route::resource('danhgia', App\Http\Controllers\DanhGiaController::class);











});


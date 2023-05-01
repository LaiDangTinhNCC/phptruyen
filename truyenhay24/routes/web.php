<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TheloaiController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChuongController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ThemeController;

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

Route::get('/', [IndexController::class, 'home']);
Route::get('/truyenhay_admin', [LoginController::class, 'login'])->name('login');
Route::get('/the-loai/{slug}', [IndexController::class, 'theloai']);
Route::get('/xem-truyen/{slug}', [IndexController::class, 'xemtruyen']);
Route::get('/xem-chuong/{slug}', [IndexController::class, 'xemchuong']);
Route::get('/tag/{tag}', [IndexController::class, 'tag']);
Route::post('/tim-kiem', [IndexController::class, 'timkiem']);
Route::post('/timkiem-ajax', [IndexController::class, 'timkiem_ajax']);
Route::post('/save-theme', 'ThemeController@saveTheme');

// auth
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('/theloai', TheloaiController::class);


Route::resource('/truyen', TruyenController::class);


Route::resource('/chuong', ChuongController::class);


Route::resource('/nguoidung', NguoiDungController::class);



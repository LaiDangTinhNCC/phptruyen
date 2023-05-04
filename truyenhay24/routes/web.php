<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TheloaiController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChuongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;



Auth::routes();


Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin', [HomeController::class, 'index'])->name('home');
    Route::resource('/theloai', TheloaiController::class);
    Route::resource('/truyen', TruyenController::class);
    Route::resource('/chuong', ChuongController::class);


    Route::get('/truyen-hay', [IndexController::class, 'home'])->name('home_user');
    Route::get('/the-loai/{slug}', [IndexController::class, 'theloai']);
    Route::get('/xem-truyen/{slug}', [IndexController::class, 'xemtruyen']);
    Route::get('/xem-chuong/{slug}', [IndexController::class, 'xemchuong']);
    Route::get('/tag/{tag}', [IndexController::class, 'tag']);
    Route::post('/tim-kiem', [IndexController::class, 'timkiem']);
    Route::post('/timkiem-ajax', [IndexController::class, 'timkiem_ajax']);
});
Route::get('/{any}', [HomeController::class, 'index'])->where('any', '.*');







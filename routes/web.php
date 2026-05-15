<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

// 🏠 Главная страница — стандартное приветствие Laravel
Route::get('/', function () {
    return view('welcome');
});

// 📦 Твой каталог товаров — по ссылке /product
Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/product', [ProductController::class, 'show'])->name('product');

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::post('/about', [MainController::class, 'about'])->name('about_start');

Route::get('/catprod', [MainController::class, 'catprod'])->name('catprod');

Route::get('/catprodlink/{id}', [MainController::class, 'catprodlink'])->name('catprodlink');

// Маршруты для админпанели
Route::get('/myadmin',[MyAdminController::class,'index'])->name('myadmin');
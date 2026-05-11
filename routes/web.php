<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAdminControler;
use App\Http\Controllers\ProductController;

// 🏠 Главная страница — стандартное приветствие Laravel
Route::get('/', function () {
    return view('welcome');
});

// 📦 Твой каталог товаров — по ссылке /product
Route::get('/product', [ProductController::class, 'index'])->name('products.index');

// Маршруты для админпанели
Route::get('/myadmin',[MyAdminControler::class,'index']);
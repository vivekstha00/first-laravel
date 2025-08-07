<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']) ->name('home');

Route::get('/product', [ProductController::class, 'index']) ->name('product');

Route::get('/categories', [CategoriesController::class, 'index']) ->name('categories');

Route::get('/about', [AboutController::class, 'index']) ->name('about');

Route::get('/contact', [ContactController::class, 'index']) ->name('contact');





// Route::get('/test', [HomeController::class, 'test'])->name('test');


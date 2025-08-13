<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [HomeController::class, 'index']) ->name('home');

Route::get('/product', [ProductController::class, 'index']) ->name('product');
Route::get('/categories', [CategoriesController::class, 'index']) ->name('categories');

Route::get('/about', [AboutController::class, 'index']) ->name('about');
Route::get('/contact', [ContactController::class, 'index']) ->name('contact');

Route::get('/admin/dashboard', [DashboardController::class, 'index']) ->name('admin.page.dashboard');

Route::prefix('admin/page')
    ->as('admin.page.')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/', [UserController::class, 'index']) ->name('index');
        Route::get('/create', [UserController::class, 'create']) ->name('create');
        Route::post('/', [UserController::class, 'store']) ->name('store');
        Route::get('/{id}', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\BlogsController;
use App\Http\Controllers\User\CarController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [HomeController::class, 'index']) ->name('home');
Route::get('/register', [HomeController::class, 'showRegister']) ->name('register');
Route::get('/login', [HomeController::class, 'showLogin']) ->name('login');

Route::get('/blogs', [BlogsController::class, 'index']) ->name('blogs');
Route::get('/car', [CarController::class, 'index']) ->name('car');

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
        Route::delete('/{id}', 'delete')->name('delete');
    });



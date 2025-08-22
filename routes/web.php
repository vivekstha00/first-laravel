<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\BlogsController;
use App\Http\Controllers\User\CarController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;

Route::get('/', [HomeController::class, 'index']) ->name('home');
Route::get('/register', [HomeController::class, 'showRegister']) ->name('register');
Route::post('/register', [HomeController::class, 'register'])->name('register.store');
Route::get('/login', [HomeController::class, 'showLogin']) ->name('login');
Route::post('/login', [HomeController::class, 'login'])->name('login.store');

Route::middleware ('auth')->group(function(){
    Route::get('/blogs', [BlogsController::class, 'index']) ->name('blogs');
    Route::get('/car', [CarController::class, 'index']) ->name('car');
    Route::get('/about', [AboutController::class, 'index']) ->name('about');
    Route::get('/contact', [ContactController::class, 'index']) ->name('contact');
    Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
});


// Admin login routes (without middleware)
Route::prefix('admin')->as('admin.')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('login.index');
        Route::post('/login', 'check')->name('login.check');
        Route::post('/logout', 'logout')->name('logout');
    });
});

// Admin protected routes (with middleware)
Route::prefix('admin')->middleware(UserMiddleware::class)->as('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('page.dashboard');

    Route::prefix('page')->as('page.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'delete')->name('delete');
    });
});



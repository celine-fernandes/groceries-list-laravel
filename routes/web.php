<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;



Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('categories', CategoryController::class);

Route::resource('products', ProductController::class);


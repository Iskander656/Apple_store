<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderTrackingController;
use App\Http\Controllers\AuthController;

// HomePage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Categories
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

// Order
Route::get('/order/form/{productId}', [OrderController::class, 'showOrderForm'])->name('order.form');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

//Order Status
Route::get('/order-status', [OrderTrackingController::class, 'showForm'])->name('status.form');
Route::post('/order-status', [OrderTrackingController::class, 'check'])->name('status.check');

// Authentication(beta)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

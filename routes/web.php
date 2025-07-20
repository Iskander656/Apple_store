<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderTrackingController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/order/{productId}', [OrderController::class, 'showOrderForm'])->name('order.form');
Route::get('/order-status', [OrderTrackingController::class, 'showForm'])->name('status.status.form');
Route::post('/order-status', [OrderTrackingController::class, 'check'])->name('status.status.check');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

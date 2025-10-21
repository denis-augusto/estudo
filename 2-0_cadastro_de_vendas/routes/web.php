<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('customers', CustomerController::class);
Route::resource('products', ProductController::class);

Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');


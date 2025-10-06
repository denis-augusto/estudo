<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CostomerController;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/costomers', [CostomerController::class, 'index'])->name('costomers.index');
Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');


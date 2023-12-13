<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/manufacturers', [ProductController::class, 'index'])->name('manufacturers.indexManufac');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store']) -> name('products.store');
Route::get('/manufacturers/{id}/products', [ProductController::class, 'index'])->name('products.show');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


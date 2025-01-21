<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'welcome']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::delete('/{id}', [ProductController::class, 'delete']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);

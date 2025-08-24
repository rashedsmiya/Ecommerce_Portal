<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductdetailsController;



Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{slug}', [CategoryController::class, 'detail']);

Route::get('/category/electronics/{slug}', [SubcategoryController::class, 'detail']);

Route::get('/category/electronics/tv/{slug}', [ProductdetailsController::class, 'detail']);

Route::get('/cart-list/{slug}', [CartController::class, 'list']);

Route::get('/checkout/{slug}', [CheckoutController::class, 'checkout']);

Route::get('register', [UserController::class, 'register']);

Route::get('register1', [UserController::class, 'register1']);

Route::get('login', [UserController::class, 'login']);

Route::get('login1', [UserController::class, 'login1']);

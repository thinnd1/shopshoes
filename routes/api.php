<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ShipmentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// UserController
Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::put('users', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('shops', [ShopController::class, 'index']);
Route::get('shop/{id}', [ShopController::class, 'show'])->name('shop.show');
Route::post('shops', [ShopController::class, 'store'])->name('shop.store');
Route::put('shops', [ShopController::class, 'update'])->name('shop.update');
Route::delete('shops/{user}', [ShopController::class, 'destroy'])->name('shop.destroy');


Route::get('brand', [BrandsController::class, 'index']);
Route::get('brand/{id}', [BrandsController::class, 'show'])->name('brand.show');
Route::post('brand', [BrandsController::class, 'store'])->name('brand.store');
Route::put('brand', [BrandsController::class, 'update'])->name('brand.update');
Route::delete('brand/{user}', [BrandsController::class, 'destroy'])->name('brand.destroy');


Route::get('category', [CategoryController::class, 'index']);
Route::get('category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::post('category', [CategoryController::class, 'store'])->name('category.store');
Route::put('category', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{user}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('order', [OrderController::class, 'index']);
Route::get('order/{id}', [OrderController::class, 'show'])->name('order.show');
Route::post('order', [OrderController::class, 'store'])->name('order.store');
Route::put('order', [OrderController::class, 'update'])->name('order.update');
Route::delete('order/{user}', [OrderController::class, 'destroy'])->name('order.destroy');


Route::get('orderdetail', [OrderDetailController::class, 'index']);
Route::get('orderdetail/{id}', [OrderDetailController::class, 'show'])->name('orderdetail.show');
Route::post('orderdetail', [OrderDetailController::class, 'store'])->name('orderdetail.store');
Route::put('orderdetail', [OrderDetailController::class, 'update'])->name('orderdetail.update');
Route::delete('orderdetail/{user}', [OrderDetailController::class, 'destroy'])->name('orderdetail.destroy');

Route::get('product', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('product', [ProductController::class, 'store'])->name('product.store');
Route::put('product', [ProductController::class, 'update'])->name('product.update');
Route::delete('product/{user}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('review', [ReviewsController::class, 'index']);
Route::get('review/{id}', [ReviewsController::class, 'show'])->name('review.show');
Route::post('review', [ReviewsController::class, 'store'])->name('review.store');
Route::put('review', [ReviewsController::class, 'update'])->name('review.update');
Route::delete('review/{user}', [ReviewsController::class, 'destroy'])->name('review.destroy');

Route::get('shipment', [ShipmentsController::class, 'index']);
Route::get('shipment/{id}', [ShipmentsController::class, 'show'])->name('shipment.show');
Route::post('shipment', [ShipmentsController::class, 'store'])->name('shipment.store');
Route::put('shipment', [ShipmentsController::class, 'update'])->name('shipment.update');
Route::delete('shipment/{user}', [ShipmentsController::class, 'destroy'])->name('shipment.destroy');
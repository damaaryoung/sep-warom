<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about_us', [AboutUsController::class, 'index'])->name('about_us');

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/getCategories', [ProductsController::class, 'getCategories'])->name('products.categories');
Route::get('/products/getSubCategories', [ProductsController::class, 'getSubCategories'])->name('products.sub_categories');
Route::get('/products/getAllProducts', [ProductsController::class, 'getAllProducts'])->name('products.getAllProducts');
Route::get('/products/getSearchProducts', [ProductsController::class, 'getSearchProducts'])->name('products.getSearchProducts');

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//This is the new L* way of Routing via a controller
Route::get('/products', [ProductController::class, 'getPage']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/products', [App\Http\Controllers\ProductController::class, 'listProducts'])->name('products.listing');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/admindashboard', function () {
    return view ('/pages/admindashboard');
});

Route::get('/master', function () {
    return view ('/templates/master');
});

Route::get('/product', [productController::class, 'index']);

Route::get('/product/delete/{id}', [productController::class, 'destroy'])->name('productDelete');

Route::get('/category', [categoryController::class, 'index']);

Route::get('/category/delete/{id}', [categoryController::class, 'destroy'])->name('categoryDelete');

Route::get('/customer', [customerController::class, 'index']);

Route::get('/customer/delete/{id}', [customerController::class, 'destroy'])->name('customerDelete');
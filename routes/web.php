<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
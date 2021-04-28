<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/checkout/{product}', [OrderController::class, 'checkout'])->name('checkout');

Route::get('/order', [OrderController::class, 'order']);

Route::get('/confirmation', [OrderController::class, 'confirmation']);

Route::post('/confirmation', [OrderController::class, 'confirm']);

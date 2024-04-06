<?php

use App\Http\Controllers\MeatballController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SideDishController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Product', [MeatballController::class,'index'])->name('product');

Route::get('/SideDish', [SideDishController::class,'index'])->name('side');

Route::get('/Receipt', function () {
    return view('receipt');
});

Route::post('/updateQuantity', 'ProductController@updateQuantity')->name('updateQuantity');



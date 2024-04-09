<?php

use App\Http\Controllers\MeatballController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SideDishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StockController;

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

Route::post('/Save-Product', [OrderController::class,'saveModel'])->name('save_model');

Route::get('/Get-Product', [OrderController::class,'getModel'])->name('get_model');

Route::post('/Save-Order', [OrderController::class,'saveOrder'])->name('save_order');

Route::get('/Product', [MeatballController::class,'index'])->name('product');

Route::get('/SideDish', [OrderController::class,'index'])->name('side');

Route::get('/Receipt/{id}', [PaymentController::class,'index'])->name('receipt');

Route::get('/Orders', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/Stock', [StockController::class, 'index'])->name('stock');

Route::get('/Payment',function () {
    return view('payment');
});


Route::get('/Admin', function () {
    return view('admin');
});

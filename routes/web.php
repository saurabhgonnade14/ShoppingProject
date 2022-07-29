<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

//dashboard
Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');

//products
Route::get('admin/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('admin/products/store',[ProductController::class,'store'])->name('products.store');
Route::get('admin/products/index',[ProductController::class,'index'])->name('products.index');
Route::get('admin/products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::post('admin/products/update/{id}',[ProductController::class,'update'])->name('products.update');
Route::get('admin/products/delete/{id}',[ProductController::class,'delete'])->name('products.delete');
Route::get('admin/products/details/{id}',[ProductController::class,'show'])->name('products.details');

//orders
Route::get('admin/orders/index',[OrderController::class,'index'])->name('orders.index');
Route::get('admin/orders/confirm/{id}',[OrderController::class,'confirm'])->name('orders.confirm');
Route::get('admin/orders/pending/{id}',[OrderController::class,'pending'])->name('orders.pending');
Route::get('admin/orders/details/{id}',[OrderController::class,'show'])->name('orders.details');

//users
Route::get('admin/users/index',[UserController::class,'index'])->name('users.index');
Route::get('admin/users/details/{id}',[UserController::class,'show'])->name('users.details');

//adminlogin
Route::post('admin/login',[AdminUserController::class,'index'])->name('login.index');

//welcome
Route::get('/',[HomeController::class,'index'])->name('home');



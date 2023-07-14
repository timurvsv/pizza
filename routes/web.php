<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProductsController;
use App\Models\Admin;
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
Route::get('/', [ProductsController::class, 'index'])->name('index_product');
Route::get('/show', [ProductsController::class, 'show_data_product'])->name('show_product');

Route::get('/product', [AdminController::class, 'admin_data_product'])->name('admin_product');
Route::get('/categories', [CategoriesController::class, 'admin_data_category'])->name('admin_category');

Route::get('/products.create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products.store', [ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::patch('/products/{id}update', [ProductsController::class, 'update'])->name('products.update');
Route::get('/products/{id}delete', [ProductsController::class, 'delete'])->name('products.delete');

Route::get('/basket.product', [BasketController::class, 'basket'])->name('basket_product');
//Route::get('/delete.basket', [BasketController::class, 'delete'])->name('delete_basket');
Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('login',[LoginAdminController::class, 'formLogin'])->name('admin.login');
    Route::post('login',[LoginAdminController::class, 'login']);

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout',[LoginAdminController::class, 'logout'])->name('admin.logout');
        Route::view('/','login.dashboard')->name('dashboard');
        Route::view('/post','login.data-post')->name('post')->middleware('can:role,"admin","editor"');
        Route::view('/admin','login.data-admin')->name('admin')->middleware('can:role,"admin"');
    });
});





<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'indexView'])->name('index.view');
Route::get('/catalog', [PageController::class, 'catalogView'])->name('catalog.view');
Route::get('/{id}/product', [PageController::class, 'productView'])->name('product.view');
Route::get('/about', [PageController::class, 'aboutView'])->name('about.view');
Route::get('/contact', [PageController::class, 'contactView'])->name('contact.view');


Route::middleware("guest")->group(function () {
    Route::post('/register', [UserController::class, 'registration'])->name('registration');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::middleware("auth")->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [PageController::class, 'profileView'])->name('profile.view');
    Route::get('/basket', [PageController::class, 'basketView'])->name('basket.view');
    Route::get('/basket/{id}/add/', [BasketController::class, 'basketAdd'])->name('add.basket');
    Route::get('/basket/{id}/addCount/', [BasketController::class, 'addCount'])->name('addCount.basket');
    Route::get('/basket/{id}/removeCount/', [BasketController::class, 'removeCount'])->name('removeCount.basket');
    Route::get('/basket/{id}/basketRemove/', [BasketController::class, 'basketRemove'])->name('basketRemove.basket');

    Route::get('/order/add/',[OrderController::class, 'addOrder'] )->name('addOrder');
});

Route::middleware(['auth', Admin::class])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'adminView'])->name('admin.view');
    Route::get('/catalog', [AdminController::class, 'adminCatalog'])->name('admin.catalog');
    Route::get('/category', [AdminController::class, 'adminCategory'])->name('admin.category');
    Route::get('/user', [AdminController::class, 'adminUser'])->name('admin.user');
    Route::get('/order', [AdminController::class, 'adminOrders'])->name('admin.orders');
    Route::post('/products/add', [ProductController::class, 'createProduct'])->name('admin.products.store');
    Route::delete('/products/{id}/delete', [ProductController::class, 'deleteProduct'])->name('admin.products.delete');
    Route::PUT('/products/edit/{id}', [ProductController::class, 'updateProduct'])->name('admin.products.update');
    Route::post('/category/add', [CategoryController::class, 'createCategory'])->name('admin.category.store');
    Route::put('/category/edit/{id}', [CategoryController::class, 'updateCategory'])->name('admin.category.update');
    Route::delete('/category/{id}/delete', [CategoryController::class, 'deleteCategory'])->name('admin.category.delete');
    Route::post('/order/{id}/status', [OrderController::class, 'adminStatus'])->name('admin.status');
});

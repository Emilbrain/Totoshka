<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'indexView'])->name('index.view');
Route::get('/catalog', [PageController::class, 'catalogView'])->name('catalog.view');
Route::get('/product', [PageController::class, 'productView'])->name('product.view');
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
});

Route::middleware(['auth', Admin::class])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'adminView'])->name('admin.view');
    Route::get('/catalog', [AdminController::class, 'adminCatalog'])->name('admin.catalog');
    Route::get('/category', [AdminController::class, 'adminCategory'])->name('admin.category');
    Route::post('/products/add', [ProductController::class, 'createProduct'])->name('admin.products.store');
    Route::post('/category/add', [CategoryController::class, 'createCategory'])->name('admin.category.store');
    Route::put('/category/edit/{id}', [CategoryController::class, 'updateCategory'])->name('admin.category.update');
    Route::delete('/category/{id}/delete', [CategoryController::class, 'deleteCategory'])->name('admin.category.delete');
});

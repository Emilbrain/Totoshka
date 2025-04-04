<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'indexView'])->name('index.view');
Route::get('/catalog', [PageController::class, 'catalogView'])->name('catalog.view');
Route::get('/about', [PageController::class, 'aboutView'])->name('about.view');
Route::get('/contact', [PageController::class, 'contactView'])->name('contact.view');
Route::get('/profile', [PageController::class, 'profileView'])->name('profile.view');
Route::get('/basket', [PageController::class, 'basketView'])->name('basket.view');


Route::middleware("guest")->group(function () {
    Route::post('/register', [UserController::class, 'registration'])->name('registration');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

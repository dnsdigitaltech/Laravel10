<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/protected', [HomeController::class, 'index'])->name('protected')->middleware('teste:Davi');

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.home')->withoutMiddleware('auth');
    Route::get('/clients', [ClientController::class, 'index'])->name('admin.clients');
});
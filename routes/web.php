<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProtectedController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::middleware('throttle:users')->get('/teste', [LoginController::class, 'index']);
Route::get('/protected', [ProtectedController::class, 'index'])->name('protected');
Route::get('/protected/create', [ProtectedController::class, 'create'])->name('protected.create');

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.home')->withoutMiddleware('auth');
    Route::get('/clients', [ClientController::class, 'index'])->name('admin.clients');
});
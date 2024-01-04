<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::resource('user', UserController::class)->names([
    'create' => 'create.user',
    'store' => 'store.user',
])->only(['index', 'store', 'create']);

Route::get('/teste', function(){
    return redirect()->route('create.user');
});
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/create', [UserController::class, 'create']);
// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::get('/user/{id}/edit', [UserController::class, 'edit']);
// Route::put('/user/{id}', [UserController::class, 'update']);
// Route::post('/user', [UserController::class, 'store']);
// Route::delete('/user', [UserController::class, 'destroy']);
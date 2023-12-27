<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::match(['get', 'post'], '/user/teste', function(){
    dd('teste');
});
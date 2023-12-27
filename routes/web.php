<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('user/{name}/age/{age}', function($name, $age){
    dd("user {$name} idade {$age}");
})->where('name', '[a-z\-]+')->whereNumber('age');
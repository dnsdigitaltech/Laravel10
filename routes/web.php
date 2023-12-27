<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('blog')->group(function(){
    Route::get('/', function(){
        dd('blog');
    });

    Route::get('/post/{slug}', function($slug){
        dd($slug);
    });
});

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', function(){
        dd('admin');
    });
});

Route::get('/', [HomeController::class, 'index']);

Route::get('user/{name}/age/{age}', function($name, $age){
    dd("user {$name} idade {$age}");
})->where('name', '[a-z\-]+')->whereNumber('age');
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
})->name('home');

Route::post('/login', function(){
    return back()->withInput()->with('message', 'Error ao fazer o login');;
    //return redirect()->back();
    //return redirect('/')->withInput()->with('message', 'Error ao fazer o login');
});

//Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::get('/teste', function () {
    //return redirect()->route('product', ['id' => '89']);
    //return redirect()->route('home');
    //return redirect('/product/89');
    //return redirect('/');
    //return redirect()->action([HomeController::class, 'index']);
    //return redirect()->action([ProductController::class, 'edit'], ['id' => 89]);
    //return redirect()->action([ProductController::class, 'create']);
    return redirect()->away('http://google.com');
});
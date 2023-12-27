<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //dd(route('home'));
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    //return redirect()->route('home');
    //return redirect('/');
    //dd(route('contact'));
    dd('contato');
})->name('contact');

Route::get('/teste', function () {
    dd('teste');
})->name('teste');

//Rotas com nome e rotas agrupadas
Route::name('admin.')->prefix('admin')->group(function(){
    Route::get('/', function(){
        
    });
    Route::get('/create', function(){
        dd('create admin');
    })->name('create');
    Route::get('/update', function(){
        dd('update admin');
    })->name('update');
});
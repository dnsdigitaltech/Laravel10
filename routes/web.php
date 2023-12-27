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
    //dump($_SERVER);//mostra o log e não trava a aplicação
    //dd($_SERVER); //mostra o log e trava a aplicação
    //ddd($_SERVER); //mostra o log em uma tela específica com mais recursos
    return view('welcome');
});

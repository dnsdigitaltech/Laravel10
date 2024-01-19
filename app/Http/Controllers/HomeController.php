<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['name'] = 'Davi';
        $data['age'] = '39';
        return view('home', $data);
    }
}

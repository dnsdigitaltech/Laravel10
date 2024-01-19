<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['name'] = 'Davi';
        $data['age'] = '39';
        $data['users'] = User::all();
        $data['title'] = 'Home';
        return view('home', $data);
    }
}

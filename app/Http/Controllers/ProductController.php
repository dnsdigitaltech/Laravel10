<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function edit($id){
        dd($id);
    }

    public function create($id){
        dd('Create');
    }
}

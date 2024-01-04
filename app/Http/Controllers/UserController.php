<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        dd('list user');
    }

    public function show($id){
        dd('show user com o id '.$id);
    }

    public function edit($id){
        dd('edit user com o id '.$id);
    }

    public function update(){
        dd('update');
    }

    public function create(){
        dd('create');
    }

    public function store(){
        dd('store');
    }

    public function destroy(){
        dd('delete');
    }
}

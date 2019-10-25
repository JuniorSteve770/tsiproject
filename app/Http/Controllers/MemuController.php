<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemuController extends Controller
{
    //
    public function index(){
        return view('hello.index');
    }
}

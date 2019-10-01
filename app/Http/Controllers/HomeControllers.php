<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function show(){
        return view('users')
        ->with('name','sim')
        ->with('title','Laravel tutorial');
    }
}


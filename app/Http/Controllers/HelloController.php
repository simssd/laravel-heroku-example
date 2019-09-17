<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function showHello(){
       return '<h1>Hollo controller</h1>'
    }
}
         

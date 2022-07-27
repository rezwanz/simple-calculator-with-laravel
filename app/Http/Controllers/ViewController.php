<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('welcome');
        return view('front.home.home');
    }
    public function calculator()
    {
        return view('front.calculator.calculator');
    }
}

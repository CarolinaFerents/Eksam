<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $burgers = Burger::all();
        return view('index', compact('burgers'));
    }
}

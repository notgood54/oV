<?php

namespace App\Http\Controllers;

use App\View\Components\layout;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view("home",["title"=>"Gor Sample"]);
    }

}

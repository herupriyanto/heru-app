<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    function index()
    {
        return view('home.index', ['name' => 'Samantha']);
    }
}

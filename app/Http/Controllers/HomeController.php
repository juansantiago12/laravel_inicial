<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controlador de la página principal
class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}

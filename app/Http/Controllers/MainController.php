<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function menu()
    {
        $categories = ['Petit déjeuner', 'Entrées', 'Plats', 'Desserts', 'Boissons'];

        return view('menu', ['categories' => $categories]);
    // variables qui peuvent être 
    }

    public function reservation()
    {
        return view('reservation');
    }

    public function apropos()
    {
        return view('a-propos');
    }
}

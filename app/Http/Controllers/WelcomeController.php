<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home')->with([
            'nombre' => 'Arandi',
            'apellido' => 'Lopez'
        ]);
    }

    public function hello($name)
    {
        // return redirect()->to('/home');
        return redirect()->route('home')->with([
            'info' => 'Fuiste redirigido aquí'
        ]);
    }
}

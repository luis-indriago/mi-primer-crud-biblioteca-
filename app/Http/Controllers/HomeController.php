<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $libros = Libro::all()->random(4);
        return view('home', compact('libros'));
    }
}

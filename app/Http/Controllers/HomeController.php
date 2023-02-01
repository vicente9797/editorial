<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $libros = collect([
            ['id' => 1, 'nombre' => 'Quijote de la Mancha', 'price' => 200],
            ['id' => 2 ,'nombre' => 'Harry Potter', 'price' => 100],
            ['id' => 3 ,'nombre' => 'Tren al sur', 'price' => 300],
            ['id' => 4 ,'nombre' => 'Manifiesto', 'price' => 400],
            ['id' => 5 ,'nombre' => 'Blaze Runner', 'price' => 500],
        ]);

        return view('home')->with('libros',$libros);
    }
}

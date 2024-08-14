<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class holaMundonController extends Controller
{
    public function holaMundo_prueba(){
        return view('holamundo')
        ->with('dato','Hola como parametro adicional'); //mostrar datos adicionaes
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primeraView extends Controller
{
    //Crear el metodo para ver la view
    public function ej1primeraView(){
        return view("primeraView") -> with(["v1"=>"Funciona"]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    //Crear el metodo Hola
    public function hola($persona, $persona2, $persona3, $persona4){
        $textoFinal = "Hola " .$persona ." ". $persona2 ." ". $persona3 ." ". $persona4. ". ";
        
        return $textoFinal;
    }
}

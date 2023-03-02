<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorEjecicio1 extends Controller
{
    //Creacion del metodo para el ej1
    public function ej1Parametro(){
        return "Éste es el resultado del primer ejercicio de la práctica hecha por Raul Rufo";
    }
    //Creacion de metodo al que le paso 4 parametro
    public function ej1PasandoParametros($parametro, $parametro2, $parametro3, $parametro4){
        $devuelveTxt = "Este es el resultado del ". $parametro." ejercicio de la ". $parametro2." hecha por ".$parametro3." ".$parametro4.". [Hecho con 4 parametros]";
        return view("viewPara4Parametros") -> with(["v1"=>$devuelveTxt]);
    }
}

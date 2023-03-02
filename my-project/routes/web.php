<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorEjecicio1;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\primeraView;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/hola", function(){
//     return"Hola, que tal";
// });

Route::get("/hola/{persona}/{persona2}/{persona4}/{persona3}", [PrimerControlador::class,"hola"]);

Route::get("/ej1", [controladorEjecicio1::class,"ej1Parametro"]);
Route::get("/ej1/p2/{parametro}/{parametro2}/{parametro3}/{parametro4}", [controladorEjecicio1::class,"ej1PasandoParametros"]);


Route::get("/primeraView", [primeraView::class,"ej1primeraView"]);



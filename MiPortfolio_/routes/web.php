<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('cvgrid');
});

Route::get('nombreApellido', function(){
    return 'Lujan Cuellar';
});

Route::get("Apellido/{Apellido}", function($Apellido){
    if($Apellido == "Cuellar") {
        return "Bienvenido". $Apellido;
    } else {
        abort(404, "La ruta no existe");
    }
});



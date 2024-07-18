<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// los controllers sirven para manejar la lógica de las rutas de la aplicación web 
// se pueden crear con el comando php artisan make:controller NombreController
class HomeController extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function show($id){
        return 'SHOWING ID: '.$id;
    }
}

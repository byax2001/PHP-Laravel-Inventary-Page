<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('posts.index');
    }
    public function create(){
        return view('posts.create');
    }
    public function show($id){
        return view('posts.show', [
            'id' => $id
        ]);
        // tambien se pudo haber hecho de la siguiente manera
        // return view('posts.show', compact('id'));
        // compact crea un array asociativo con el nombre de la variable y su valor
        // compact('id') es equivalente a ['id' => $id]
    }
}

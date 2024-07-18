<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OneMethodController;
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
//En este archivo se definen las rutas de la aplicación web
//Los tipos de peticiones pueden ser GET, POST, PUT, DELETE, etc.
Route::get('/',[HomeController::class, 'index']);
Route::get('/show/{id}',[HomeController::class, 'show']);
Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/create',[PostController::class, 'create']);
Route::get('/posts/{id}',[PostController::class, 'show']);
//Se puede definir una ruta que apunte a un solo método de un controlador
Route::get('/onemethod',OneMethodController::class);

Route::post('/login', function () {
    return 'LOGIN SUCCESSFUL';
});

Route::put('/update', function () {
    return 'UPDATE SUCCESSFUL';
});

Route::get('/welcome/{name}', function ($name) {
    return 'Hola '.$name;
});
//El signo de interrogación indica que el parámetro es opcional, si no se envía se toma el valor por defecto
Route::get('/welcome/{name}/{lastname?}', function ($name, $lastname='') {
    return 'Hola '.$name.' '.$lastname;
});
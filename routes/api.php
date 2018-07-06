<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('prueba', function(){
    return 'Hola mundo';
});


Route::get('usuarios', function(){
    return \App\Usuario::all();
});

Route::get('productos', function(){
    return \App\Producto::all();
});
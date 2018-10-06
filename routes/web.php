<?php

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
    return view('welcome');
});
Route::get('/saludo', function () 
{
    return ('hola');
});
//pasas la ruta y el parametro con {}
Route::get('/saludo/{name}', function ($name)
{
	return $name;//
});
Route::get('/{name}/{number}', function ($name,$number)
{
	if ($number%2==0) {
		return $number . ' es par';
	}else {
		return $number . ' es impar';
	}
})->where('number','[0-9]+');
//sin return el return te lo da el controlador
Route::get('/foro', 'EjemploController@inicio');

Route::get('/foro/{name}', 'EjemploController@inicioParametro');
//Conviene llamarle Controller
//php artisan make:controller
Route::get('/vista/{name}', 'EjemploController@mostrarVista');

Route::get('/vista/{name}', 'EjemploController@mostrarVistaParametro');

Route::get('/vista', 'EjemploController@mostrarVistaParametros');

Route::get('/form', 'EjemploController@nombreApellido');

Route::get('/mostrar', 'EjemploController@mostrar');

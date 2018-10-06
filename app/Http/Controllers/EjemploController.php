<?php
//(namespace)para no crear conflictos con otras clases
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EjemploController extends Controller
{
    public function inicio(){
    	return 'Estoy en el controlador '. $name;
    }
    public function inicioParametro($name){
    	return 'Estoy en el controlador '. $name;
    }
    public function mostrarVista($name){
    	return view ('vista1');
    }
    public function mostrarVistaParametro($name){
    	return view ('vista2',['name'=>$name]);
    							//array asociativo
    							//dollar para ver la variable
    }
    public function mostrarVistaParametros(Request $request){
        $nombre = $request->input('nombre');
        $color = $request->input('color');
    	return view ('vista2', [
            'nombre'=>$nombre, 
            'color'=>$color
        ]);
    }
    public function nombreApellido(){
    	return view ('nombreApellido');
    }
    public function mostrar(Request $request){
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $color = $request->input('color');

        return view ('mostrarNombreApellido', [
            'nombre'=> $nombre,
            'apellido'=> $apellido,
            'color'=> $color
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


//modelo//
use App\empleados;
//////



class littlehouse4 extends Controller
{
	
	//Alta
    public altaempleado(){
	   $clavequesigue = empleados::orderBy('id_empleado','desc')
       ->take(1)
       ->get();
   $idempleado =$clavequesigue[0]->id_empleado+1;
   return view('sistema.altaempleado')
   ->with('idempleado',$idempleado);
   }
   ///////
   
   
   //Guarda Alta//
   public function guardaempleado(Request $request)
   {
	$id_empleado = $request->id_empleado;
	$nombre = $request->nombre;
	$apellidos = $request->apellidos;
	$sexo = $request->sexo;
	$cargo = $request->cargo;
	$this->validate($request[
	'id_empleado'=>'required|max:10|numeric',
	'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ú,ó,ú]+$/'],
	'apellidos'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ú,ó,ú]+$/'],
	'cargo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ú,ó,ú]+$/']
	]);
	
	
	$emp = new empleados;
	$emp->id_empleado = $request->id_empleado;
	$emp->apellidos = $request->apellidos;
	$emp->sexo = $request->sexo;
	$emp->cargo = $request->cargo;
	$emp->save();
	$proceso="Excelente!!!";
	$mensaje="Registro guardado correctamente";
	return view('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
	}
   //////
   
   
   //Reporte//
   public function reportempleado(){
	
    $empleados = empleados::orderBy('id_empleado','asc')
    ->get();

     return view('sistema.reportempleado')	
	   ->with('empleados',$empleados);
   }
   ////
   
   
   
	   
	   
	   
	   
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pedidos;
use App\clientes;
use App\usuarios;





class littlehouse3 extends Controller
{
    
	
	//Alta Pedido//
	 public function altapedidos()
    {
     	 	 $clavequesigue = pedidos::withTrashed()->orderBy('id_pedido','desc')
								->take(1)
								->get();
								
     $idpedido = $clavequesigue[0]->id_pedido+1;
	 
	 $clientes = clientes::where('activo','=','SI')
	                      ->orderBy('nombre','asc')
						  ->get();
	$usuarios = usuarios::where('activo','=','SI')
	                      ->orderBy('nombre_usuario','asc')
						  ->get();
     return view ("sistema.altapedidos")
	 ->with('clientes',$clientes)
	 ->with('usuarios',$usuarios)
	 ->with('idpedido',$idpedido);
	}
	///////
	///Guarda Pedido////
	public function guardapedido(Request $request)
    {
		$id_pedido = $request->id_pedido;
        $direccion =  $request->direccion;
        $fecha_pedido = $request->fecha_pedido;
        $fecha_entrega = $request->fecha_entrega;
        $this->validate($request,[
	     'id_pedido'=>'required|numeric',
         'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+ [#][0-9]+$/'],
		 'fecha_pedido'=>'required|date',
		 'fecha_entrega'=>'required|date'
	     ]);
		 
            $pedid = new pedidos;
			$pedid->id_pedido = $request->id_pedido;
			$pedid->direccion = $request->direccion;
			$pedid->fecha_pedido =$request->fecha_pedido;
			$pedid->fecha_entrega = $request->fecha_entrega;
		    $pedid->id_cliente = $request->id_cliente;
			$pedid->id_usuario = $request->id_usuario;
			$pedid->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		  
        
    }
	///////
	///Reporte de pedido//
	 public function reportepedido()
	{
	$pedidos=pedidos::withTrashed()->orderBy('id_pedido','asc')
	          ->get();
	  return view('sistema.reportepedido')
	  ->with('pedidos',$pedidos);                  
	}
	////////
	
	
	
	
	
	
	
	
	
}

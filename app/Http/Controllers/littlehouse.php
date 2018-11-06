<?php

namespace App\Http\Controllers;
///Use///
use Illuminate\Http\Request;
use App\Http\Requests;
use App\clientes;
use App\descripcion_casas;
use App\pedidos;
use App\usuarios;
use App\alm_productos;
use App\entradas;
use App\salidas;
use Session;
//use App\pedido_detalles;
//use App\entradas_detalles;
//use App\salidas_detalles;
//////
//////

///Clase lttlehouse///
class littlehouse extends Controller
{
    
	 public function index()
    {
        return view("sistema.index");
    }
	public function altas()
    {
        return view("sistema.altas");
    }
	public function tablas()
    {
        return view("sistema.tablas");
    }
	public function plantmensaje()
    {
        return view("sistema.plantmensaje");
    }
   //alta cliente//
    public function altacliente()
    {
     	 
	 
	 $clavequesigue = clientes::withTrashed()->orderBy('id_cliente','desc')
								->take(1)
								->get();
								//Id Desde 0//
								if(count($clavequesigue)==0)
								{
									$idcs =1;
								}
								else
								{
									$idcs = $clavequesigue[0]->id_cliente+1;
								}
								//////
     return view ("sistema.altacliente")
	 ->with('idcs',$idcs);
	}
	
	/////
	
	
    //guarda cliente//
    public function guardacliente(Request $request)
    {
		$id_cliente = $request->id_cliente;
        $nombre =  $request->nombre;
        $apellidos = $request->apellidos;
        $direccion = $request->direccion;
		$cp = $request->cp;
		$tel = $request->tel;
		$correo = $request->correo;
		$activo = $request->activo;
        
		 $this->validate($request,[
	     'id_cliente'=>'required|numeric',
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'apellidos'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+ [#][0-9]+$/'],
		 'cp'=>['regex:/^[0-9]{5}$/'],
         'tel'=>['regex:/^[0-9]{10}$/'],
         'correo'=>'required|email'
		 
	     ]);
     
         $client = new clientes;
			$client->id_cliente = $request->id_cliente;
			$client->nombre = $request->nombre;
			$client->apellidos =$request->apellidos;
			$client->direccion= $request->direccion;
			$client->cp=$request->cp;
			$client->tel=$request->tel;
			$client->correo=$request->correo;
			$client->activo=$request->activo;
			//$client->idc=$request->idc;
			$client->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
			
		  
        
    }
	//////////
	public function reportecliente()
	{
	$clientes=clientes::withTrashed()->orderBy('id_cliente','asc')
	          ->get();
	  return view('sistema.reportecliente')
	  ->with('clientes',$clientes);                  
	}
	
	//Modifica Cliente
	public function modificl($id_cliente)
	{
		$cl = clientes::withTrashed()->where('id_cliente','=',$id_cliente)
		                     ->get();
		return view ('sistema.modificl')
		->with('cl',$cl[0]);
	}
	///////
	
	///Guarda Modificación del Cliente/////
	public function guardamodificli(Request $request)
	{
		$id_cliente = $request->id_cliente;
        $nombre =  $request->nombre;
        $apellidos = $request->apellidos;
        $direccion = $request->direccion;
		$cp = $request->cp;
		$tel = $request->tel;
		$correo = $request->correo;
		$activo = $request->activo;
        
		 $this->validate($request,[
         'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'apellidos'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+ [#][0-9]+$/'],
		 'cp'=>['regex:/^[0-9]{5}$/'],
         'tel'=>['regex:/^[0-9]{10}$/'],
         'correo'=>'required|email'
		 ]);
		 $client = clientes::find($id_cliente);
		 $client->id_cliente = $request->id_cliente;
			$client->nombre = $request->nombre;
			$client->apellidos =$request->apellidos;
			$client->direccion= $request->direccion;
			$client->cp=$request->cp;
			$client->tel=$request->tel;
			$client->correo=$request->correo;
			$client->activo=$request->activo;
			$client->save();
			$proceso = "Guardar modificacion de Cliente";
			$mensaje = "Registro modificado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		 }
	///////
	
	
	//Inhabilita cliente
	public function eliminacli($id_cliente)
	{
		  clientes::find($id_cliente)->delete();
		    $proceso = "Inhabilita el Registro del cliente";
			$mensaje = "El registro ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	//elimina cliente
	
	//Restaurar Cliente//
	public function restauracl($id_cliente)
	{
		clientes::withTrashed()->where('id_cliente',$id_cliente)->restore();
		$proceso = "Restauracion del Cliente";
		$mensaje = "Registro restaurado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicacl($id_cliente)
	{
		clientes::withTrashed()->where('id_cliente',$id_cliente)->forceDelete();
		$proceso = "Eliminacion del Cliente";
		$mensaje = "Registro eliminado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	//////////
	//Alta Pedido//
	 public function altapedidos()
    {
     	 	 $clavequesigue = pedidos::withTrashed()->orderBy('id_pedido','desc')
								->take(1)
								->get();
								//Id desde 0//
								if(count($clavequesigue)==0)
								{
									$idpedido =1;
								}
								else
								{
								
     $idpedido = $clavequesigue[0]->id_pedido+1;
								}
	 //
	 $clientes = clientes::withTrashed()->where('activo','=','SI')
	                      ->orderBy('nombre','asc')
						  ->get();
	$usuarios = usuarios::withTrashed()->where('activo','=','SI')
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
		$resultado=\DB::select(" SELECT m.id_pedido,m.direccion,m.fecha_pedido,
	    m.fecha_entrega,c.nombre AS clien,u.nombre AS usuar,m.deleted_at
        FROM pedidos AS m
        INNER JOIN clientes AS c ON c.id_cliente =  m.id_cliente INNER JOIN usuarios AS u ON u.id_usuario =  m.id_usuario");
	/*$pedidos=pedidos::withTrashed()->orderBy('id_pedido','asc')
	          ->get();*/
	  return view('sistema.reportepedido')
	  ->with('pedidos',$resultado);                  
	}
	////////
	
	
	///Modifica Registro del Pedido////
	public function modificaped($id_pedido)
	{
		$pedidos = pedidos::where('id_pedido','=',$id_pedido)
		                     ->get();
		$id_cliente = $pedidos[0]->id_cliente;
		$id_usuario = $pedidos[0]->id_usuario;
		
		$clientes = clientes::where('id_cliente','=',$id_cliente)->get();
		$usuarios = usuarios::where('id_usuario','=',$id_usuario)->get();
		
		$otrosclientes = clientes::where('id_cliente','!=',$id_cliente)
		                 ->get();
		$otrosusu = usuarios::where('id_usuario','!=',$id_usuario)
		                 ->get();
		return view ('sistema.modificaped')
		->with('pedidos',$pedidos[0])
	    ->with('id_cliente',$id_cliente)
		->with('id_usuario',$id_usuario)
	    ->with('clientes',$clientes[0]->nombre)
		->with('usuarios',$usuarios[0]->nombre_usuario)
		->with('otrosclientes',$otrosclientes)
		->with('otrosusu',$otrosusu);
	
	}
	//////
	
	///Guarda Modificación///
	public function guardamodificaped(Request $request)
	{
	    $id_pedido = $request->id_pedido;
        $direccion =  $request->direccion;
        $fecha_pedido = $request->fecha_pedido;
        $fecha_entrega = $request->fecha_entrega;
		
		$this->validate($request,[
         'direccion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+ [#][0-9]+$/'],
		 'fecha_pedido'=>'required|date',
		 'fecha_entrega'=>'required|date'
	     ]);
		 
		    $pedid = pedidos::find($id_pedido);
		    $pedid->id_pedido = $request->id_pedido;
			$pedid->direccion = $request->direccion;
			$pedid->fecha_pedido =$request->fecha_pedido;
			$pedid->fecha_entrega = $request->fecha_entrega;
		    $pedid->id_cliente = $request->id_cliente;
			$pedid->id_usuario = $request->id_usuario;
			$pedid->save();
			$proceso = "Modifica registro de los pedidos";
			$mensaje = "Registro modificado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		 
		
 echo "Listo para modificar";
	}
	//////
	
	///Inhabilita Pedidos///
	public function eliminaped($id_pedido)
	{
		  pedidos::find($id_pedido)->delete();
		    $proceso = "INHABILITAR Pedidos";
			$mensaje = "El pedido ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	///////
	//Restaurar Pedido//
	public function restauraped($id_pedido)
	{
		pedidos::withTrashed()->where('id_pedido',$id_pedido)->restore();
		$proceso = "Restauracion del Pedido";
		$mensaje = "Registro restaurado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicaped($id_pedido)
	{
		pedidos::withTrashed()->where('id_pedido',$id_pedido)->forceDelete();
		$proceso = "Eliminacion del Pedido";
		$mensaje = "Registro eliminado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	//////////
	
	
	//alta casa//
    public function altacasa()
    {
	 $clavequesigue = descripcion_casas::withTrashed()->orderBy('id_casa','desc')
								->take(1)
								->get();
								if(count($clavequesigue)==0)
								{
									$idcasa =1;
								}
								else
								{
     $idcasa = $clavequesigue[0]->id_casa+1;
								}
     return view ("sistema.altacasa")
	 ->with('idcasa',$idcasa);
	}
	/////
	
    //guarda casa//
    public function guardacasa(Request $request)
    {
		$id_casa = $request->id_casa;
        $dimenciones =  $request->dimenciones;
        $color = $request->color;
        $descripcion = $request->descripcion;

        
		 $this->validate($request,[
	     'id_casa'=>'required|numeric',
         'dimenciones'=>['regex:/^[0-9]+[x]{1}[0-9]+$/'],
		 'color'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'descripcion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'archivo'=>'image|mimes:jpeg,png,gif,jpg'
	     ]);
		 ///Validacion Archivo///
     $file = $request->file('archivo');
	 if($file!="")
	 {	 
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
     {
	 $img2= 'sin especificar.png';
	 }
	 ///////
            $cas = new descripcion_casas;
			$cas->id_casa = $request->id_casa;
			$cas->dimenciones = $request->dimenciones;
			$cas->color =$request->color;
			$cas->descripcion= $request->descripcion;
			$cas->archivo = $img2;
			$cas->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		  
        
    }
	//Reporte de Casa//
	public function reportecasa()
	{
	$descripcion_casas=descripcion_casas::withTrashed()->orderBy('id_casa','asc')
	          ->get();
	  return view('sistema.reportecasa')
	  ->with('descripcion_casas',$descripcion_casas);                  
	}
	///////////
	
	//Modificar Casa//
	public function modificas($id_casa)
	{
		$casas = descripcion_casas::withTrashed()->where('id_casa','=',$id_casa)
		                     ->get();
		return view ('sistema.modificas')
		->with('casas',$casas[0]);
	}
    ///////
	
	//Guardar Modificacion de casa//
	public function guardamodificas(Request $request)
	{
		$id_casa = $request->id_casa;
        $dimenciones =  $request->dimenciones;
        $color = $request->color;
        $descripcion = $request->descripcion;
        
		 $this->validate($request,[
         'dimenciones'=>['regex:/^[0-9]+[x]{1}[0-9]+$/'],
		 'color'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'descripcion'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'archivo'=>'image|mimes:jpeg,png,gif,jpg'
	     ]);
		 
		 //////
		  $file = $request->file('archivo');
	 if($file!="")
	 {	 
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file)); 
	 }
	        $cas = descripcion_casas::find($id_casa);
			$cas->id_casa = $request->id_casa;
			$cas->dimenciones = $request->dimenciones;
			$cas->color =$request->color;
			$cas->descripcion= $request->descripcion;
			 if($file!="")
	        {	
			$cas->archivo = $img2;
	        }
			$cas->save();
			$proceso = "Modifica Registro de Casa";
			$mensaje = "REgistro ha sido modificado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	 
	 
	 
	 
	 
		 echo "Listo para modificar";
	}
	
	//////////////
	
	
	//elimina casas
	public function eliminacas($id_casa)
	{
		  descripcion_casas::find($id_casa)->delete();
		    $proceso = "Inhabilita el Registro de Casas";
			$mensaje = "El registro ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	///////////
	
	//Restaurar Registro de Casa//
	public function restauracas($id_casa)
	{
		descripcion_casas::withTrashed()->where('id_casa',$id_casa)->restore();
		$proceso = "Restauracion del Registro de Casa";
		$mensaje = "Registro restaurado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicas($id_casa)
	{
		descripcion_casas::withTrashed()->where('id_casa',$id_casa)->forceDelete();
		$proceso = "Restauracion del Registro de Casa";
		$mensaje = "Registro restaurado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	//////////
	
	
	//Alta Producto de Almacen//
	 public function altalmacen()
    {
     	 
	 
	 $clavequesigue = alm_productos::withTrashed()->orderBy('id_producto','desc')
								->take(1)
								->get();
								if(count($clavequesigue)==0)
								{
									$idp =1;
								}
								else
								{
     $idp = $clavequesigue[0]->id_producto+1;
								}
     return view ("sistema.altalmacen")
	 ->with('idp',$idp);
	}
	////////
	
	//Guarda Producto de Almacen//
	public function guardalmacen(Request $request)
    {
		$id_producto = $request->id_producto;
        $producto =  $request->producto;
        $cantidad_minima = $request->cantidad_minima;
        $costo = $request->costo;
		$costo_promedio = $request->costo_promedio;
		$existencia_actual = $request->existencia_actual;
		//Validacion//
		 $this->validate($request,[
	     'id_producto'=>'required|numeric',
         'producto'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'cantidad_minima'=>'required|numeric',
		 'costo'=>['regex:/^[0-9]+[.][0-9]{2}$/'],
		 'costo_promedio'=>['regex:/^[0-9]+[.][0-9]{2}$/'],
         'existencia_actual'=>'required|numeric'
		 	     ]);
     
         $alm = new alm_productos;
			$alm->id_producto = $request->id_producto;
			$alm->producto = $request->producto;
			$alm->cantidad_minima =$request->cantidad_minima;
			$alm->costo= $request->costo;
			$alm->costo_promedio=$request->costo_promedio;
			$alm->existencia_actual=$request->existencia_actual;
			$alm->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		  
        
    }
	//////
	
	//Reporte P de Almacen//
	public function reportealmacen()
	{
	$alm_productos=alm_productos::withTrashed()->orderBy('id_producto','asc')
	          ->get();
	  return view('sistema.reportealmacen')
	  ->with('alm_productos',$alm_productos);                  
	}
	/////
	
	//Modfica Producto de Almacen//
	public function modificalm($id_producto)
	{
		$alm = alm_productos::withTrashed()->where('id_producto','=',$id_producto)
		                     ->get();
		return view ('sistema.modificalm')
		->with('alm',$alm[0]);
	}
	//////
	
	//Guarda Modificacion de Almacen//
	public function guardamodificalm(Request $request)
	{
		$id_producto = $request->id_producto;
        $producto =  $request->producto;
        $cantidad_minima = $request->cantidad_minima;
        $costo = $request->costo;
		$costo_promedio = $request->costo_promedio;
		$existencia_actual = $request->existencia_actual;
		//Validacion//
		 $this->validate($request,[
         'producto'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'cantidad_minima'=>'required|numeric',
		 'costo'=>['regex:/^[0-9]+[.][0-9]{2}$/'],
		 'costo_promedio'=>['regex:/^[0-9]+[.][0-9]{2}$/'],
         'existencia_actual'=>'required|numeric'
		 	     ]);
		    $alm = alm_productos::find($id_producto);
		    $alm->id_producto = $request->id_producto;
			$alm->producto = $request->producto;
			$alm->cantidad_minima =$request->cantidad_minima;
			$alm->costo= $request->costo;
			$alm->costo_promedio=$request->costo_promedio;
			$alm->existencia_actual=$request->existencia_actual;
			$alm->save();
			$proceso = "Modificacion de Producto de Almacen";
			$mensaje = "Registro modificado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		
	
	}
	//////
	
	//Inhabilita Regisro de Almacen//
	public function eliminalm($id_producto)
	{
		  alm_productos::find($id_producto)->delete();
		    $proceso = "Inhabilitar Producto";
			$mensaje = "El registro ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	/////
	
	//Restaurar Almacen de Prodtcutos//
	public function restauralm($id_producto)
	{
		alm_productos::withTrashed()->where('id_producto',$id_producto)->restore();
		$proceso = "Restauracion del Producto de Almacen";
		$mensaje = "Registro restaurado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicalm($id_producto)
	{
		alm_productos::withTrashed()->where('id_producto',$id_producto)->forceDelete();
		$proceso = "Eliminacion del registro de Prodtcuto de Almacen";
		$mensaje = "Registro eliminado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	//////////
	
	//Alta Entradas//
	public function altaent()
    {
		 
	 $clavequesigue = entradas::withTrashed()->orderBy('id_entrada','desc')
								->take(1)
								->get();
								if(count($clavequesigue)==0)
								{
									$ident =1;
								}
								else
								{
     $ident = $clavequesigue[0]->id_entrada+1;
								}
	 
	 $usuarios = usuarios::where('activo','=','SI')
	                      ->orderBy('nombre','asc')
						  ->get();
	 //return $carreras;
     return view ("sistema.altaent")
	        ->with('usuarios',$usuarios)
			->with('ident',$ident);
    }
	////
	//Guarda Entrada//
	 public function guardaent(Request $request)
    {
		$id_entrada = $request->id_entrada;
        $fecha_entrada =  $request->fecha_entrada;
        $proveedor = $request->proveedor;
        $folio_factura = $request->folio_factura;
        $fecha_factura = $request->fecha_factura;
        
		 $this->validate($request,[
	     'id_entrada'=>'required|numeric',
         'fecha_entrada'=>'required|date',
         'proveedor'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'folio_factura'=>['regex:/^[0-9]{6}$/'],
		 'fecha_factura'=>'required|date'
	     ]);
            $ent = new entradas;
			$ent->id_entrada = $request->id_entrada;
			$ent->fecha_entrada = $request->fecha_entrada;
			$ent->proveedor = $request->proveedor;
			$ent->folio_factura = $request->folio_factura;
			$ent->fecha_factura = $request->fecha_factura;
			$ent->id_usuario = $request->id_usuario;
			$ent->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
        
    }
	/////
	
	//Reporte de Entradas//
	    public function reportent()
	{
		$resultado=\DB::select("SELECT m.id_entrada,m.fecha_entrada,m.proveedor,
	    m.folio_factura,m.fecha_factura,c.nombre AS usuar,m.deleted_at
        FROM entradas AS m
        INNER JOIN usuarios AS c ON c.id_usuario =  m.id_usuario");
	/*$entradas=entradas::withTrashed()->orderBy('id_entrada','asc')
	          ->get();*/
	  return view('sistema.reportent')
	  ->with('entradas',$resultado);                  
	}
	////
	
	
	//Modifica entrada//
	public function modificaent($id_entrada)
	{
		$entradas = entradas::withTrashed()->where('id_entrada','=',$id_entrada)
		                     ->get();
		$id_usuario = $entradas[0]->id_usuario;
		$usuarios = usuarios::withTrashed()->where('id_usuario','=',$id_usuario)->get();
		
		$otrosusus = usuarios::withTrashed()->where('id_usuario','!=',$id_usuario)
		                 ->get();
		return view ('sistema.modificaent')
		->with('entradas',$entradas[0])
	    ->with('id_usuario',$id_usuario)
	    ->with('usuarios',$usuarios[0]->nombre)
		->with('otrosusus',$otrosusus);
	
	}
	/////
	//GuardaModificacion de entrada//
	public function guardamodificaent(Request $request)
	{
		$id_entrada = $request->id_entrada;
        $fecha_entrada =  $request->fecha_entrada;
        $proveedor = $request->proveedor;
        $folio_factura = $request->folio_factura;
        $fecha_factura = $request->fecha_factura;
		$this->validate($request,[
         'fecha_entrada'=>'required|date',
         'proveedor'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'folio_factura'=>['regex:/^[0-9]{6}$/'],
		 'fecha_factura'=>'required|date'
	     ]);
		    $ent = entradas::find($id_entrada);
		    $ent->id_entrada = $request->id_entrada;
			$ent->fecha_entrada = $request->fecha_entrada;
			$ent->proveedor = $request->proveedor;
			$ent->folio_factura = $request->folio_factura;
			$ent->fecha_factura = $request->fecha_factura;
			$ent->id_usuario = $request->id_usuario;
			$ent->save();
			$proceso = "Modificacion de la Entrada";
			$mensaje = "REgistro modificado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		
	}
	////
	
	//Elimina Entrada//
	public function eliminaent($id_entrada)
	{
		  entradas::find($id_entrada)->delete();
		    $proceso = "INHABILITAR ENTRADA";
			$mensaje = "EL REGISTRO DE ENTRADA ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	/////
	//Restaurar Entrada//
	public function restauraent($id_entrada)
	{
		entradas::withTrashed()->where('id_entrada',$id_entrada)->restore();
		$proceso = "Restauracion de Entrada";
		$mensaje = "Registro restaurado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicaent($id_entrada)
	{
		entradas::withTrashed()->where('id_entrada',$id_entrada)->forceDelete();
		$proceso = "Eliminacion de Entrada";
		$mensaje = "Registro eliminado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	//////////
	
	//Altas Salidas//
	public function altasal()
    {
		 
	 $clavequesigue = salidas::withTrashed()->orderBy('id_salida','desc')
								->take(1)
								->get();
								if(count($clavequesigue)==0)
								{
									$idsal =1;
								}
								else
								{
     $idsal = $clavequesigue[0]->id_salida+1;
								}
	 $usuarios = usuarios::where('activo','=','SI')
	                      ->orderBy('nombre','asc')
						  ->get();
     return view ("sistema.altasal")
	        ->with('usuarios',$usuarios)
			->with('idsal',$idsal);
    }
	///////
	//Guarda Salidas//
	public function guardasal(Request $request)
    {
		$id_salida = $request->id_salida;
        $fecha_salida =  $request->fecha_salida;
        $responsable = $request->responsable;
        
		 $this->validate($request,[
	     'id_salida'=>'required|numeric',
		 'fecha_salida'=>'required|date',
		 'responsable'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
	     ]);
            $sal = new salidas;
			$sal->id_salida = $request->id_salida;
			$sal->fecha_salida = $request->fecha_salida;
			$sal->responsable = $request->responsable;
			$sal->id_usuario = $request->id_usuario;
			$sal->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
        }
	//////
	//Reporte Salidas//
	public function reportesal()
	{
	$salidas=salidas::withTrashed()->orderBy('id_salida','asc')
	          ->get();
	  return view('sistema.reportesal')
	  ->with('salidas',$salidas);                  
	}
	///////
	//Modifica Salidas//
	public function modificasal($id_salida)
	{
		$salidas = salidas::withTrashed()->where('id_salida','=',$id_salida)
		                     ->get();
		$id_usuario = $salidas[0]->id_usuario;
		$usuarios = usuarios::withTrashed()->where('id_usuario','=',$id_usuario)->get();
		
		$otrosusus = usuarios::withTrashed()->where('id_usuario','!=',$id_usuario)
		                 ->get();
		return view ('sistema.modificasal')
		->with('salidas',$salidas[0])
	    ->with('id_usuario',$id_usuario)
	    ->with('usuarios',$usuarios[0]->nombre)
		->with('otrosusus',$otrosusus);
	}
	////////
	//Guarda Modificacion de Salidas//
	public function guardamodificasal(Request $request)
	{
		$id_salida = $request->id_salida;
        $fecha_salida =  $request->fecha_salida;
        $responsable = $request->responsable;
		$this->validate($request,[
         'fecha_salida'=>'required|date',
         'responsable'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/']
	     ]);
		    $sal = salidas::find($id_salida);
		    $sal->id_salida = $request->id_salida;
			$sal->fecha_salida = $request->fecha_salida;
			$sal->responsable = $request->responsable;
			$sal->id_usuario = $request->id_usuario;
			$sal->save();
			$proceso = "Modificacion de la SALIDA";
			$mensaje = "REgistro modificado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		}
	///////
	//Inhabilitar Salidas//
	public function eliminasal($id_salida)
	{
		  salidas::find($id_salida)->delete();
		    $proceso = "Inhabilitar SALIDA";
			$mensaje = "EL REGISTRO DE SALIDA ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	//////
	
	//Restaurar Entrada//
	public function restaurasal($id_salida)
	{
		salidas::withTrashed()->where('id_salida',$id_salida)->restore();
		$proceso = "Restauracion de Salida";
		$mensaje = "Registro restaurado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicasal($id_salida)
	{
		salidas::withTrashed()->where('id_salida',$id_salida)->forceDelete();
		$proceso = "Eliminación de Salida";
		$mensaje = "Registro eliminado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	//////////
	
	//Alta usuario//
	public function altausuarios()
    {
		 
	 $clavequesigue = usuarios::withTrashed()->orderBy('id_usuario','desc')
								->take(1)
								->get();
								if(count($clavequesigue)==0)
								{
									$idus =1;
								}
								else
								{
     $idus = $clavequesigue[0]->id_usuario+1;
								}
     return view ("sistema.altausuarios")
			->with('idus',$idus);
    }
	////
	
	//Guarda Usuario//
	public function guardausuarios(Request $request)
    {
		$id_usuario = $request->id_usuario;
        $nombre_usuario =  $request->nombre_usuario;
        $nombre = $request->nombre;
        $activo = $request->activo;
		$reporte = $request->reporte;
		$archivo = $request->archivo;

        
		 $this->validate($request,[
	     'id_usuario'=>'required|numeric',
         'nombre_usuario'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'reporte'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
		 'archivo'=>'image|mimes:jpeg,png,gif,jpg'
	     ]);
		 ///Validacion Archivo///
     $file = $request->file('archivo');
	 if($file!="")
	 {	 
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
     {
	 $img2= 'sin_foto.png';
	 }
	 ///////
            $us = new usuarios;
			$us->id_usuario = $request->id_usuario;
			$us->nombre_usuario = $request->nombre_usuario;
			$us->nombre =$request->nombre;
			$us->activo= $request->activo;
			$us->reporte= $request->reporte;
			$us->archivo = $img2;
			$us->save();
			$proceso = "Excelente!!";
			$mensaje = "Registro guardado correctamente";
		    return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		  
        
    }
	//////
	
    //Reporte de Usuario//
	public function reporteus()
	{
	$usuarios=usuarios::withTrashed()->orderBy('id_usuario','asc')
	          ->get();
	  return view('sistema.reporteus')
	  ->with('usuarios',$usuarios);                  
	}
	///////////
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}///No eliminar///






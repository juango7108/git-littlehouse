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
//use App\pedido_detalles;
//use App\entradas_detalles;
//use App\salidas_detalles;
//////
//////

///Clase lttlehouse///
class littlehouse extends Controller
{
    
	 public function home()
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
   //alta cliente//
    public function altacliente()
    {
     	 
	 
	 $clavequesigue = clientes::orderBy('id_cliente','desc')
								->take(1)
								->get();
     $idcs = $clavequesigue[0]->id_cliente+1;
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
			$proceso = "Alta Cliente";
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
		$cl = clientes::where('id_cliente','=',$id_cliente)
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
		$proceso = "Restauracion del Cliente";
		$mensaje = "Registro restaurado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
		
	}
	//////////
	//Alta Pedido//
	 public function altapedidos()
    {
     	 	 $clavequesigue = pedidos::orderBy('id_pedido','desc')
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
			$proceso2 = "Alta Pedido";
			$mensaje2 = "Registro guardado correctamente";
		    return view ('sistema.mensaje2')
			->with('proceso2',$proceso2)
			->with('mensaje2',$mensaje2);
		  
        
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
			$proceso2 = "Modifica registro de los pedidos";
			$mensaje2 = "Registro modificado correctamente";
		    return view ('sistema.mensaje2')
			->with('proceso2',$proceso2)
			->with('mensaje2',$mensaje2);
		 
		
 echo "Listo para modificar";
	}
	//////
	
	///Inhabilita Pedidos///
	public function eliminaped($id_pedido)
	{
		  pedidos::find($id_pedido)->delete();
		    $proceso2 = "INHABILITAR Pedidos";
			$mensaje2 = "El pedido ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje2')
			->with('proceso2',$proceso2)
			->with('mensaje2',$mensaje2);
	}
	///////
	//Restaurar Pedido//
	public function restauraped($id_pedido)
	{
		pedidos::withTrashed()->where('id_pedido',$id_pedido)->restore();
		$proceso2 = "Restauracion del Pedido";
		$mensaje2 = "Registro restaurado correctamente";
		return view('sistema.mensaje2')
		->with('proceso2',$proceso2)
		->with('mensaje2',$mensaje2);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicaped($id_pedido)
	{
		pedidos::withTrashed()->where('id_pedido',$id_pedido)->forceDelete();
		$proceso2 = "Restauracion del Pedido";
		$mensaje2 = "Registro restaurado correctamente";
		return view('sistema.mensaje2')
		->with('proceso2',$proceso2)
		->with('mensaje2',$mensaje2);
		
	}
	//////////
	
	
	//alta casa//
    public function altacasa()
    {
	 $clavequesigue = descripcion_casas::orderBy('id_casa','desc')
								->take(1)
								->get();
     $idcasa = $clavequesigue[0]->id_casa+1;
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
         'dimenciones'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
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
			$proceso1 = "Alta Casas";
			$mensaje1 = "Registro guardado correctamente";
		    return view ('sistema.mensaje1')
			->with('proceso1',$proceso1)
			->with('mensaje1',$mensaje1);
		  
        
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
		$casas = descripcion_casas::where('id_casa','=',$id_casa)
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
         'dimenciones'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
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
			$proceso1 = "Modifica Registro de Casa";
			$mensaje1 = "REgistro ha sido modificado correctamente";
		    return view ('sistema.mensaje1')
			->with('proceso1',$proceso1)
			->with('mensaje1',$mensaje1);
	 
	 
	 
	 
	 
		 echo "Listo para modificar";
	}
	
	//////////////
	
	
	//elimina casas
	public function eliminacas($id_casa)
	{
		  descripcion_casas::find($id_casa)->delete();
		    $proceso1 = "Elimina el Registro de Casas";
			$mensaje1 = "El registro ha sido borrado Correctamente";
			return view ('sistema.mensaje1')
			->with('proceso1',$proceso1)
			->with('mensaje1',$mensaje1);
	}
	///////////
	
	//Restaurar Registro de Casa//
	public function restauracas($id_casa)
	{
		descripcion_casas::withTrashed()->where('id_casa',$id_casa)->restore();
		$proceso1 = "Restauracion del Registro de Casa";
		$mensaje1 = "Registro restaurado correctamente";
		return view('sistema.mensaje1')
		->with('proceso1',$proceso1)
		->with('mensaje1',$mensaje1);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicas($id_casa)
	{
		descripcion_casas::withTrashed()->where('id_casa',$id_casa)->forceDelete();
		$proceso1 = "Restauracion del Registro de Casa";
		$mensaje1 = "Registro restaurado correctamente";
		return view('sistema.mensaje1')
		->with('proceso1',$proceso1)
		->with('mensaje1',$mensaje1);
		
	}
	//////////
	
	
	//Alta Producto de Almacen//
	 public function altalmacen()
    {
     	 
	 
	 $clavequesigue = alm_productos::orderBy('id_producto','desc')
								->take(1)
								->get();
     $idp = $clavequesigue[0]->id_producto+1;
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
			$proceso3 = "Alta Producto de Almacen";
			$mensaje3 = "Registro guardado correctamente";
		    return view ('sistema.mensaje3')
			->with('proceso3',$proceso3)
			->with('mensaje3',$mensaje3);
		  
        
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
		$alm = alm_productos::where('id_producto','=',$id_producto)
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
			$proceso3 = "Modificacion de Producto de Almacen";
			$mensaje3 = "Registro modificado correctamente";
		    return view ('sistema.mensaje3')
			->with('proceso3',$proceso3)
			->with('mensaje3',$mensaje3);
		
	
	}
	//////
	
	//Inhabilita Regisro de Almacen//
	public function eliminalm($id_producto)
	{
		  alm_productos::find($id_producto)->delete();
		    $proceso3 = "Inhabilitar Prodtcuto";
			$mensaje3 = "El registro ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje3')
			->with('proceso3',$proceso3)
			->with('mensaje3',$mensaje3);
	}
	/////
	
	//Restaurar Almacen de Prodtcutos//
	public function restauralm($id_producto)
	{
		alm_productos::withTrashed()->where('id_producto',$id_producto)->restore();
		$proceso3 = "Restauracion del Producto de Almacen";
		$mensaje3 = "Registro restaurado correctamente";
		return view('sistema.mensaje3')
		->with('proceso3',$proceso3)
		->with('mensaje3',$mensaje3);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicalm($id_producto)
	{
		alm_productos::withTrashed()->where('id_producto',$id_producto)->forceDelete();
		$proceso3 = "Restauracion del Prodtcuto de Almacen";
		$mensaje3 = "Registro restaurado correctamente";
		return view('sistema.mensaje3')
		->with('proceso3',$proceso3)
		->with('mensaje3',$mensaje3);
		
	}
	//////////
	
	//Alta Entradas//
	public function altaent()
    {
		 
	 $clavequesigue = entradas::orderBy('id_entrada','desc')
								->take(1)
								->get();
     $ident = $clavequesigue[0]->id_entrada+1;
	 
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
			$proceso4 = "ALTA DE Entrada";
			$mensaje4 = "REgistro guardado correctamente";
		    return view ('sistema.mensaje4')
			->with('proceso4',$proceso4)
			->with('mensaje4',$mensaje4);
        
    }
	/////
	
	//Reporte de Entradas//
	    public function reportent()
	{
	$entradas=entradas::withTrashed()->orderBy('id_entrada','asc')
	          ->get();
	  return view('sistema.reportent')
	  ->with('entradas',$entradas);                  
	}
	////
	
	
	//Modifica entrada//
	public function modificaent($id_entrada)
	{
		$entradas = entradas::where('id_entrada','=',$id_entrada)
		                     ->get();
		$id_usuario = $entradas[0]->id_usuario;
		$usuarios = usuarios::where('id_usuario','=',$id_usuario)->get();
		
		$otrosusus = usuarios::where('id_usuario','!=',$id_usuario)
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
			$proceso4 = "Modificacion de la Entrada";
			$mensaje4 = "REgistro modificado correctamente";
		    return view ('sistema.mensaje4')
			->with('proceso4',$proceso4)
			->with('mensaje4',$mensaje4);
		
	}
	////
	
	//Elimina Entrada//
	public function eliminaent($id_entrada)
	{
		  entradas::find($id_entrada)->delete();
		    $proceso4 = "INHABILITAR ENTRADA";
			$mensaje4 = "EL REGISTRO DE ENTRADA ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje4')
			->with('proceso4',$proceso4)
			->with('mensaje4',$mensaje4);
	}
	/////
	//Restaurar Entrada//
	public function restauraent($id_entrada)
	{
		entradas::withTrashed()->where('id_entrada',$id_entrada)->restore();
		$proceso4 = "Restauracion de Entrada";
		$mensaje4 = "Registro restaurado correctamente";
		return view('sistema.mensaje4')
		->with('proceso4',$proceso4)
		->with('mensaje4',$mensaje4);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicaent($id_entrada)
	{
		entradas::withTrashed()->where('id_entrada',$id_entrada)->forceDelete();
		$proceso4 = "Restauracion de Entrada";
		$mensaje4 = "Registro eliminado correctamente";
		return view('sistema.mensaje4')
		->with('proceso4',$proceso4)
		->with('mensaje4',$mensaje4);
		
	}
	//////////
	
	//Altas Salidas//
	public function altasal()
    {
		 
	 $clavequesigue = salidas::orderBy('id_salida','desc')
								->take(1)
								->get();
     $idsal = $clavequesigue[0]->id_salida+1;
	 
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
			$proceso5 = "ALTA DE SALIDAS";
			$mensaje5 = "REgistro guardado correctamente";
		    return view ('sistema.mensaje5')
			->with('proceso5',$proceso5)
			->with('mensaje5',$mensaje5);
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
		$salidas = salidas::where('id_salida','=',$id_salida)
		                     ->get();
		$id_usuario = $salidas[0]->id_usuario;
		$usuarios = usuarios::where('id_usuario','=',$id_usuario)->get();
		
		$otrosusus = usuarios::where('id_usuario','!=',$id_usuario)
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
			$proceso5 = "Modificacion de la SALIDA";
			$mensaje5 = "REgistro modificado correctamente";
		    return view ('sistema.mensaje5')
			->with('proceso5',$proceso5)
			->with('mensaje5',$mensaje5);
		}
	///////
	//Inhabilitar Salidas//
	public function eliminasal($id_salida)
	{
		  salidas::find($id_salida)->delete();
		    $proceso5 = "Inhabilitar SALIDA";
			$mensaje5 = "EL REGISTRO DE SALIDA ha sido inhabilitado Correctamente";
			return view ('sistema.mensaje5')
			->with('proceso5',$proceso5)
			->with('mensaje5',$mensaje5);
	}
	//////
	
	//Restaurar Entrada//
	public function restaurasal($id_salida)
	{
		salidas::withTrashed()->where('id_salida',$id_salida)->restore();
		$proceso5 = "Restauracion de Salida";
		$mensaje5 = "Registro restaurado correctamente";
		return view('sistema.mensaje5')
		->with('proceso5',$proceso5)
		->with('mensaje5',$mensaje5);
		
	}
	/////////
	
	//Eliminacion Fisica//
	public function fisicasal($id_salida)
	{
		salidas::withTrashed()->where('id_salida',$id_salida)->forceDelete();
		$proceso5 = "Restauracion de Salida";
		$mensaje5 = "Registro eliminado correctamente";
		return view('sistema.mensaje5')
		->with('proceso5',$proceso5)
		->with('mensaje5',$mensaje5);
		
	}
	//////////
	
	
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}///No eliminar///






<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\logins;
use Session;

class littlehouse2 extends Controller
{
	//Alta Login//
	/*public altalogin()
	{
		 $clavequesigue= logins::WithTrased()->orderBy('id_login','desc')
		 ->take(1)
		 ->get();
		 if(count($clavequesigue)==0)
								{
									$idlog =1;
								}
								else
								{
						$idlog = $clavequesigue[0]->id_login+1;
								}
								
								return view('sistema.altalogin')
								->with('idlog',$idlog);
								}
								//////
								
	//Guarda Login//
	
	public function guardalogin(Request $request)
	{
		
	$id_login = $request->id_login;
	$nombre_usuario = $request->nombre_usuario;
	$correo = $request->correo;
	$password = $request->password;
	$usuario = $request->usuario;
	$tipo = $request->tipo;
	//Validacion//
	$this->validate($request,[
	'id_login'=>'required|numeric',
	'nombre_usuario'=>['regex:/^[A-Z][A-Z,a-z,ñ]+[0-9]+$/'],
	'correo'=>'required|email',
	'password'=>'required|alpha_numeric',
	'usuario'=>['regex:/^[A-Z][A-Z,a-z,ñ,á,é,í,ó,ú]+$/'],
	'tipo'=>['regex:/^[A-Z][A-Z,a-z,ñ,á,é,í,ó,ú]+$/'],
	'archivo'=>'image|mimes:jpeg,png,gif,jpg'
	]);
	//Validacion archivo//
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
	 $img2= 'user.png';
	 }
	 ///
	 $lg = new logins;
	 $lg->id_login = $request->id_login;
	  $lg->nombre_usuario = $request->nombre_usuario;
	   $lg->correo = $request->correo;
	    $lg->password = $request->password;
		$lg->usuario = $request->usuario;
		 $lg->tipo = $request->tipo;
		  $lg->archivo = $img2;
		  $lg->save();
		  $proceso = "Excelente";
		  $mensaje = "Registrado correctamente";
		  return view('sistema.mensaje')
		  ->with('proceso',$proceso)
		  ->with('mensaje',$mensaje);
	 }
	/////
	
	
	//Reporte Login//
	public function reportelogin()
	{
	$logins = $logins::WithTrased()->orderBy('id_login','asc')
	->get();
	return view('sistema.reportelogin')
->with('logins',$logins);	
		}
	///
	
	//modificar login//
	public function modificalogin($id_login)
	{
		$lg = logins::WithTrased()->where('id_login','=',$id_login)
		->get();
		
		return view('sistema.reportelogin')
		->with('lg'$log[0]);
		}
	///////
	
	
	///Guarda Modificacion///
	public function guardamodlogin(Request $request)
	{
		
		
		
		
		
		
}
	
	
	
	
	///////
								
								
								
		*/						
	public function login()
	{
		return view('sistema.login');
}
	public function iniciasesion(Request $request)
	{
		$usuario = $request->usuario;
		$passw = $request->password;
		$consulta = logins::withTrashed()->where('usuario','=',$usuario)
		->where('password','=',$passw)
		->get();
		if(count($consulta)==0)
		{
			Session::flash('error', 'El usuario no existe o la contraseña no es correcta');
			return redirect()->route('login');
		}
		else
		{
			$desactivado = $consulta[0]->deleted_at;
			if($desactivado!="")
			{
				Session::flash('error', 'El usuario esta deshabilitado');
			return redirect()->route('login');
			}
			else
			{
				
			Session::put('sesionname',$consulta[0]->usuario);
			Session::put('sesionlog',$consulta[0]->id_login);
			Session::put('sesiontipo',$consulta[0]->tipo);
			
			$sname = Session::get('sesionname');
			$slog = Session::get('sesionlog');
			$stipo = Session::get('sesiontipo');
			//echo $sname . ' '. $slog . ' '. $stipo;
			return redirect()->route('index');
		}
		}
		//return $consulta;
}
    public function index()
    {
		if(Session::get('sesionlog')!="")
        return view("sistema.index");
	else
	{
		Session::flash('error', 'Favor de loguearse antes de continuar');
			return redirect()->route('login');
		
    }
}
public function cerrarsesion()
{
	Session::forget('sesionname');
	Session::forget('sesionlog');
	Session::forget('sesiontipo');
	Session::flush();
	Session::flash('error', 'Session cerrada correctamente');
	return redirect()->route('login');
	}





}

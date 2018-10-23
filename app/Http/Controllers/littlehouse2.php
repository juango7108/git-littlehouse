<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\logins;
use Session;

class littlehouse2 extends Controller
{
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
			return redirect()->route('home');
		}
		}
		//return $consulta;
}
    public function home()
    {
		if(Session::get('sesionlog')!="")
        return view("sistema.home");
	else
	{
		Session::flash('error', 'Favor de loguearse antes de continuar');
			return redirect()->route('login');
		
    }
}





}

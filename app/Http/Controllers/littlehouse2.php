<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class littlehouse2 extends Controller
{
	public function login()
	{
		return view('sistema.iniciar');
}
	public function iniciasesion(Request $request)
	{
		$usuario = $request->usuario;
		$passw = $request->password;
		
		echo "$usuario $passw";
}
    
}

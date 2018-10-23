@extends('sistema.tablas')
@section('pie')
@section('tabla')
<h1>Reporte de usuario</h1>
<table class="table table-condensed">
<th colspan="7"><center>Reporte de Usuarios</center></th>
<tr>
<td>Clave</td><td>Nombre Usuario</td>
<td>Nombre</td><td>Activo</td>
<td>Reporte</td><td>Archivo</td>
</tr>
@foreach($usuarios as $us)
<tr>
<td>{{$us->id_usuario}}</td>
<td>{{$us->nombre_usuario}}</td>
<td>{{$us->nombre}}</td>
<td>{{$us->activo}}</td>
<td>{{$us->reporte}}</td>
<td><img src = "{{asset('archivos/'.$us->archivo)}}"
        height =50 width=50>
    </td>
	
	@if($us->deleted_at=="")
	<td>
	<a class="glyphicon glyphicon-off" href="{{URL::action('littlehouse@eliminaus',['id_us'=>$us->id_us])}}"> 
	Inhabilitar   
</a>
   <a class="glyphicon glyphicon-edit" href="{{URL::action('littlehouse@modificaus',['id_us'=>$us->id_us])}}"> 
   Modificar</a>
   </td>
   @else
	   <td>
	<a class="glyphicon glyphicon-wrench" href="{{URL::action('littlehouse@restauraus',['id_us'=>$us->id_us])}}"> 
	
Restaurar   
</a>
   <a class="glyphicon glyphicon-trash" href="{{URL::action('littlehouse@fisicaus',['id_us'=>$us->id_us])}}"> 
   Eliminar</a>
   </td>
   @endif
   </tr>
@endforeach
</table>
<br>
<br>
<br>
<br>
<br>
<br>  
<br>
@stop
@stop
@section('pie')
@stop




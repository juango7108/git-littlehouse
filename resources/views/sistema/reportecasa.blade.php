@extends('sistema.tablas')
@section('pie')
@section('tabla')
<h1>Reporte de Casas</h1>
<table class="table table-condensed">
<th colspan="6"><center>Reporte de Casas</center></th>
<tr>
<td>Clave</td><td>Dimenciones</td>
<td>Color</td><td>Descripcion</td>
<td>Archivo</td><td>Operaciones</td>
</tr>
@foreach($descripcion_casas as $casa)
<tr>
<td>{{$casa->id_casa}}</td>
<td>{{$casa->dimenciones}}</td>
<td>{{$casa->color}}</td>
<td>{{$casa->descripcion}}</td>
<td><img src = "{{asset('archivos/'.$casa->archivo)}}"
        height =50 width=50>
    </td>
	
	@if($casa->deleted_at=="")
	<td>
	<a class="glyphicon glyphicon-off" href="{{URL::action('littlehouse@eliminacas',['id_casa'=>$casa->id_casa])}}"> 
	Inhabilitar   
</a>
   <a class="glyphicon glyphicon-edit" href="{{URL::action('littlehouse@modificas',['id_casa'=>$casa->id_casa])}}"> 
   Modificar</a>
   </td>
   @else
	   <td>
	<a class="glyphicon glyphicon-wrench" href="{{URL::action('littlehouse@restauracas',['id_casa'=>$casa->id_casa])}}"> 
	
Restaurar   
</a>
   <a class="glyphicon glyphicon-trash" href="{{URL::action('littlehouse@fisicas',['id_casa'=>$casa->id_casa])}}"> 
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




@extends('sistema.tablas')
@section('pie')
@section('tabla')
<h1>Reporte de Salidas</h1>
<table class="table table-condensed">
<th colspan="5"><center>Reporte de Salidas</center></th>
<tr>
<td>Clave</td><td>Fecha de Salida</td>
<td>Responsable</td><td>ID de Usuario</td></td><td>Operaciones</td>
</tr>
@foreach($salidas as $sal)
<tr>
<td>{{$sal->id_salida}}</td>
<td>{{$sal->fecha_salida}}</td>
<td>{{$sal->responsable}}</td>
<td>{{$sal->id_usuario}}</td>
@if($sal->deleted_at=="")
	<td>
	<a class="glyphicon glyphicon-off" href="{{URL::action('littlehouse@eliminasal',['id_salida'=>$sal->id_salida])}}"> 
	
Inhabilitar   
</a>
   <a class="glyphicon glyphicon-edit" href="{{URL::action('littlehouse@modificasal',['id_salida'=>$sal->id_salida])}}"> 
   Modificar</a>
   </td>
    @else
		<td>
	<a class="glyphicon glyphicon-wrench"  href="{{URL::action('littlehouse@restaurasal',['id_salida'=>$sal->id_salida])}}"> 
	Restaurar  
</a>
   <a class="glyphicon glyphicon-trash" href="{{URL::action('littlehouse@fisicasal',['id_salida'=>$sal->id_salida])}}"> 
   Eliminar</a>
    @endif
</td>
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
<br>
<br>
<br>
@stop
@stop
@section('pie')
@stop




@extends('sistema.tablas')
@section('pie')
@section('tabla')
<h1>Reporte de Salidas</h1>
<table border= 1>
<th colspan="5"><center>Reporte de Salidas</center></th>
<tr>
<td>ID_Slida</td><td>Fecha de Salida</td>
<td>Responsable</td><td>ID de Usuario</td></td><td>Operaciones</td>
</tr>
@foreach($salidas as $sal)
<tr>
<td>{{$sal->id_salida}}</td>
<td>{{$sal->fecha_salida}}</td>
<td>{{$sal->responsable}}</td>
<td>{{$sal->id_usuario}}</td>
	<td>
	<a href="{{URL::action('littlehouse@eliminasal',['id_salida'=>$sal->id_salida])}}"> 
	
Eliminar   
</a>
   <a href="{{URL::action('littlehouse@modificasal',['id_salida'=>$sal->id_salida])}}"> 
   Modificar</a>
   </td>
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




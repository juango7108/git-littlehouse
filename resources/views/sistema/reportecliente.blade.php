@extends('sistema.tablas')
@section('pie')
@section('tabla')
<h1>Reporte de Clientes</h1>
<br>
<table class="table table-condensed">
<th colspan="9"><center>Reporte de Clientes</center></th>
<tr>
<td>Clave</td><td>Nombre(s)</td>
<td>Apellidos</td><td>Dirección</td>
<td>Codigo Postal</td><td>Telefono</td>
<td>Correo</td><td>Activo</td><td>Operaciones</td>
</tr>
@foreach($clientes as $cl)
<tr>
<td>{{$cl->id_cliente}}</td>
<td>{{$cl->nombre}}</td>
<td>{{$cl->apellidos}}</td>
<td>{{$cl->direccion}}</td>
<td>{{$cl->cp}}</td>
<td>{{$cl->tel}}</td>
<td>{{$cl->correo}}</td>
<td>{{$cl->activo}}</td>
<td>
@if($cl->deleted_at=="")
<a class="glyphicon glyphicon-off" href="{{URL::action('littlehouse@eliminacli',['id_casa'=>$cl->id_cliente])}}"> 
   Inhabilitar   
   </a>
   <a class="glyphicon glyphicon-edit" href="{{URL::action('littlehouse@modificl',['id_casa'=>$cl->id_cliente])}}"> 
   Modificar</a>
   @else
	   <a class="glyphicon glyphicon-wrench" href="{{URL::action('littlehouse@restauracl',['id_casa'=>$cl->id_cliente])}}"> 
   Restaurar
   </a>
   <a class="glyphicon glyphicon-trash" href="{{URL::action('littlehouse@fisicacl',['id_casa'=>$cl->id_cliente])}}"> 
  Eliminar
   </a>
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
@stop
@stop
@section('pie')
@stop
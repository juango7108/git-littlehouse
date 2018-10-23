@extends('sistema.tablas')
@section('pie')
@section('tabla')
<h1>Reporte de Pedidos</h1>
<table class="table table-condensed">
<th colspan="7"><center>Reporte de Pedidos</center></th>
<tr>
<td>Clave</td><td>Dirección</td>
<td>Fecha de Pedido</td><td>Fecha de Entrega</td>
<td>Id del Cliente</td><td>Id del Usuario</td><td>Operaciones</td>
</tr>
@foreach($pedidos as $pedid)
<tr>
<td>{{$pedid->id_pedido}}</td>
<td>{{$pedid->direccion}}</td>
<td>{{$pedid->fecha_pedido}}</td>
<td>{{$pedid->fecha_entrega}}</td>
<td>{{$pedid->id_cliente}}</td>
<td>{{$pedid->id_usuario}}</td>
@if($pedid->deleted_at=="")
	<td>
	<a class="glyphicon glyphicon-off" href="{{URL::action('littlehouse@eliminaped',['id_pedido'=>$pedid->id_pedido])}}"> 
	Inhabilitar   
</a>
   <a class="glyphicon glyphicon-edit" href="{{URL::action('littlehouse@modificaped',['id_pedido'=>$pedid->id_pedido])}}"> 
   Modificar</a>
   </td>
   @else
	   <td>
   <a class="glyphicon glyphicon-wrench" href="{{URL::action('littlehouse@restauraped',['id_pedido'=>$pedid->id_pedido])}}"> 
   Restaurar
   </a>
   <a class="glyphicon glyphicon-trash" href="{{URL::action('littlehouse@fisicaped',['id_pedido'=>$pedid->id_pedido])}}"> 
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
<br>
<br>
@stop
@stop
@section('pie')
@stop





@extends('sistema.tablas')
@section('pie')
@section('tabla')
<h1>Reporte de Entradas</h1>
<table class="table table-condensed">
<th colspan="7"><center>Reporte de Entradas</center></th>
<tr>
<td>Clave</td><td>Fecha de Entrada</td>
<td>Proveedor</td><td>Folio Factura</td>
<td>Fecha de la Factura</td><td>Nombre de Usuario</td><td>Operaciones</td>
</tr>
@foreach($entradas as $ent)
<tr>
<td>{{$ent->id_entrada}}</td>
<td>{{$ent->fecha_entrada}}</td>
<td>{{$ent->proveedor}}</td>
<td>{{$ent->folio_factura}}</td>
<td>{{$ent->fecha_factura}}</td>
<td>{{$ent->usuar}}</td>
@if($ent->deleted_at=="")
	<td>
	<a class="glyphicon glyphicon-off" href="{{URL::action('littlehouse@eliminaent',['id_entrada'=>$ent->id_entrada])}}"> 
	Inhabilitar  
    </a>
    <a class="glyphicon glyphicon-edit" href="{{URL::action('littlehouse@modificaent',['id_entrada'=>$ent->id_entrada])}}"> 
    Modificar</a>
    </td>
	 @else
		 <td>
	<a class="glyphicon glyphicon-wrench" href="{{URL::action('littlehouse@restauraent',['id_entrada'=>$ent->id_entrada])}}"> 
	Restaurar  
    </a>
    <a class="glyphicon glyphicon-trash" href="{{URL::action('littlehouse@fisicaent',['id_entrada'=>$ent->id_entrada])}}"> 
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





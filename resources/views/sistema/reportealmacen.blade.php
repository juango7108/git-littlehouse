<html>
<head>
<link href="css/table.css" rel="stylesheet">
</head>
<h1>Reporte de Productos de Almacen</h1>
<table border= 1>
<th colspan="7"><center>Reporte de Productos</center></th>
<tr>
<td>ID_Producto</td><td>Productos</td>
<td>Cantidad minima de Producto</td><td>Costo de Producto</td>
<td>Costo promedio</td><td>Existencia actual de Producto</td><td>Operaciones</td>
</tr>
@foreach($alm_productos as $alm)
<tr>
<td>{{$alm->id_producto}}</td>
<td>{{$alm->producto}}</td>
<td>{{$alm->cantidad_minima}}</td>
<td>{{$alm->costo}}</td>
<td>{{$alm->costo_promedio}}</td>
<td>{{$alm->existencia_actual}}</td>
@if($alm->deleted_at=="")
	<td>
	<a href="{{URL::action('littlehouse@eliminalm',['id_producto'=>$alm->id_producto])}}"> 
	Inhabilitar  
    </a>
    <a href="{{URL::action('littlehouse@modificalm',['id_producto'=>$alm->id_producto])}}"> 
    Modificar</a>
	</td>
	@else
		<td>
   <a href="{{URL::action('littlehouse@restauralm',['id_producto'=>$alm->id_producto])}}"> 
   Restaurar
   </a>
   <a href="{{URL::action('littlehouse@fisicalm',['id_producto'=>$alm->id_producto])}}"> 
   Eliminar
   </a>
	   @endif
	   </td>
	</tr>
@endforeach
</table>
</body>
</html>





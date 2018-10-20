<html>
<head>
<link href="css/table.css" rel="stylesheet">
</head>
<h1>Reporte de Entradas</h1>
<table border= 1>
<th colspan="7"><center>Reporte de Entradas</center></th>
<tr>
<td>ID_Entrada</td><td>Fecha de Entrada</td>
<td>Proveedor</td><td>Folio Factura</td>
<td>Fecha de la Factura</td><td>Id del Usuario</td><td>Operaciones</td>
</tr>
@foreach($entradas as $ent)
<tr>
<td>{{$ent->id_entrada}}</td>
<td>{{$ent->fecha_entrada}}</td>
<td>{{$ent->proveedor}}</td>
<td>{{$ent->folio_factura}}</td>
<td>{{$ent->fecha_factura}}</td>
<td>{{$ent->id_usuario}}</td>
	<td>
	<a href="{{URL::action('littlehouse@eliminaent',['id_entrada'=>$ent->id_entrada])}}"> 
	
Eliminar   
</a>
   <a href="{{URL::action('littlehouse@modificaent',['id_entrada'=>$ent->id_entrada])}}"> 
   Modificar</a>
   </td>
</td>
</tr>
@endforeach
</table>
</body>
</html>





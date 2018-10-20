<html>
<head>
<link href="css/table.css" rel="stylesheet">
</head>
<h1>Reporte de Casas</h1>
<table border= 1>
<th colspan="6"><center>Reporte de Casas</center></th>
<tr>
<td>ID_Casa</td><td>Dimenciones</td>
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
	<a href="{{URL::action('littlehouse@eliminacas',['id_casa'=>$casa->id_casa])}}"> 
	
Inhabilitar   
</a>
   <a href="{{URL::action('littlehouse@modificas',['id_casa'=>$casa->id_casa])}}"> 
   Modificar</a>
   </td>
   @else
	   <td>
	<a href="{{URL::action('littlehouse@restauracas',['id_casa'=>$casa->id_casa])}}"> 
	
Restaurar   
</a>
   <a href="{{URL::action('littlehouse@fisicas',['id_casa'=>$casa->id_casa])}}"> 
   Eliminar</a>
   </td>
   @endif
   
   

</tr>
@endforeach
</table>
</body>
</html>





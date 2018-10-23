@extends('sistema.altas')

@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardausuarios')}}" method = "POST" enctype='multipart/form-data'>

<table>
<th>Regsitrar Usuario</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_usuario')) 
<i> {{ $errors->first('id_usuario') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id_usuario' value="{{($idus)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('nombre_usuario')) 
<i> {{ $errors->first('nombre_usuario') }} </i> 
@endif	
nombre_usuario </td><td><input type = 'text' name  ='nombre_usuario' value="{{old('nombre_usuario')}}" placeholder="Usuario login">
</td></tr>

<tr><td>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	
nombre(s)</td><td><input type = 'text' name  ='nombre' value="{{old('nombre')}}" placeholder="Nombre y Apellidos">
</td></tr>
<tr><td>
Activo<input type = 'radio' name = 'activo' value = 'SI' checked>SI
<input type = 'radio' name = 'activo' value = 'NO'>NO
</td></tr>
<tr><td>
@if($errors->first('reporte')) 
<i> {{ $errors->first('reporte') }} </i> 
@endif	
Reporte</td><td><input type  ='text' name ='reporte' value="{{old('reporte')}}" placeholder="Descripcion">
</td></tr>
<tr><td>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	
Seleccione foto</td><td><input type='file' name ='archivo'>
</td></tr>

<tr><td><input class="btn btn-success" type = 'submit' class="form-control" value = 'Guardar'></td>
<td><input class="btn btn-danger" type = 'reset' class="form-control" value = 'Cancelar'></td></tr>
</form>
</table>
<br>
<br>
<br>
<br>
@stop
@stop
@section('pie')
@stop











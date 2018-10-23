@extends('sistema.altas')

@section('pie')
@section('alta')
<form action =  "{{route('guardacliente')}}" method = "POST" enctype='multipart/form-data'>

<table>
<th>Regsitrar Cliente</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_cliente')) 
<i> {{ $errors->first('id_cliente') }} </i> 
@endif	
Clave</td><td><input type = 'text' class="form-control" name = 'id_cliente' value="{{($idcs)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	
Nombre(s)</td><td><input type = 'text' class="form-control" name  ='nombre' value="{{old('nombre')}}" placeholder="Introduce Nombre(s)*">
</td></tr>

<tr><td>
@if($errors->first('apellido')) 
<i> {{ $errors->first('apellido') }} </i> 
@endif	
Apellido(s)</td><td><input type = 'text' class="form-control" name  ='apellidos' value="{{old('apellidos')}}" placeholder="Introduce Apellido(s)*">
</td></tr>

<tr><td>
@if($errors->first('direccion')) 
<i> {{ $errors->first('direccion') }} </i> 
@endif	
Dirección</td><td><input type  ='text' class="form-control" name ='direccion' value="{{old('direccion')}}" placeholder="Introduce Dir. con Num. calle*">
</td></tr>

<tr><td>
@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif	
Codigo Postal</td><td> <input type = 'text' class="form-control" name = 'cp' value="{{old('cp')}}" placeholder="Codigo Postal*">
</td></tr>

<tr><td>
@if($errors->first('tel')) 
<i> {{ $errors->first('tel') }} </i> 
@endif	
Telefono </td><td><input type = 'text' class="form-control" name = 'tel' value="{{old('tel')}}" placeholder="Num. Telefono*">
</td></tr>

<tr><td>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif	
Correo</td><td><input type = 'correo' class="form-control" name = 'correo' value="{{old('correo')}}" placeholder="@gmail, @hotmail, etc" >
</td></tr>
<tr><td>
Activo<input type = 'radio' name = 'activo' value = 'SI' checked>SI
<input type = 'radio' name = 'activo' value = 'NO'>NO
</td></tr>
<tr><td><input class="btn btn-success" type = 'submit' class="form-control" value = 'Guardar'></td>
<td><input class="btn btn-danger" type = 'reset' value = 'Cancelar'></td></tr>
</form>
</table>
@stop
@stop
@section('pie')
@stop





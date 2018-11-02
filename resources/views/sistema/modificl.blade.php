@extends('sistema.altas')
@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardamodificli')}}" method = "POST">                       
{{csrf_field()}}
<th>Modifica Cliente</th>

<tr><td>
@if($errors->first('id_cliente')) 
<i> {{ $errors->first('id_cliente') }} </i> 
@endif	
Clave de Cliente</td><td><input type = 'text' class="form-control" name = 'id_cliente' value="{{$cl->id_cliente}}" readonly ='readonly'>
</td></tr>

<tr><td>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	
Nombre(s)</td><td><input type = 'text' class="form-control" name  ='nombre' value="{{$cl->nombre}}">
</td></tr>

<tr><td>
@if($errors->first('apellidos')) 
<i> {{ $errors->first('apellidos') }} </i> 
@endif	
Apellidos</td><td><input type  ='text' class="form-control" name ='apellidos' value="{{$cl->apellidos}}">
</td></tr>

<tr><td>
@if($errors->first('direccion')) 
<i> {{ $errors->first('direccion') }} </i> 
@endif
Dirección</td><td><input type = 'text' class="form-control" name = 'direccion' value="{{$cl->direccion}}" >
</td></tr>

<tr><td>
@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif 
Codigo Postal</td><td><input type = 'text' class="form-control" name = 'cp' value="{{$cl->cp}}" >
</td></tr>

<tr><td>
@if($errors->first('tel')) 
<i> {{ $errors->first('tel') }} </i> 
@endif 
Telefono</td><td><input type = 'text' class="form-control" name = 'tel' value="{{$cl->tel}}" >
</td></tr>

<tr><td>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif 
Correo</td><td><input type = 'text' class="form-control" name = 'correo' value="{{$cl->correo}}" >
</td></tr>

<tr><td>
@if($cl->activo=='SI') 
Activo<input type = 'radio' name = 'activo' value = 'SI' checked>SI
<input type = 'radio' name = 'activo' value = 'NO'>NO
@else
Activo<input type = 'radio' name = 'activo' value = 'SI' >SI
<input type = 'radio' name = 'activo' value = 'NO'checked>NO
@endif
</td></tr>
<tr><td>
<input class="btn btn-success" type = 'submit' class="form-control" value = 'Guardar'></td>
<td><input class="btn btn-danger" type = 'reset' value = 'Cancelar'></td></tr>
</form>
</table>
@stop
@stop
@section('pie')
@stop



















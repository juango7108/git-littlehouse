@extends('sistema.altas')
@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardamodificasal')}}"  method = "POST">                        
{{csrf_field()}}

<th>Modifica Registro de Salida</th>

<tr><td>
@if($errors->first('id_salida')) 
<i> {{ $errors->first('id_salida') }} </i> 
@endif	
Clave de Salida</td><td><input type = 'text' class="form-control" name = 'id_salida' value="{{$salidas->id_salida}}" readonly ='readonly'>
</td></tr>

<tr><td>
@if($errors->first('fecha_salida')) 
<i> {{ $errors->first('fecha_salida') }} </i> 
@endif	
Fecha de Salida</td><td><input type = 'text' class="form-control" name  ='fecha_salida' value="{{$salidas->fecha_salida}}">
</td></tr>

<tr><td>
@if($errors->first('responsable')) 
<i> {{ $errors->first('responsable') }} </i> 
@endif	
Responsable</td><td><input type  ='text' class="form-control" name ='responsable' value="{{$salidas->responsable}}">
</td></tr>

<tr><td>
Seleccione usuario<select name = 'id_usuario'>
      <option value = '{{$id_usuario}}'>{{$usuarios}}</option>
	  @foreach($otrosusus as $us)
	   <option value = '{{$us->id_usuario}}'>{{$us->nombre}}</option>
	  @endforeach
      </select>
</td></tr>

<tr><td>
<input class="btn btn-success" type = 'submit' class="form-control" value = 'Guardar'></td>
<td> <input class="btn btn-danger" type = 'reset' value = 'Cancelar'></td></tr>
</form>
</table>
@stop
@stop
@section('pie')
@stop










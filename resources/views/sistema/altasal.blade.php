@extends('sistema.altas')

@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardasal')}}" method = "POST" >
<th>Regsitrar Salida</th>
{{csrf_field()}}

<tr><td>@if($errors->first('id_salida')) 
<i> {{ $errors->first('id_salida') }} </i> 
@endif	
Clave de Salida</td><td><input type = 'text' class="form-control" name = 'id_salida' value="{{($idsal)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('fecha_salida')) 
<i> {{ $errors->first('fecha_salida') }} </i> 
@endif	
Fecha de Salida</td><td><input type = 'text' class="form-control" name  ='fecha_salida' value="{{old('fecha_salida')}}" placeholder="Año-Mes-Dias">
</td></tr>

<tr><td>
@if($errors->first('responsable')) 
<i> {{ $errors->first('responsable') }} </i> 
@endif	
Responsable</td><td><input type = 'text' class="form-control" name  ='responsable' value="{{old('responsable')}}" placeholder="Persona a Cargo">
</td></tr>

<tr><td>
Seleccione ID del Usuario a Cargo</td><td><select name = 'id_usuario'>
            @foreach($usuarios as $cr)
			<option value = '{{$cr->id_usuario}}'>{{$cr->nombre}}</option>
			@endforeach
                  </select></td></tr>
<hr style="color: #0056b2;" />
<tr><td><input class="btn btn-success" type = 'submit' class="form-control" value = 'Guardar'>
<input class="btn btn-danger"  type = 'reset' class="form-control" value = 'Cancelar'></td></tr>
</form>
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





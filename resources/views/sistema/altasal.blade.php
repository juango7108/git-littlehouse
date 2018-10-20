<html>
<body>
<h1>Alta de salidas</h1>
<br>
<table>
<form action =  "{{route('guardasal')}}" method = "POST" >
{{csrf_field()}}

<tr><td>@if($errors->first('id_salida')) 
<i> {{ $errors->first('id_salida') }} </i> 
@endif	
Clave de Salida</td><td><input type = 'text' name = 'id_salida' value="{{($idsal)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('fecha_salida')) 
<i> {{ $errors->first('fecha_salida') }} </i> 
@endif	
Fecha de Salida</td><td><input type = 'text' name  ='fecha_salida' value="{{old('fecha_salida')}}">
</td></tr>

<tr><td>
@if($errors->first('responsable')) 
<i> {{ $errors->first('responsable') }} </i> 
@endif	
Responsable</td><td><input type = 'text' name  ='responsable' value="{{old('responsable')}}">
</td></tr>

<tr><td>
Seleccione ID del Usuario a Cargo</td><td><select name = 'id_usuario'>
            @foreach($usuarios as $cr)
			<option value = '{{$cr->id_usuario}}'>{{$cr->nombre}}</option>
			@endforeach
                  </select></td></tr>
				  <tr><td>
<input type = 'submit' value = 'Guardar'>
</td></tr>
</form>
</table>
</body>
</html>





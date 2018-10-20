<html>
<body>
<h1>Modifica Registro de Salida</h1>
<br>
<form action =  "{{route('guardamodificasal')}}"  method = "POST">                        
{{csrf_field()}}

@if($errors->first('id_salida')) 
<i> {{ $errors->first('id_salida') }} </i> 
@endif	<br>
        
Clave de Salida<input type = 'text' name = 'id_salida' value="{{$salidas->id_salida}}" readonly ='readonly'>
<br>
@if($errors->first('fecha_salida')) 
<i> {{ $errors->first('fecha_salida') }} </i> 
@endif	<br>

Fecha de Salida<input type = 'text' name  ='fecha_salida' value="{{$salidas->fecha_salida}}">
<br>

@if($errors->first('responsable')) 
<i> {{ $errors->first('responsable') }} </i> 
@endif	<br>
Responsable<input type  ='text' name ='responsable' value="{{$salidas->responsable}}">
<br>
Seleccione usuario<select name = 'id_usuario'>
      <option value = '{{$id_usuario}}'>{{$usuarios}}</option>
	  @foreach($otrosusus as $us)
	   <option value = '{{$us->id_usuario}}'>{{$us->nombre}}</option>
	  @endforeach
      </select>
<br>
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>











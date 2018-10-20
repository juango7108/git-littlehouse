<html>
<body>
<h1>Modifica Cliente</h1>
<br>
<form action =  "{{route('guardamodificli')}}" method = "POST">          <!--enctype='multipart/form-data'-->             
{{csrf_field()}}

@if($errors->first('id_cliente')) 
<i> {{ $errors->first('id_cliente') }} </i> 
@endif	<br>
        
Clave de Cliente<input type = 'text' name = 'id_cliente' value="{{$cl->id_cliente}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre(s)<input type = 'text' name  ='nombre' value="{{$cl->nombre}}">
<br>

@if($errors->first('apellidos')) 
<i> {{ $errors->first('apellidos') }} </i> 
@endif	<br>
Apellidos<input type  ='text' name ='apellidos' value="{{$cl->apellidos}}">
<br>



@if($errors->first('direccion')) 
<i> {{ $errors->first('direccion') }} </i> 
@endif	<br>
Dirección <input type = 'text' name = 'direccion' value="{{$cl->direccion}}" >
<br>

@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif <br>
Codigo Postal <input type = 'text' name = 'cp' value="{{$cl->cp}}" >
<br>
@if($errors->first('tel')) 
<i> {{ $errors->first('tel') }} </i> 
@endif <br>
Telefono <input type = 'text' name = 'tel' value="{{$cl->tel}}" >
<br>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif <br>
Correo<input type = 'text' name = 'correo' value="{{$cl->correo}}" >


<br>
@if($cl->activo=='SI') 
Activo<input type = 'radio' name = 'activo' value = 'SI' checked>SI
<input type = 'radio' name = 'activo' value = 'NO'>NO
<br>
@else
Activo<input type = 'radio' name = 'activo' value = 'SI' >SI
<input type = 'radio' name = 'activo' value = 'NO'checked>NO
@endif
<br>

<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>




















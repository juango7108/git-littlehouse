<html>
<body>
<h1>Modifica Casa</h1>
<br>
<form action =  "{{route('guardamodificas')}}" method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}

@if($errors->first('id_casa')) 
<i> {{ $errors->first('id_casa') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_casa' value="{{$casas->id_casa}}" readonly ='readonly'>
<br>
@if($errors->first('dimenciones')) 
<i> {{ $errors->first('dimenciones') }} </i> 
@endif	<br>

Dimenciones<input type = 'text' name  ='dimenciones' value="{{$casas->dimenciones}}">
<br>

@if($errors->first('color')) 
<i> {{ $errors->first('color') }} </i> 
@endif	<br>
Color<input type  ='text' name ='color' value="{{$casas->color}}">
<br>



@if($errors->first('descripcion')) 
<i> {{ $errors->first('descripcion') }} </i> 
@endif	<br>

Codigo Postal <input type = 'text'name = 'descripcion' value="{{$casas->descripcion}}" >
              </select>
<br>

@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif
<br>
<img src = "{{asset('archivos/'.$casas->archivo)}}"
        height =100 width=100>
<br>
Seleccione foto<input type='file' name ='archivo'>
<BR>
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>




















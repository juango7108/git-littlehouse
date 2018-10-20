<html>
<body>
<h1>Modifica Cliente</h1>
<br>
<form action =  "{{route('guardamodificalm')}}" method = "POST">          <!--enctype='multipart/form-data'-->             
{{csrf_field()}}

@if($errors->first('id_producto')) 
<i> {{ $errors->first('id_producto') }} </i> 
@endif	<br>
        
Clave de Producto<input type = 'text' name = 'id_producto' value="{{$alm->id_producto}}" readonly ='readonly'>
<br>
@if($errors->first('producto')) 
<i> {{ $errors->first('producto') }} </i> 
@endif	<br>

Producto<input type = 'text' name  ='producto' value="{{$alm->producto}}">
<br>

@if($errors->first('cantidad_minima')) 
<i> {{ $errors->first('cantidad_minima') }} </i> 
@endif	<br>
Cantidad minima de Procto en Almacen<input type  ='text' name ='cantidad_minima' value="{{$alm->cantidad_minima}}">
<br>

@if($errors->first('costo')) 
<i> {{ $errors->first('costo') }} </i> 
@endif	<br>
Costo de Producto <input type = 'text' name = 'costo' value="{{$alm->costo}}" >
<br>

@if($errors->first('costo_promedio')) 
<i> {{ $errors->first('costo_promedio') }} </i> 
@endif <br>
Costo Promedio <input type = 'text' name = 'costo_promedio' value="{{$alm->costo_promedio}}" >
<br>
@if($errors->first('existencia_actual')) 
<i> {{ $errors->first('existencia_actual') }} </i> 
@endif <br>
Existencia Actual<input type = 'text' name = 'existencia_actual' value="{{$alm->existencia_actual}}" >
<br>
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>




















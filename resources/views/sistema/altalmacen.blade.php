<html>
<body>
<h1>Alta Producto de Almacén</h1>
<br>

<form action =  "{{route('guardalmacen')}}" method = "POST">

<table>
<th>Regsitrar Producto de Almacén</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_producto')) 
<i> {{ $errors->first('id_producto') }} </i> 
@endif	
Clave de Producto</td><td><input type = 'text' name = 'id_producto' value="{{($idp)}}" readonly='readonly'>
</td></tr>
<tr><td>
@if($errors->first('producto')) 
<i> {{ $errors->first('producto') }} </i> 
@endif	
Producto</td><td><input type = 'text' name = 'producto' value="{{old('producto')}}">
</td></tr>

<tr><td>
@if($errors->first('cantidad_minima')) 
<i> {{ $errors->first('cantidad_minima') }} </i> 
@endif	
Cantidad Minima del Producto</td><td><input type = 'text' name  ='cantidad_minima' value="{{old('cantidad_minima')}}">
</td></tr>

<tr><td>
@if($errors->first('costo')) 
<i> {{ $errors->first('costo') }} </i> 
@endif	
Costo del Producto</td><td><input type = 'text' name  ='costo' value="{{old('costo')}}">
</td></tr>

<tr><td>
@if($errors->first('costo_promedio')) 
<i> {{ $errors->first('costo_promedio') }} </i> 
@endif	
Costo Promedio del Producto</td><td><input type  ='text' name ='costo_promedio' value="{{old('costo_promedio')}}">
</td></tr>
<tr><td>
@if($errors->first('existencia_actual')) 
<i> {{ $errors->first('existencia_actual') }} </i> 
@endif	
Existencia Actual del Producto</td><td><input type='text' name ='existencia_actual' value="{{old('existencia_actual')}}">
</td></tr>

<tr><td><input type = 'submit' value = 'Guardar'></td></tr>
</form>
</table>
</body>
</html>

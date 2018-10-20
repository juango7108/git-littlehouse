<html>
<body>
<h1>Alta de entrada</h1>
<br>
<table>
<form action =  "{{route('guardaent')}}" method = "POST" >
{{csrf_field()}}

<tr><td>@if($errors->first('id_entrada')) 
<i> {{ $errors->first('id_entrada') }} </i> 
@endif	
Clave de Etrada</td><td><input type = 'text' name = 'id_entrada' value="{{($ident)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('fecha_entrada')) 
<i> {{ $errors->first('fecha_entrada') }} </i> 
@endif	
Fecha de Entrada</td><td><input type = 'text' name  ='fecha_entrada' value="{{old('fecha_entrada')}}">
</td></tr>

<tr><td>
@if($errors->first('proveedor')) 
<i> {{ $errors->first('proveedor') }} </i> 
@endif	
Nombre del Proveedor</td><td><input type = 'text' name  ='proveedor' value="{{old('proveedor')}}">
</td></tr>

<tr><td>
@if($errors->first('folio_factura')) 
<i> {{ $errors->first('folio_factura') }} </i> 
@endif	
Folio de la Factura</td><td><input type  ='text' name ='folio_factura' value="{{old('folio_factura')}}">
</td></tr>

<tr><td>
@if($errors->first('fecha_factura')) 
<i> {{ $errors->first('fecha_factura') }} </i> 
@endif	
Fecha de la Factura</td><td><input type  ='text' name ='fecha_factura' value="{{old('fecha_factura')}}">
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





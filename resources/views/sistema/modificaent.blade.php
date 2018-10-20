<html>
<body>
<h1>Modifica Registro de Entrada</h1>
<br>
<form action =  "{{route('guardamodificaent')}}"  method = "POST">                        
{{csrf_field()}}

@if($errors->first('id_entrada')) 
<i> {{ $errors->first('id_entrada') }} </i> 
@endif	<br>
        
Clave de Entrada<input type = 'text' name = 'id_entrada' value="{{$entradas->id_entrada}}" readonly ='readonly'>
<br>
@if($errors->first('fecha_entrada')) 
<i> {{ $errors->first('fecha_entrada') }} </i> 
@endif	<br>

Fecha de Entrada<input type = 'text' name  ='fecha_entrada' value="{{$entradas->fecha_entrada}}">
<br>

@if($errors->first('proveedor')) 
<i> {{ $errors->first('proveedor') }} </i> 
@endif	<br>
Proveedor<input type  ='text' name ='proveedor' value="{{$entradas->proveedor}}">
<br>

@if($errors->first('folio_factura')) 
<i> {{ $errors->first('folio_factura') }} </i> 
@endif	<br>
Folio de la Factura <input type = 'text'name = 'folio_factura' value="{{$entradas->folio_factura}}" >
<br>
@if($errors->first('fecha_factura')) 
<i> {{ $errors->first('fecha_factura') }} </i> 
@endif	<br>
Fecha de la Factura <input type = 'text'name = 'fecha_factura' value="{{$entradas->fecha_factura}}" >
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











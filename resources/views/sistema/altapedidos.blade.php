<html>
<body>
<h1>Alta Pedidos</h1>
<br>
<table>
<form action =  "{{route('guardapedido')}}" method = "POST" >


{{csrf_field()}}


<tr><td>@if($errors->first('id_pedido')) 
<i> {{ $errors->first('id_pedido') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id_pedido' value="{{($idpedido)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('direccion')) 
<i> {{ $errors->first('direccion') }} </i> 
@endif	
Dirección(s)</td><td><input type = 'text' name  ='direccion' value="{{old('direccion')}}">
</td></tr>

<tr><td>
@if($errors->first('fecha_pedido')) 
<i> {{ $errors->first('fecha_pedido') }} </i> 
@endif	
Fecha de Pedido(s)</td><td><input type = 'text' name  ='fecha_pedido' value="{{old('fecha_pedido')}}">
</td></tr>

<tr><td>
@if($errors->first('fecha_entrega')) 
<i> {{ $errors->first('fecha_entrega') }} </i> 
@endif	
Fecha de Entrega</td><td><input type  ='text' name ='fecha_entrega' value="{{old('fecha_entrega')}}">
</td></tr>

<tr><td>
Seleccione ID del Cliente</td><td><select name = 'id_cliente'>
            @foreach($clientes as $cr)
			<option value = '{{$cr->id_cliente}}'>{{$cr->nombre}}</option>
			@endforeach
                  </select></td></tr>
				  <tr><td>
Seleccione el Usuario a Cargo</td><td><select name = 'id_usuario'>
            @foreach($usuarios as $cr)
			<option value = '{{$cr->id_usuario}}'>{{$cr->nombre_usuario}}</option>
			@endforeach
                  </select></td></tr>

<tr><td>
<input type = 'submit' value = 'Guardar'>
</td></tr>
</form>
</table>
</body>
</html>





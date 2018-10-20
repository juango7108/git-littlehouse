<html>
<body>
<h1>Modifica Registro de Pedido</h1>
<br>
<form action =  "{{route('guardamodificaped')}}"  method = "POST">                        
{{csrf_field()}}

@if($errors->first('id_pedido')) 
<i> {{ $errors->first('id_pedido') }} </i> 
@endif	<br>
        
Clave<input type = 'text' name = 'id_pedido' value="{{$pedidos->id_pedido}}" readonly ='readonly'>
<br>
@if($errors->first('direccion')) 
<i> {{ $errors->first('direccion') }} </i> 
@endif	<br>

Direccion<input type = 'text' name  ='direccion' value="{{$pedidos->direccion}}">
<br>

@if($errors->first('fecha_pedido')) 
<i> {{ $errors->first('fecha_pedido') }} </i> 
@endif	<br>
Fecha del Pedido<input type  ='text' name ='fecha_pedido' value="{{$pedidos->fecha_pedido}}">
<br>

@if($errors->first('fecha_entrega')) 
<i> {{ $errors->first('fecha_entrega') }} </i> 
@endif	<br>
Fecha de Entrega <input type = 'text'name = 'fecha_entrega' value="{{$pedidos->fecha_entrega}}" >
<br>
Seleccione cliente<select name = 'id_cliente'>
      <option value = '{{$id_cliente}}'>{{$clientes}}</option>
	  @foreach($otrosclientes as $cl)
	   <option value = '{{$cl->id_cliente}}'>{{$cl->nombre}}</option>
	  @endforeach
      </select>
<br>
Seleccione usuario<select name = 'id_usuario'>
      <option value = '{{$id_usuario}}'>{{$usuarios}}</option>
	  @foreach($otrosusu as $us)
	   <option value = '{{$us->id_usuario}}'>{{$us->nombre_usuario}}</option>
	  @endforeach
      </select>
<br>
<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>











@extends('sistema.altas')
@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardamodificaped')}}"  method = "POST">                        
{{csrf_field()}}

<th>Modifica Registro de Pedido</th>

<tr><td>
@if($errors->first('id_pedido')) 
<i> {{ $errors->first('id_pedido') }} </i> 
@endif
Clave</td><td><input type = 'text' class="form-control" name = 'id_pedido' value="{{$pedidos->id_pedido}}" readonly ='readonly'>
</td></tr>

<tr><td>
@if($errors->first('direccion')) 
<i> {{ $errors->first('direccion') }} </i> 
@endif
Direccion</td><td><input type = 'text' class="form-control" name  ='direccion' value="{{$pedidos->direccion}}">
</td></tr>

<tr><td>
@if($errors->first('fecha_pedido')) 
<i> {{ $errors->first('fecha_pedido') }} </i> 
@endif	
Fecha del Pedido</td><td><input type  ='text' class="form-control" name ='fecha_pedido' value="{{$pedidos->fecha_pedido}}">
</td></tr>

<tr><td>
@if($errors->first('fecha_entrega')) 
<i> {{ $errors->first('fecha_entrega') }} </i> 
@endif	
Fecha de Entrega</td><td><input type = 'text' class="form-control" name = 'fecha_entrega' value="{{$pedidos->fecha_entrega}}" >
</td></tr>

<tr><td>
Seleccione cliente<select name = 'id_cliente'>
      <option value = '{{$id_cliente}}'>{{$clientes}}</option>
	  @foreach($otrosclientes as $cl)
	   <option value = '{{$cl->id_cliente}}'>{{$cl->nombre}}</option>
	  @endforeach
      </select>
</td></tr>

<tr><td>
Seleccione usuario<select name = 'id_usuario'>
      <option value = '{{$id_usuario}}'>{{$usuarios}}</option>
	  @foreach($otrosusu as $us)
	   <option value = '{{$us->id_usuario}}'>{{$us->nombre_usuario}}</option>
	  @endforeach
     </select>
</td></tr>
	 
<tr><td>
<input class="btn btn-success" type = 'submit' class="form-control" value = 'Guardar'></td>
<td><input class="btn btn-danger" type = 'reset' value = 'Cancelar'></td></tr>
</form>
</table>
@stop
@stop
@section('pie')
@stop











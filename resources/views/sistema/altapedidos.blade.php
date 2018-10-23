@extends('sistema.altas')

@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardapedido')}}" method = "POST" >
<th>Regsitrar Pedidos</th>

{{csrf_field()}}


<tr><td>@if($errors->first('id_pedido')) 
<i> {{ $errors->first('id_pedido') }} </i> 
@endif	
Clave</td><td><input type = 'text' class="form-control" name = 'id_pedido' value="{{($idpedido)}}" readonly='readonly' >
</td></tr>

<tr><td>
@if($errors->first('direccion')) 
<i> {{ $errors->first('direccion') }} </i> 
@endif	
Dirección(s)</td><td><input type = 'text' class="form-control" name  ='direccion' value="{{old('direccion')}}" placeholder="Introduce la Dirección.">
</td></tr>

<tr><td>
@if($errors->first('fecha_pedido')) 
<i> {{ $errors->first('fecha_pedido') }} </i> 
@endif	
Fecha de Pedido(s)</td><td><input type = 'text' class="form-control" name  ='fecha_pedido' value="{{old('fecha_pedido')}}" placeholder="Introduce la Fecha.">
</td></tr>

<tr><td>
@if($errors->first('fecha_entrega')) 
<i> {{ $errors->first('fecha_entrega') }} </i> 
@endif	
Fecha de Entrega</td><td><input type  ='text' class="form-control" name ='fecha_entrega' value="{{old('fecha_entrega')}}" placeholder="Introduce la Fecha.">
</td></tr>

<tr><td>
Seleccione ID del Cliente</td><td><select name = 'id_cliente'>
            @foreach($clientes as $cr)
			<option value = '{{$cr->id_cliente}}'>{{$cr->id_cliente}}</option>
			@endforeach
                  </select></td></tr>
				  <tr><td>
Seleccione el Usuario a Cargo</td><td><select name = 'id_usuario'>
            @foreach($usuarios as $cr)
			<option value = '{{$cr->id_usuario}}'>{{$cr->nombre_usuario}}</option>
			@endforeach
                  </select></td></tr>

<tr><td><input class="btn btn-success" type = 'submit' class="form-control" value = 'Guardar'>
<input class="btn btn-danger"  type = 'reset' class="form-control" value = 'Cancelar'></td></tr>
</form>
</table>
<br>
<br>
<br>
<br>
<br>
@stop
@stop
@section('pie')
@stop




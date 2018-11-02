@extends('sistema.altas')
@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardamodificalm')}}" method = "POST">                       
{{csrf_field()}}

<th>Modifica el registro del Producto</th>
<tr><td>
@if($errors->first('id_producto')) 
<i> {{ $errors->first('id_producto') }} </i> 
@endif	
Clave de Producto</td><td><input type = 'text' class="form-control"  name = 'id_producto' value="{{$alm->id_producto}}" readonly ='readonly'>
</td></tr>

<tr><td>
@if($errors->first('producto')) 
<i> {{ $errors->first('producto') }} </i> 
@endif
Producto</td><td><input type = 'text' class="form-control"  name  ='producto' value="{{$alm->producto}}">
</td></tr>

<tr><td>
@if($errors->first('cantidad_minima')) 
<i> {{ $errors->first('cantidad_minima') }} </i> 
@endif
Cantidad minima de Procto en Almacen</td><td><input type  ='text' class="form-control"  name ='cantidad_minima' value="{{$alm->cantidad_minima}}">
</td></tr>

<tr><td>
@if($errors->first('costo')) 
<i> {{ $errors->first('costo') }} </i> 
@endif	
Costo de Producto</td><td><input type = 'text' class="form-control"  name = 'costo' value="{{$alm->costo}}" >
</td></tr>

<tr><td>
@if($errors->first('costo_promedio')) 
<i> {{ $errors->first('costo_promedio') }} </i> 
@endif 
Costo Promedio</td><td><input type = 'text' class="form-control"  name = 'costo_promedio' value="{{$alm->costo_promedio}}" >
</td></tr>

<tr><td>
@if($errors->first('existencia_actual')) 
<i> {{ $errors->first('existencia_actual') }} </i> 
@endif 
Existencia Actual</td><td><input type = 'text' class="form-control"  name = 'existencia_actual' value="{{$alm->existencia_actual}}" >
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




















@extends('sistema.altas')

@section('pie')
@section('alta')

<form action =  "{{route('guardalmacen')}}" method = "POST">

<table>
<th>Regsitrar Producto de Almacén</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_producto')) 
<i> {{ $errors->first('id_producto') }} </i> 
@endif	
Clave de Producto</td><td><input type = 'text' class="form-control" name = 'id_producto' value="{{($idp)}}" readonly='readonly'>
</td></tr>
<tr><td>
@if($errors->first('producto')) 
<i> {{ $errors->first('producto') }} </i> 
@endif	
Producto</td><td><input type = 'text' class="form-control" name = 'producto' value="{{old('producto')}}" placeholder="Nombre de Producto*">
</td></tr>

<tr><td>
@if($errors->first('cantidad_minima')) 
<i> {{ $errors->first('cantidad_minima') }} </i> 
@endif	
Cantidad Minima del Producto</td><td><input type = 'text' class="form-control" name  ='cantidad_minima' value="{{old('cantidad_minima')}}" placeholder="Representar en Unidad">
</td></tr>

<tr><td>
@if($errors->first('costo')) 
<i> {{ $errors->first('costo') }} </i> 
@endif	
Costo del Producto</td><td><input type = 'text' class="form-control" name  ='costo' value="{{old('costo')}}" placeholder="Agregar Decimal">
</td></tr>

<tr><td>
@if($errors->first('costo_promedio')) 
<i> {{ $errors->first('costo_promedio') }} </i> 
@endif	
Costo Promedio del Producto</td><td><input type  ='text' class="form-control" name ='costo_promedio' value="{{old('costo_promedio')}}" placeholder="Cantidad*Costo">
</td></tr>
<tr><td>
@if($errors->first('existencia_actual')) 
<i> {{ $errors->first('existencia_actual') }} </i> 
@endif	
Existencia Actual del Producto</td><td><input type='text' class="form-control" name ='existencia_actual' value="{{old('existencia_actual')}}" placeholder="Representar en Unidad">
</td></tr>

<tr><td><input class="btn btn-success" type = 'submit' class="form-control" value = 'Guardar'>
<input class="btn btn-danger"  type = 'reset' class="form-control" value = 'Cancelar'></td></tr>
</form>
</table>
<br>
<br>
<br>
@stop
@stop
@section('pie')
@stop

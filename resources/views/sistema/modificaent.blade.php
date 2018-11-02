@extends('sistema.altas')
@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardamodificaent')}}"  method = "POST">                        
{{csrf_field()}}

<th>Modifica Registro de Entrada</th>

<tr><td>
@if($errors->first('id_entrada')) 
<i> {{ $errors->first('id_entrada') }} </i> 
@endif	
Clave de Entrada</td><td><input type = 'text' class="form-control" name = 'id_entrada' value="{{$entradas->id_entrada}}" readonly ='readonly'>
</td></tr>

<tr><td>
@if($errors->first('fecha_entrada')) 
<i> {{ $errors->first('fecha_entrada') }} </i> 
@endif	
Fecha de Entrada</td><td><input type = 'text' class="form-control" name  ='fecha_entrada' value="{{$entradas->fecha_entrada}}">
</td></tr>

<tr><td>
@if($errors->first('proveedor')) 
<i> {{ $errors->first('proveedor') }} </i> 
@endif	
Proveedor</td><td><input type  ='text' class="form-control" name ='proveedor' value="{{$entradas->proveedor}}">
</td></tr>

<tr><td>
@if($errors->first('folio_factura')) 
<i> {{ $errors->first('folio_factura') }} </i> 
@endif
Folio de la Factura</td><td><input type = 'text' class="form-control" name = 'folio_factura' value="{{$entradas->folio_factura}}" >
</td></tr>

<tr><td>
@if($errors->first('fecha_factura')) 
<i> {{ $errors->first('fecha_factura') }} </i> 
@endif
Fecha de la Factura</td><td><input type = 'text' class="form-control" name = 'fecha_factura' value="{{$entradas->fecha_factura}}" >
</td></tr>

<tr><td>
Seleccione usuario<select name = 'id_usuario'>
      <option value = '{{$id_usuario}}'>{{$usuarios}}</option>
	  @foreach($otrosusus as $us)
	   <option value = '{{$us->id_usuario}}'>{{$us->nombre}}</option>
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












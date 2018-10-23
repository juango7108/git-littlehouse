@extends('sistema.altas')

@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardacasa')}}" method = "POST" enctype='multipart/form-data'>

<table>
<th>Regsitrar Casa</th>
{{csrf_field()}}

<tr><td>
@if($errors->first('id_casa')) 
<i> {{ $errors->first('id_casa') }} </i> 
@endif	
Clave</td><td><input type = 'text' name = 'id_casa' value="{{($idcasa)}}" readonly='readonly'>
</td></tr>

<tr><td>
@if($errors->first('dimenciones')) 
<i> {{ $errors->first('dimenciones') }} </i> 
@endif	
Dimenciones de la casa</td><td><input type = 'text' name  ='dimenciones' value="{{old('dimenciones')}}" placeholder="Base * Altura*">
</td></tr>

<tr><td>
@if($errors->first('color')) 
<i> {{ $errors->first('color') }} </i> 
@endif	
Color</td><td><input type = 'text' name  ='color' value="{{old('color')}}" placeholder="Color de la Casa*">
</td></tr>

<tr><td>
@if($errors->first('descripcion')) 
<i> {{ $errors->first('descripcion') }} </i> 
@endif	
Descripción</td><td><input type  ='text' name ='descripcion' value="{{old('descripcion')}}" placeholder="Especificaciones*">
</td></tr>
<tr><td>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	
Seleccione foto</td><td><input type='file' name ='archivo'>
</td></tr>

<tr><td><input class="btn btn-success" type = 'submit' class="form-control" value = 'Guardar'></td>
<td><input class="btn btn-danger" type = 'reset' class="form-control" value = 'Cancelar'></td></tr>
</form>
</table>
<br>
<br>
<br>
<br>
@stop
@stop
@section('pie')
@stop


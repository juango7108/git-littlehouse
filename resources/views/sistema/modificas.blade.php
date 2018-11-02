@extends('sistema.altas')
@section('pie')
@section('alta')
<table>
<form action =  "{{route('guardamodificas')}}" method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}

<th>Modifica registro de la Casa</th>

<tr><td>
@if($errors->first('id_casa')) 
<i> {{ $errors->first('id_casa') }} </i> 
@endif	
Clave</td><td><input type = 'text' class="form-control" name = 'id_casa' value="{{$casas->id_casa}}" readonly ='readonly'>
</td></tr>

<tr><td>
@if($errors->first('dimenciones')) 
<i> {{ $errors->first('dimenciones') }} </i> 
@endif	
Dimenciones</td><td><input type = 'text' class="form-control" name  ='dimenciones' value="{{$casas->dimenciones}}">
</td></tr>

<tr><td>
@if($errors->first('color')) 
<i> {{ $errors->first('color') }} </i> 
@endif	
Color</td><td><input type  ='text' class="form-control" name ='color' value="{{$casas->color}}">
</td></tr>

<tr><td>
@if($errors->first('descripcion')) 
<i> {{ $errors->first('descripcion') }} </i> 
@endif	
Codigo Postal</td><td><input type = 'text' class="form-control" name = 'descripcion' value="{{$casas->descripcion}}" >
</td></tr>
		
<tr><td>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif
<img src = "{{asset('archivos/'.$casas->archivo)}}"
        height =100 width=100>
</td>
<td>
Seleccione foto<input type='file' name ='archivo'>
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


















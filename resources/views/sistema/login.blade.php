<html>
<body>
<h1>Inicio de Sesión</h1>

<br>
<form action="{{route('iniciasesion')}}" method="POST">
	{{csrf_field()}}
Teclea el usuario<input type='text' name='usuario'>
<br>
Teclea PSW<input type='text' name='password'>
<br>
<input type='submit' value='Iniciar Sesion'>
</form>
@if (Session::has('error'))
	<div>{{Session::get('error')}}</div>
<script>
alert("{{Session::get('error')}}");
</script>
@endif
</body>
</html>
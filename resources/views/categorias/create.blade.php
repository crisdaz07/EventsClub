<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/categoria">
		{{csrf_field()}}
		<input type="text" name="descripcion">

		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
		<input name="_method" type="hidden" value="{{ 'post' }}"/>


		<input type="submit" name="enviar" value="Enviar categoria">
	</form>
</body>
</html>
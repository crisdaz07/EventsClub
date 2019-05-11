<!DOCTYPE html>
<html>
<head>
	<title>
		@foreach($evento as $item) 
			 
				<p>This is user {{ $item::all() }}</p>
			
		@endforeach
	</title>
</head>
<body>

</body>
</html>
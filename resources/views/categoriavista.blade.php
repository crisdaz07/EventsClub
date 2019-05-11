<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	@foreach($eventos as $item) 
		
		<p>This is user {{!! $item->nombre !!}}</p>
		<p>index {{!! $loop->index !!}}</p>
	@endforeach

	
</body>
</html>
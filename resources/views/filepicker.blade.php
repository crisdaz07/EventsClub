<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	

	<title></title>

</head>
<body>



<form action="{{action('rutasController@getRoutes')}}" method="post">>
	<div class="form-horizontal">
		{{ csrf_field() }}
	  <div class="form-group">

	    <label class="control-label col-md-3">Upload Image</label>

	    <div class="col-md-8">

	      <div class="row">

	        <div id="demo"></div>

	      </div>

	    </div>

	  </div>

	  <div class="form-group">

	    <label class="control-label col-md-3"></label>

	    <div class="col-md-8">

	      <input type="submit" class="btn btn-primary" value="Send">

	    </div>

	  </div>

	</div>
</form>











	<div>
		<h1>HI</h1>
	</div>

	<div class="row">
		<div id="coba"></div>
	</div>

	

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	

	<!--  <script type="text/javascript" src="../image-picker/dist/js/spartan-multi-image-picker-min.js"></script>

	<script type="text/javascript">
		$("#coba").spartanMultiImagePicker({
			fieldName:   'fileUpload[]'
		});		
	</script>
 -->


	<script type="text/javascript" src="../multiple-picker/dist/js/spartan-multi-image-picker-min.js"></script>

	<script type="text/javascript">
		$("#demo").spartanMultiImagePicker({

		  fieldName:  'fileUpload[]'

		});
	</script>


</body>

</html>
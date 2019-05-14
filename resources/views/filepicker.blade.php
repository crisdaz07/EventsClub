{{-- <!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>Image Upload</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/css/fileinput.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 <style type="text/css">
  .main-section{
   margin: 0 auto;
   padding:20px;
   margin-top:100px;
   background-color: #fff;
   box-shadow: 0px 0px 20px #c1c1c1;
  }
 </style>
</head>

<body>

<div class="container" > 
  <div class="col-lg-12 col-sm-12 col-l1 main-section">
  <h1> Upload Image </h1> 
    <form action="{{ url('/getRoutes')}}" enctype="multipart/form-data">
     <input type="hidden" name="_token" value="{{csrf_token()}}">
     <div class="form-control">
     <input type="file" id="file-1" name="file" multiple="" data-overwrite-initial="false" data-min-file-count="2">
     </div>
    </form>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/js/fileinput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
 $('#file-1').fileinput({
  theme:'fa',
  uploadUrl:"{{url('getRoutes')}}",
  uploadExtraData:function(){
   return{
    _token:$("input[name='_token']").val()
   };
  },
  allowedFileExtensions:['jpg','png','gif'],
  overwriteInitial:false,
  maxFileSize:2000,
  maxFileNum:8,
  slugCallback:function(filename){
   return filename.replace('(','_').replace(']','_');
  }
 });
</script>
</body>
</html>﻿ --}}


{{-- <!DOCTYPE HTML>
<html>
<head>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/css/fileinput.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />



<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>jQuery File Upload Example</title>
</head>
<body>

<div class="container">
    
    
    <br>
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
        <i class=""></i>
        <span>Select files...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input class="custom-file-input" id="fileupload" type="file" name="files[]" enctype="multipart/form-data" multiple>
    </span>
    <br>
    <br>
    <!-- The global progress bar -->
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>
    <br>
    
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="File-Upload/js/vendor/jquery.ui.widget.js"></script>
<script src="File-Upload/js/jquery.iframe-transport.js"></script>
<script src="File-Upload/js/jquery.fileupload.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = "{{ url('/getRoutes')}}" ;
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
</script>
</body> 
</html> --}}


<!DOCTYPE HTML>

<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>jQuery File Upload Demo - Basic version</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support and progress bar for jQuery. Supports cross-domain, chunked and resumable file uploads. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="File-Upload/css/style.css">
<link rel="stylesheet" href="File-Upload/css/jquery.fileupload.css">
</head>
<body>

<div class="container">
    
    <form action="{{ url('/getRoutes')}}" method="post" enctype="multipart/form-data">
	    <!-- The fileinput-button span is used to style the file input field as button -->
	    <input type="hidden" name="_token" value="{{csrf_token()}}">
	    <span class="btn btn-success fileinput-button">
	        <i class="glyphicon glyphicon-plus"></i>
	        <span>Select files...</span>
	        <!-- The file input field used as target for the file upload widget -->
	        <input id="" type="file" name="files[]" multiple>
	    </span>
	    <br>
	    <br>
	    <!-- The global progress bar -->
	    <div id="progress" class="progress">
	        <div class="progress-bar progress-bar-success"></div>
	    </div>
	    <!-- The container for the uploaded files -->
	    <div id="files" class="files"></div>
	    <br>
	    <button class="btn btn-primary" id="fileupload" type="submit" name="files[]" value="Submit">Submit</button>
    </form>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="File-Upload/js/vendor/jquery.ui.widget.js"></script>
<script src="File-Upload/js/jquery.iframe-transport.js"></script>
<script src="File-Upload/js/jquery.fileupload.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = "{{ url('/getRoutes')}}";
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        add: function (e, data) {  //Esta funcion se puede quitar
            data.context = $('<button/   class="btn btn-primary">').text('Upload')
                .appendTo(document.body)
                .click(function () {
                    data.context = $('<p/>').text('Uploading...').replaceAll($(this));
                    data.submit();
                });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


</script>
</body>
</html>

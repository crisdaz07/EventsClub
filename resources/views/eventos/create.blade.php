<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html><head>
	<title>Events Club a Entertainment Category Website Template | Home :: w3layouts</title>

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../../css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="../../js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	{{--File picker--}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="File-Upload/css/style.css">
	<link rel="stylesheet" href="File-Upload/css/jquery.fileupload.css">	
	{{--##############--}}


	<style type="text/css">
	body{

		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{
        border-radius: 3px;
    }
	.signup-form{
		width: 700px;
		margin: 0 auto;
		padding: 30px 0;
		margin-top: -30px;
	}
	.signup-form h2{
		color: #610B4B;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #610B4B;
		position: absolute;
		top: 50%;
		z-index: 2;
		font-family: 'caviar_dreamsregular';
	}
	.signup-form h2:before{
		font-family: 'caviar_dreamsregular';
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
		font-family: 'caviar_dreamsregular';
	}
    .signup-form .hint-text{
		color: #610B4B;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{
        font-size: 16px;
        font-weight: bold;
		min-width: 140px;
        outline: none !important;
		color: #ffffff;
		background: #610B4B
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form a{
		color: #FFFFFF;
		text-decoration: underline;
		font-family: 'caviar_dreamsregular';
	}
    .signup-form a:hover{
		text-decoration: none;
		font-family: 'caviar_dreamsregular';
	}
	.signup-form form a{
		text-decoration: none;
		font-family: 'caviar_dreamsregular';
	}
	.signup-form form a:hover{
		text-decoration: underline;
		font-family: 'caviar_dreamsregular';
	}

	textarea{
		width: 640px;
		height: 150px;
		margin-left: 10px;
		margin-top: -20px;
	}

	SELECT{
		width: 160px;
	    height: 300;
	}
		
	.main-section{
	   margin: 0 auto;
	   padding:20px;
	   margin-top: 0px;
	   background-color: #fff;
	   box-shadow: 0px 0px 20px #c1c1c1;
	   height: 400px;
	   width: 640px;
	  }
</style>	
</head>

<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<a href="../index.html">
						<img src="../../images/logo.png" alt="" />
					</a>
				</div>
				<div class="menu">
					<ul>
						<li>
							@if (session('status'))
								<a href="../welcome">INICIO</a>
							@else
								<a href="../home">INICIO</a>
							@endif
						</li>
						<li>
							<a href="../categorias">CATEGORIAS</a>
						</li>
						<!--<li>
							<a href="../galeria">GALLERIA</a>
						</li>
						<li>
							<a href="../blog">BLOG</a>
						</li>-->
						<li>
							<a href="../contacto">CONTACTO</a>
						</li>
						<li>
							<a href="../acerca">NUESTRO EQUIPO</a>
						</li>
						<li>
							@guest
                            <li >
                                <a href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('REGISTRO') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a1 class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a1>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<!------ Slider ------------>
		<div class="signup-form"  >
			<form action="/evento" method="post" enctype="multipart/form-data">
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
				<input name="_method" type="hidden" value="{{ 'post' }}"/>
				{{ csrf_field() }}
				<h2>Evento</h2>
				<p class="hint-text">Crea tu evento.</p>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6"><input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required"></div>
						<div class="col-xs-6"><input type="text" class="form-control" name="ubicacion" placeholder="Ubicacion" required="required"></div>
					</div>
				</div>
				<div class="form-group">
					<a>
						Inicio
					</a>
					<div class="row">
						<div class="col-xs-6">
							<input type="date" class="form-control" name="fecha_inicio" placeholder="Fecha de inicio" required="required">
						</div>
						<div class="col-xs-6"><input type="time" class="form-control" name="hora_inicio" placeholder="Hora de fin" required="required"></div>
					</div>
				</div>
				<div class="form-group">
					<a>
						Fin
					</a>
					<div class="row">
						<div class="col-xs-6"><input type="date" class="form-control" name="fecha_fin" placeholder="Fecha de inicio" required="required"></div>
						<div class="col-xs-6"><input type="time" class="form-control" name="hora_fin" placeholder="Hora de fin" required="required"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="form-group">
             				<input type="text" class="form-control" name="categoria" placeholder="Categoria" required="required">
       					 </div>										
					</div>
				</div>
				
				{{--File picker workplace--}}

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
			    
			    {{--#################--}}

				<div class="form-group">
					<div class="row">
						<div class="form-group">
             				<textarea name="descripcion" placeholder="Descripcion." required>
							</textarea>
       					 </div>
					</div>
				</div>
				<div class="form-group">
					<button id="fileupload" type="submit" name="files[]"  class="btn btn-success btn-lg btn-block">Crear</button>
				</div>
			</form>
		</div>
		<!------End Slider ------------>
	</div>
	<div class="footer">
		<div class="wrap">
			<div class="half-footer" style="margin-left:0">
				<ul class="feeds">
					<h3>Funciones.</h3>
					<li>
						<a href="">Categorias de eventos.</a>
					</li>
					<li>
						<a href="">Eventos.</a>
					</li>
					<li>
						<a href="">Crear tu evento.</a>
					</li>
					<li>
						<a href="">Comparte tu evento.</a>
					</li>
					<li>
						<a href="">Eventos por ubicacion.</a>
					</li>
				</ul>
				<div class="footer-pic">
					<img src="../images/f-icon.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
			<div class="half-footer" style="border:none">
				<ul class="adress">
					<h3>Informacion.</h3>
					<li>
						<a href="">EventsClub.</a>
					</li>
					<li>
						<a href="">Barranquilla.</a>
					</li>
					<li>
						<a href="">Universidad del norte.</a>
					</li>
					<li>
						<a href="">Diseño de software.</a>
					</li>
					<li>
						<a href="">TuringSoft.</a>
					</li>
				</ul>
				<div class="footer-pic">
					<img src="../images/foot-icon.png" alt="">
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="copy">
		<p>© 2013 Events Club.All Rights Reserved | Design by
			<a href="http://w3layouts.com">W3Layouts</a>
		</p>
	</div>


{{--File picker scripts--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
<script src="File-Upload/js/vendor/jquery.ui.widget.js"></script>
<script src="File-Upload/js/jquery.iframe-transport.js"></script>
<script src="File-Upload/js/jquery.fileupload.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>

$(function () {
    'use strict';
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

{{--#################--}}



</body>

</html>

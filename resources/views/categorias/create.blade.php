{{-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/categoria">
		{{csrf_field()}}
		<input type="text" name="descripcion">
		<input type="text" name="nombre">

		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
		<input name="_method" type="hidden" value="{{ 'post' }}"/>


		<input type="submit" name="enviar" value="Enviar categoria">
	</form>
</body>
</html> --}}

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Events Club a Entertainment Category Website Template | Home :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="../js/jquery.nivo.slider.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		$(window).load(function () {
			$('#slider').nivoSlider();
		});
	</script>
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
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
		margin-top: -30px;
	}
	.signup-form h2{
		color: #610B4B;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
		font-family: 'caviar_dreamsregular';
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
		left: 0;
		font-family: 'caviar_dreamsregular';
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
		width: 340px;
		height: 300px;
		font-family: 'caviar_dreamsregular';
	}

	SELECT{
		width: 160px;
	    height: 300;
	}
</style>
</head>

<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<a href="../index.html">
						<img src="../images/logo.png" alt="" />
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
			<form action="/categoria" method="post">
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
				<input name="_method" type="hidden" value="{{ 'post' }}"/>
				{{ csrf_field() }}
				<h2>Categoria</h2>
				<p class="hint-text">Crea tu categoria.</p>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-6"><input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required"></div>
						
					</div>
				</div>
			
				<div class="form-group">
					<div class="row">
						<div class="form-group">
             				<textarea name="descripcion" placeholder="Descripcion." required>
							</textarea>
       					 </div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg btn-block">Crear</button>
				</div>
			</form>
		</div>
		<!------End Slider ------------>
	</div>
	<div class="main">

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
</body>

</html>

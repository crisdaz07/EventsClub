<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	<title>Events Club a Entertainment Category Website Template | Events :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<style >
		.header a1{
			color: #610B4B;
			font-family: 'caviar_dreamsregular';
		}
		.grid_1_of_3 h4{
			color: #ffffff;
			font-weight: bold;
			font-family: 'caviar_dreamsregular';
		}
		.content_top h3{
			color: #ffffff;
			font-size: 100px;
			font-family: 'caviar_dreamsregular';
		}
		.event-time a{
			color: #dc00ff;
			font-size: 25px;
		}
	
	</style>
</head>

<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<a href="welcome">
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
						<li class="active">
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
	</div>
	<div class="main">
		<div class="wrap">
			<div class="content_top">
					<h3 align="center">{{ $nombre }}</h2>
				<div class="events">
					@foreach($ubicaciones as $u) 
					    <h2>{{ $u->ubicacion }}</h2>
						<div class="section group">
					    @foreach($eventos as $e) 
							@if( $e->ubicacion ==  $u->ubicacion )
						 		<div class="grid_1_of_3 events_1_of_3">
									<div class="event-time">
										<h4>
											<a href="../evento/{{ $e->id }}" >  {{ $e->nombre }} </a>
										</h4>
										<h4>{{ $e->fecha_inicio }}</h4>
									</div>
									<div class="event-img">
										<a href="blog.html">
											<img src="../images/Inicio/Rumba2.png" alt="">
										</a>
										<h4>{{ $e->descripcion }} </h4>
								    </div>
								</div>
							@endif
						@endforeach
						</div>
					@endforeach
				</div>
			</div>
		</div>
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
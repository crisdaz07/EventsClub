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
	
	<title>Events Club a Entertainment Category Website Template | About :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	
	<style >
		.header a1{
			color: #610B4B;
		}
	
	</style>
</head>

<body>
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<a href="welcome">
						<img src="images/logo.png" alt="" />
					</a>
				</div>
				<div class="menu">
					<ul>
						<li >
							<a href="welcome">INICIO</a>
						</li>
						<li>
							<a href="categorias">CATEGORIAS</a>
						</li>
						<!--<li>
							<a href="galeria">GALLERIA</a>
						</li>
						<li>
							<a href="blog">BLOG</a>
						</li>-->
						<li>
							<a href="contacto">CONTACTO</a>
						</li>
						<li class="active">
							<a href="about.html">NUESTRO EQUIPO</a>
						</li>
						<li>
							@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRO') }}</a>
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
				<div class="section group">
					<div class="col_1_of_3 span_1_of_3">
						<h2>
							<span>Acerca de nosotros.</span>
						</h2>
						<h4>Motivacion.</h4>
						<p>Somos un grupo de estudiantes de ingenieria de sistemas de 7mo semestre de La universidad del norte de Barranquilla, motivados por el gusto de aprender cada dia algo nuevo.</p>
					</div>
				<!--<div class="col_1_of_3 span_1_of_3">
						<div class="menu_timmings">
							<ul>
								<li>
									<div class="txt1">Main Menu</div>
									<div class="txt2 color1">12am - 12pm</div>
								</li>
								<li>
									<div class="txt1">Beer Festival</div>
									<div class="txt2 color2">9am - 8pm</div>
								</li>
								<li>
									<div class="txt1">Live Music</div>
									<div class="txt2 color3">7pm - 12pm</div>
								</li>
								<li>
									<div class="txt1">Disco Dance</div>
									<div class="txt2 color4">8pm - 2am</div>
								</li>
							</ul>
						</div>
					</div>-->
					<div class="col_1_of_3 span_1_of_3" style="margin-left: 300px ">
						<h2>
							<span>Numestro equipo.</span>
						</h2>
						<div class="event-grid">
							<div class="event_img">
								<img src="images/WhatsApp Image 2019-05-14 at 01.51.21.jpeg" title="post1" alt="">
							</div>
							<div class="event_desc">
								<h4>
									<span>Andres Pertuz</span>
								</h4>
								<h4>Lider.</h4>
								<h4>Diseñador.</h4>
								<h4>Analista.</h4>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="event-grid">
							<div class="event_img">
								<img src="images/IMG_20160730_124522.jpg"  title="post1" alt="">
							</div>
							<div class="event_desc">
								<h4>
									<span>Cristian Zapata</span>
								</h4>
								 <h4>Lider.</h4>
								<h4>Desarrollador.</h4>
								<h4>Analista.</h4>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
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
					<img src="images/f-icon.png" alt="">
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
					<img src="images/foot-icon.png" alt="">
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
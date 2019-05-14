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
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	
	<title>Events Club a Entertainment Category Website Template | Home :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('#slider').nivoSlider();
		});
	</script>
	
	<style >
		.header a1{
			color: #610B4B;
		}
		.event-time h4{
			color: #EF008A;
			font-weight: bold;
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
								<a href="welcome">INICIO</a>
							@else
								<a href="welcome">INICIO</a>
							@endif
						</li>
						<li class="active">
							<a href="categorias">CATEGORIAS</a>
						</li>
						<li>
							<a href="galeria">GALLERIA</a>
						</li>
						<li>
							<a href="blog">BLOG</a>
						</li>
						<li>
							<a href="contacto">CONTACTO</a>
						</li>
						<li>
							<a href="acerca"> EQUIPO</a>
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
	<div class="wrap">
			<div class="slider">
				<div class="slider-wrapper theme-default">
					<div id="slider" class="nivoSlider">
						<img src="images/Inicio/Atlantijazz_0.png" data-thumb="images/Inicio/Atlantijazz_0.png" alt="" />
						<img src="images/Inicio/Killart2.png" data-thumb="images/Inicio/Killart2.png" alt="" />
						<img src="images/Inicio/LaTiendita.PNG" data-thumb="images/Inicio/LaTiendita.PNG" alt="" />
						<img src="images/Inicio/Libraq2.png" data-thumb="images/Inicio/Libraq2.png" alt="" />
						<img src="images/Inicio/animalaton2.png" data-thumb="images/Inicio/animalaton2.png" alt="" />
						<img src="images/Inicio/CiudadadoHonor2.png" data-thumb="images/Inicio/CiudadadoHonor2.png" alt="" />
						<img src="images/Inicio/Cuentos2.png" data-thumb="images/Inicio/Cuentos2.png" alt="" />
						<img src="images/Inicio/Huellitas2.png" data-thumb="images/Inicio/Huellitas2.png" alt="" />
						<img src="images/Inicio/PetLoversjpg.jpg" data-thumb="images/Inicio/PetLoversjpg.jpg" alt="" />
						<img src="images/Inicio/Rumba2.png" data-thumb="images/Inicio/Rumba2.png" alt="" />
						<img src="images/Inicio/Tapaton2.png" data-thumb="images/Inicio/Tapaton2.png" alt="" />
						<img src="images/Inicio/Trueque.jpg" data-thumb="images/Inicio/Trueque.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="wrap">
			<div class="content_top">
				<div class="events">
					@foreach($categorias as $c) 
					    <a href="/categoria/{{ $c->nombre }}"> <h2>{{ $c->nombre }}</h2> </a>
						<div class="section group">
					    @foreach($eventos as $e) 
							@if( $c->id ==  $e->id_categoria )
						 		<div class="grid_1_of_3 events_1_of_3">
									<div class="event-time">
										<a href="../evento/{{ $e->id }}">
											<h4> {{ $e->nombre }}</h4>
										</a>
										<h4>{{ $e->fecha_inicio }}</h4>
									</div>
									<div class="event-img">
										<a href="blog.html">
											<img src="images/Inicio/Rumba2.png" alt="">
										</a>
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
					<h3>Our Latest feeds</h3>
					<li>
						<a href="index.html">Lorem ipsum dolor consectetur adiping</a>
					</li>
					<li>
						<a href="blog.html">Nunc sagittis mollis eros, at venenatis</a>
					</li>
					<li>
						<a href="blog.html">Morbi nec dolor ipsum vel congugue</a>
					</li>
					<li>
						<a href="blog.html">Nullam a odio ipsum, at sodales lorem.</a>
					</li>
					<li>
						<a href="contact.html">Nullam imperdiet vulputate congugue</a>
					</li>
				</ul>
				<div class="footer-pic">
					<img src="images/f-icon.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
			<div class="half-footer" style="border:none">
				<ul class="adress">
					<h3>Catch on</h3>
					<li>
						<a href="index.html">Events Club</a>
					</li>
					<li>
						<a href="blog.html">West Coast, CA</a>
					</li>
					<li>
						<a href="blog.html">Facebook - I Music</a>
					</li>
					<li>
						<a href="blog.html">Login</a>
					</li>
					<li>
						<a href="mailto:example@mail.com">yourname(at)companyname.com</a>
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
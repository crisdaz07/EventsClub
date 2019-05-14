<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<htm lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	
	<title>Events Club a Entertainment Category Website Template | Home :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('css/slider.css') }}" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="{{asset('js/jquery-1.9.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.nivo.slider.js') }}"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('#slider').nivoSlider();
		});
	</script>
	<style >
		<style >
	.content_top img{
		height: 300px;
	    width: 250px;
	}
	
	.content_top.event-img h2{
		font-size: 100px;
	}
	.container h2{
		color: white;
		font-family: 'caviar_dreamsregular';
	}
	 
	.carousel-control-prev span{
		margin-right:  150px;
	}
	.carousel-inner{
		margin-left: 25px;
	}
	
</style>
	
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
						<li class="active">
							<a href="home">INICIO</a>
						</li>
						<li>
							<a href="categorias">CATEGORIAS</a>
						</li>
						<!--<li>
							<a href="galeria">GALLERIA</a>
						</li>-->
						<li>
							<a href="contacto">CONTACTO</a>
						</li>
						<li>
							<a href="acerca">NUESTRO EQUIPO</a>
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
	<div class="container">
	  <div class="carousel slide" data-ride="carousel" id="multi_item">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<div class="row">
			  <div class="col-sm">
				  @foreach($categorias1 as $ca)
						<div class="grid_1_of_3 events_1_of_3">
							<a href="/categoria/{{ $ca->nombre }}" >
								<h2 style="font-size: 40px" >{{ $ca->nombre }}</h2>
							</a>
							<div class="event-img">
								<a href="">
									<img src="../images/Inicio/Rumba2.png" alt="">
								</a>
								<h2 style="font-size: 20px" > {{ $ca->descripcion }} </h2>
							</div>	
						</div>
					@endforeach	
			  </div>
			</div>
		  </div>
		 @foreach ($categorias->chunk(3) as $chunk)
			<div class="carousel-item">
				<div class="row">
					<div class="col-sm">
						@foreach ($chunk as $c)
						<div class="grid_1_of_3 events_1_of_3">
							<a href="/categoria/{{ $c->nombre }}" >
								<h2 style="font-size: 40px" >{{ $c->nombre }}</h2>
							</a>
							<div class="event-img">
								<a href="">
									<img src="../images/Inicio/Rumba2.png" alt="">
								</a>
								<h2 style="font-size: 20px" > {{ $c->descripcion }} </h2>
							</div>
						</div>
						@endforeach
					</div>
				</div>
		   </div>
		@endforeach	
		</div>
		<a class="carousel-control-prev" href="#multi_item" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#multi_item" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
</div>
		
		<!------End Slider ------------>
	</div>
	<div class="main">
		<div class="wrap">
			<div class="section group">
				<div class="listview_1_of_3 images_1_of_3 event_grid">
					<a href="events.html">
						<div class="listimg listimg_1_of_2">
							<img src="images/event_1.jpg" alt="" />
						</div>
						<div class="text list_1_of_2">
							<div class="date">
								<figure>
									<span>PROXIMO</span>EVENTO</figure>
							</div>
						</div>
					</a>
				</div>
				<div class="listview_1_of_3 images_1_of_3 event_grid">
					<a href="events.html">
						<div class="listimg listimg_1_of_2">
							<img src="images/event_2.jpg" alt="" />
						</div>
						<div class="text list_1_of_2">
							<div class="date">
								<figure>
									<span>PROXIMO</span>EVENTO</figure>
							</div>
							
						</div>
					</a>
				</div>
				<div class="listview_1_of_3 images_1_of_3 event_grid">
					<a href="events.html">
						<div class="listimg listimg_1_of_2">
							<img src="images/event_3.jpg" alt="" />
						</div>
						<div class="text list_1_of_2">
							<div class="date">
								<figure>
									<span>PROXIMO</span>EVENTO</figure>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="content_bottom">
				<div class="section group">
					<div class="col_1_of_3 span_1_of_3 today_show">
						<h3>Eventos hoy</h3>
						<img src="images/Inicio/Atlantijazz_0.png" alt="" />
						<h5>
							<span>01 Abril</span>
						</h5>
						<h5>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore-magna aliqua. </h5>
						<a href="#" class="button">Ver Más</a>
					</div>
					<div class="col_1_of_3 span_1_of_3">
						<h3>New Tracks</h3>
						<div class="track_list">
							<ul>
								<li>
									<a href="#">consectetur adipisicing elit</a>
								</li>
								<li>
									<a href="#">sed do eiusmod tempor incididunt</a>
								</li>
								<li>
									<a href="#">labore et dolore magna aliqua.</a>
								</li>
								<li>
									<a href="#">sed do eiusmod tempor</a>
								</li>
								<li>
									<a href="#">abore et dolore magna</a>
								</li>
								<li>
									<a href="#">incididunt ut labore et dolore</a>
								</li>
								<li>
									<a href="#">dolore magna aliqua</a>
								</li>
								<li>
									<a href="#">adipisicing elit, sed do eiusmod</a>
								</li>
								<li>
									<a href="#">incididunt ut labore et dolore</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col_1_of_3 span_1_of_3">
						<h3>Ultimos Videos</h3>
						<a href="gallery.html">
							<img src="images/videos.jpg" alt="" />
						</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna-->aliqua. </p>
						<a href="gallery.html" class="button">Ver Todos</a>
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
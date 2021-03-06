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
	
	<title>Events Club a Entertainment Category Website Template | Gallery :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<!------ Light Box ------>
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function ($) {
			$(".swipebox").swipebox();
		});
	</script>
	
	<style >
		.header a1{
			color: #610B4B;
		}
	
	</style>
	<!------ Eng Light Box ------>
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
						<li  class="active">
							<a href="galeria">GALLERIA</a>
						</li>
						<li>
							<a href="contacto">CONTACTO</a>
						</li>
						<li>
							<a href="acerca">EQUIPO</a>
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
				<div class="gallery">
					<h3>Latest Photos</h3>
					<div class="section group">
						<div class="grid_1_of_4 images_1_of_4">
							<a href="images/gallery_img1_b.jpg" class="swipebox" title="Image Title">
								<img src="images/gallery_img1.jpg" alt="">
								<span class="zoom-icon"></span>
							</a>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<a href="images/gallery_img2_b.jpg" class="swipebox" title="Image Title">
								<img src="images/gallery_img2.jpg" alt="">
								<span class="zoom-icon"></span>
							</a>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<a href="images/gallery_img3_b.jpg" class="swipebox" title="Image Title">
								<img src="images/gallery_img3.jpg" alt="">
								<span class="zoom-icon"></span>
							</a>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<a href="images/gallery_img4_b.jpg" class="swipebox" title="Image Title">
								<img src="images/gallery_img4.jpg" alt="">
								<span class="zoom-icon"></span>
							</a>
						</div>
					</div>
					<div class="section group">
						<div class="grid_1_of_4 images_1_of_4">
							<a href="images/gallery_img5_b.jpg" class="swipebox" title="Image Title">
								<img src="images/gallery_img5.jpg" alt="">
								<span class="zoom-icon"></span>
							</a>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<a href="images/gallery_img6_b.jpg" class="swipebox" title="Image Title">
								<img src="images/gallery_img6.jpg" alt="">
								<span class="zoom-icon"></span>
							</a>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<a href="images/gallery_img7_b.jpg" class="swipebox" title="Image Title">
								<img src="images/gallery_img7.jpg" alt="">
								<span class="zoom-icon"></span>
							</a>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<a href="images/gallery_img8_b.jpg" class="swipebox" title="Image Title">
								<img src="images/gallery_img8.jpg" alt="">
								<span class="zoom-icon"></span>
							</a>
						</div>
					</div>
					<div class="projects-bottom-paination">
						<ul>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
						</ul>
					</div>
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
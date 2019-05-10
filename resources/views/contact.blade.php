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
	
	<title>Events Club a Entertainment Category Website Template | Contact :: w3layouts</title>
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
						<li>
							<a href="home">INICIO</a>
						</li>
						<li>
							<a href="eventos">EVENTOS</a>
						</li>
						<li >
							<a href="galeria">GALLERIA</a>
						</li>
						<li>
							<a href="blog">BLOG</a>
						</li>
						<li>
							<a href="contacto">CONTACTO</a>
						</li>
						<li class="active">
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
				<div class="contact">
					<div class="section group">
						<div class="col_1_of_3 contact_1_of_3">
							<div class="contact-form">
								<h3>Get In Touch</h3>
								<form>
									<div>
										<span>
											<input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
										</span>
									</div>
									<div>
										<span>
											<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
										</span>
									</div>
									<div>
										<span>
											<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
										</span>
									</div>
									<div>
										<span>
											<input type="submit" class="mybutton" value="Submit">
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col_1_of_3 contact_1_of_3">
							<div class="company_address">
								<h3>Address</h3>
								<p>500 Lorem Ipsum Dolor Sit,</p>
								<p>22-56-2-9 Sit Amet, Lorem,</p>
								<p>USA</p>
								<p>Phone:(00) 222 666 444</p>
								<p>Fax: (000) 000 00 00 0</p>
								<p>Email:
									<span>
										<a href="mailto:info@example.com">mail@example.com</a>
									</span>
								</p>
								<p>Follow on:
									<span>Facebook</span>,
									<span>Twitter</span>
								</p>
							</div>
						</div>
						<div class="col_1_of_3 contact_1_of_3">
							<div class="contact_info">
								<h3>Find Us Here</h3>
								<div class="map">
									<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4246.12242861038!2d-74.85363639758782!3d11.01850028350056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42c69cf951223%3A0xb2f7c32f1266fea8!2sUninorte!5e0!3m2!1ses!2sco!4v1554051102216!5m2!1ses!2sco"></iframe>
									<br>
									<small>
										<a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265"
										    style="color:#F39EFF;;text-align:left;font-size:0.85em">View Larger Map</a>
									</small>
								</div>
							</div>
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
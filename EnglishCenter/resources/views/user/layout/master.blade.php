<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Template</title>
	<base href="{{asset('')}}">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="source_web/css/bootstrap.min.css">

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="source_web/css/owl.carousel.css">
	<link type="text/css" rel="stylesheet" href="source_web/css/owl.theme.default.css">

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="source_web/css/magnific-popup.css">

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="source_web/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="source_web/css/style.css">
</head>

<body>
	<!-- Header -->
	<div id="web_page">
		<div class="bg-img" style="background-image: url('source_web/img/background1.jpg'); width: 100%;height: 100%">
			<div class="overlay"></div>
		</div>
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.png" alt="logo">
							<img class="logo-alt" src="img/logo-alt.png" alt="logo">
						</a>
					</div>
					<div class="nav-collapse">
						<span></span>
					</div>
				</div>
				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li class="active"><a href="#home">Home</a></li>
					<li class=""><a href="#about">About</a></li>
					<li class=""><a href="#portfolio">Portfolio</a></li>
					<li class=""><a href="#service">Services</a></li>
					<li><a href="#pricing">Prices</a></li>
					<li><a href="#team">Team</a></li>
					<li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li>
					<li class=""><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						@yield('page_content') 
					</div>				
				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</div>
	<footer id="footer" class="sm-padding bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-copyright">
						<p>Copyright © 2017. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="source_web/js/jquery.min.js"></script>
	<script type="text/javascript" src="source_web/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="source_web/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="source_web/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="source_web/js/main.js"></script>
</body></html>
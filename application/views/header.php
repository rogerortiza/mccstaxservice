<!DOCTYPE HTML>
<html>
	<head>
		<title>MCCS Tax Service</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Facebook messenger -->
		<!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		<script>
			window.fbAsyncInit = function() {
			FB.init({
				xfbml            : true,
				version          : 'v9.0'
			});
			};

			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Your Chat Plugin code -->
		<div class="fb-customerchat"
			attribution=setup_tool
			page_id="103601571595772"
			theme_color="#0A7CFF"
			logged_in_greeting="Hola! Como te podemos apoyar el dia de hoy?"
			logged_out_greeting="Hola! Como te podemos apoyar el dia de hoy?">
		</div>

		<!-- Header -->
			<header id="header" class="alt">
                <h1><a href="<?php echo base_url() ?>">MCCS <span>Tax Service</span></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>
							<a href="#" class="submenu fa-angle-down">Servicios</a>
							<ul>
							<li><a href="left-sidebar.html">Declaracion de Impuestos</a></li>
								<li><a href="right-sidebar.html">Seguro de Auto sin licencia</a></li>
								<li><a href="no-sidebar.html">Aplicacion numero ITIN</a></li>
                                <li><a href="no-sidebar.html">Servicio de Notario</a></li>
							</ul>
						</li>
					</ul>
				</nav>
            </header>
            
        <!-- Banner -->
			<section id="banner">
				<article>
					<img src="assets/images/tax-man.jpg" alt="" />
					<div class="inner">
						<h2>MCCS Tax Service and Insurance</h2>
					</div>
				</article>
				<article>
					<img src="assets/images/tax-man2.jpg" alt="" />
					<div class="inner">
						<h2>Nos renovamos para ti</h2>
					</div>
				</article>
				<article>
					<img src="assets/images/tax2.jpg"  alt="" />
					<div class="inner">
						<h2>Para ofrecerte una mejor calidad de servicio</h2>
					</div>
				</article>
			</section>
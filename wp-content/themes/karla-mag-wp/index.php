<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Karla Martinez - Web Magazine</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />

	<link href="https://fonts.googleapis.com/css?family=Neuton:300,400,700|Open+Sans:400,400i,700" rel="stylesheet">

</head>
<body>

	<header id="header">
		<h2 class="neuton light">Karla Martínez<span class="light_grey">.com</span></h2>
		<nav id="menu">
			<ul>
				<li class="active"><a href="#">Inicio</a></li>
				<li><a href="#">Cocinando con Karla</a></li>
				<li><a href="#">Entre Amigas</a></li>
				<li><a href="#">Fashion & Beauty</a></li>
				<li><a href="#">Invitados Deluxe</a></li>
				<li><a href="#">No Estás Sola</a></li>
			</ul>
		</nav>
	</header>

	<div class="u-full-width" id="home_banner">
		<div class="container">
			<div class="row">
				<div class="seven columns">
					<h1 class="neuton light">Actriz. Modelo. Mamá. Experta en Estilo</h1>
					<div class="six columns no_initial_margin">
						<p>Karla comparte contigo sus mejores secretos cada día, disfruta y comparte</p>
						<small>Karla Martínez</small>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Artículos recientes -->
	<div class="container">

		<div class="align_center">
			<h2 class="light_grey">Lo más reciente</h2>
		</div>

		<ul class="post_list row">
			<li class="six columns"><a href="#">
				<p class="category">Cocinando con Karla</p>
				<img class="u-full-width" src="<?php echo get_template_directory_uri(); ?>/imgs/sample_image.jpg" alt="Sample Image">
				<h3 class="neuton">Desayuno saludable para épocas decembrinas</h3>
			</a></li>
			<li class="six columns"><a href="#">
				<p class="category">Cocinando con Karla</p>
				<img class="u-full-width" src="<?php echo get_template_directory_uri(); ?>/imgs/sample_image.jpg" alt="Sample Image">
				<h3 class="neuton">Desayuno saludable para épocas decembrinas</h3>
			</a></li>
		</ul>

		<ul class="post_list row">
			<li class="four columns"><a href="#">
				<p class="category">Cocinando con Karla</p>
				<img class="u-full-width" src="<?php echo get_template_directory_uri(); ?>/imgs/sample_image.jpg" alt="Sample Image">
				<h4 class="neuton">Desayuno saludable para épocas decembrinas</h4>
			</a></li>
			<li class="four columns"><a href="#">
				<p class="category">Cocinando con Karla</p>
				<img class="u-full-width" src="<?php echo get_template_directory_uri(); ?>/imgs/sample_image.jpg" alt="Sample Image">
				<h4 class="neuton">Desayuno saludable para épocas decembrinas</h4>
			</a></li>
			<li class="four columns"><a href="#">
				<p class="category">Cocinando con Karla</p>
				<img class="u-full-width" src="<?php echo get_template_directory_uri(); ?>/imgs/sample_image.jpg" alt="Sample Image">
				<h4 class="neuton">Desayuno saludable para épocas decembrinas</h4>
			</a></li>
		</ul>

		<div class="align_center">
			<a class="button" href="#">Ver Todos los Artículos Recientes</a>
		</div>

	</div>
	<!-- /Artículos recientes -->

	<footer id="footer">
		<div class="go_up"><a href="#"><small>Volver arriba ↑</small></a></div>
		<div class="container">
			<div class="row">
				<img class="four columns offset-by-two" src="<?php echo get_template_directory_uri(); ?>/imgs/karla_profile.png" alt="Karla"></img>
				<div class="four columns">
					<h5><strong>Acerca de Karla</strong></h5>
					<p class="neuton">Karla es una persona de muchos y muy diversos talentos, y con una personalidad magnética, originaria de Ciudad Juárez, Chihuahua. Actualmente es co-anfitriona del pupular show matutino ‘Despierta America’ en la cadena Univisión.</p>
				</div>
			</div>
			<div class="row copyright">
				<small class="eight columns offset-by-two">© Karla Martínez 2016. <a href="#">Ver nuestro aviso de privacidad.</a></small>
			</div>
		</div>
	</footer>

</body>
</html>

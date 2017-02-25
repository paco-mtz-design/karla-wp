<!doctype html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />

	<link href="https://fonts.googleapis.com/css?family=Neuton:300,400,700|Open+Sans:400,400i,700" rel="stylesheet">

</head>
<body <?php body_class(); ?>>

	<header id="header">
		<h2 class="neuton light">Karla Martínez<span class="light_grey">.com</span></h2>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_id' => 'menu' ) ); ?>
		<!-- <nav id="menu">
			<ul>
				<li class="active"><a href="#">Inicio</a></li>
				<li><a href="#">Cocinando con Karla</a></li>
				<li><a href="#">Entre Amigas</a></li>
				<li><a href="#">Fashion & Beauty</a></li>
				<li><a href="#">Invitados Deluxe</a></li>
				<li><a href="#">No Estás Sola</a></li>
			</ul>
		</nav> -->
	</header>

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
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />

	<link href="https://fonts.googleapis.com/css?family=Neuton:300,400,700|Open+Sans:400,400i,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body <?php body_class(); ?>>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-92821664-1', 'auto');
		ga('send', 'pageview');
	</script>

	<script>
	$(document).ready(function(){
		$("#nav-mobile").html($("#menu").html());
		$("#nav-trigger span").click(function(){
			if ($("nav#nav-mobile ul").hasClass("expanded")) {
				$("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
				$(this).removeClass("open");
			} else {
				$("nav#nav-mobile ul").addClass("expanded").slideDown(250);
				$(this).addClass("open");
			}
		});
	});
	</script>

	<header id="header">
		<h2 class="neuton light"><a href="<?php echo home_url(); ?>" title="<?php wp_title(''); ?>">Karla Martínez<span class="light_grey">.tv</span></a></h2>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_id' => 'menu' ) ); ?>

		<div id="nav-trigger">
			<span>Menu</span>
		</div>

		<nav id="nav-mobile"></nav>

	</header>

<?php ?>
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
</head>

	<body <?php body_class(); ?>>

		<div class="section hero">
			<div class="container">
				<div class="row" style="margin-top: 100px;">
					<div class="one-half column">
						<h2 class="hero-heading">Estamos realizando ajustes al sitio.</h2>
						<h4 class="hero-heading">Deberás poder ver el contenido normal de karlamartinez.tv en breve, gracias por la espera</h4>
						<!-- a class="button button-primary" href="http://getskeleton.com">Avísame cuando esté listo</a -->
					</div>
					<div class="one-half column">
					</div>
				</div>
			</div>
		</div>

	</body>
</html>

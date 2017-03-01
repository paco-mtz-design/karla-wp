<?php get_header(); ?>

	<div class="u-full-width" id="home_banner" style="background-image: url('<?php echo(the_field('foto_de_portada_inicio'));?>');">
		<div class="container">
			<div class="row">
				<div class="nine columns">
					<h1 class="neuton light"><?php echo(the_field('texto_destacado'));?></h1>
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
			<?php
				$args = array( 'numberposts'=> '2' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){

					$cats = get_the_category($recent["ID"]);
					foreach($cats as $cat) {$printable_cat = $cat->name." ";}
					if (has_post_thumbnail($recent["ID"])){
						$recent_post_thumb = get_the_post_thumbnail_url($post = $recent["ID"], $size = 'post-thumbnail');
					};


					echo '<li class="six columns"><a href="'.get_permalink($recent["ID"]).'">
					<p class="category">'.
						$printable_cat
					.'</p>
					<img class="u-full-width" src="'.$recent_post_thumb.'" alt="'.$recent["post_title"].'">
					<h3 class="neuton">'.
						$recent["post_title"]
					.'</h3>
					</a></li>';
				}
			?>
		</ul>

		<ul class="post_list row">
			<?php
				$args = array( 'numberposts'=> '3', 'offset' => 2 );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){

					$cats = get_the_category($recent["ID"]);
					foreach($cats as $cat) {$printable_cat = $cat->name." ";}
					if (has_post_thumbnail($recent["ID"])){
						$recent_post_thumb = get_the_post_thumbnail_url($post = $recent["ID"], $size = 'post-thumbnail');
					};


					echo '<li class="four columns"><a href="'.get_permalink($recent["ID"]).'">
					<p class="category">'.
						$printable_cat
					.'</p>
					<img class="u-full-width" src="'.$recent_post_thumb.'" alt="'.$recent["post_title"].'">
					<h4 class="neuton">'.
						$recent["post_title"]
					.'</h4>
					</a></li>';
				}
			?>
		</ul>

		<div class="align_center">
			<a class="button" href="<?php echo get_template_directory_uri(); ?>/archivo">Ver Todos los Artículos Recientes</a>
		</div>

	</div>
	<!-- /Artículos recientes -->

	<?php get_footer(); ?>

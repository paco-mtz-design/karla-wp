<!-- Relacionado -->
<div class="container">

	<div class="align_center">
		<h3 class="light_grey">Relacionado</h3>
	</div>


	<ul class="post_list row">
		<?php
			$args = array(
				'orderby' => 'title',
				'order'   => 'DESC',
				'posts_per_page' => 3
			);
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post();
		?>
		<li class="four columns">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				<p class="category">
					<?php
						$cat_name = get_the_category();
						echo($cat_name[0]->name);
					?>
				</p>
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail('feeds-thumb', array( 'class' => 'u-full-width')); // Fullsize image for the single post ?>
				<?php endif; ?>
				<h4 class="neuton"><?php the_title(); ?></h4>
			</a>
		</li>
		<?php
			endwhile;
		}
			wp_reset_query();
		?>
	</ul>


	<div class="align_center">
		<a class="button" href="#">Ver Todos los Artículos Recientes</a>
	</div>

</div>
<!-- /Artículos recientes -->

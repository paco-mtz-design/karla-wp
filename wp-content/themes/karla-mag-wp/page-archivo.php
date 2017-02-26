<?php get_header(); ?>

<!-- Artículos recientes -->
<div class="container">

	<div class="align_center">
		<h3 style="margin-top: 60px;">Todos los artículos</h3>
	</div>

	<?php	$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
	<?php if ( $wpb_all_query->have_posts() ) : ?>

	<ul class="post_list row">
		<!-- the loop -->
		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		<li class="four columns no_initial_margin">
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
				<small style="margin: 8px 0"><?php the_time('d-m-y'); ?></small>
				<h4 class="neuton"><?php the_title(); ?></h4>
			</a>
		</li>
		<?php endwhile; ?>
		<!-- end of the loop -->
	</ul>

	<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php _e( 'No encontramos contenido de acuerdo a tu búsqueda.' ); ?></p>
	<?php endif; ?>


	</div>
	<!-- Termina Artículos recientes -->

<?php get_footer(); ?>

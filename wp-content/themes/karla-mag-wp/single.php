<?php get_header(); ?>

	<div class="container">
		<article id="single_post_body" class="row">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="featured_image">
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<?php the_post_thumbnail('full', array( 'class' => 'u-full-width', 'alt' => 'Karla')); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->
		</div>

		<!-- Cuerpo del Artículo -->
		<div class="post_content ten columns offset-by-one" id="post-<?php the_ID(); ?>" >

			<div class="single_post_meta">
				<p class="category">
					<?php
						$cat_name = get_the_category();
						echo($cat_name[0]->name);
					?>
				</p>
				<h2 class="neuton"><?php the_title(); ?></h2>
				<p class="post_date"><?php the_time('d / m / y'); ?></p>
			</div>

			<blockquote class="excerpt"><?php echo get_the_excerpt(); // Dynamic Content ?></blockquote>
			<?php the_content(); // Dynamic Content ?>
			<?php get_template_part('social-sharer') ?>
			
		</div>
		<!-- /Cuerpo del Artículo -->

	<?php endwhile; ?>

	<?php else: ?>
		<!-- Cuerpo del Artículo -->
		<div class="post_content ten columns offset-by-one">
			<h1>No se encontró ningún artículo, <a href="#">regresa al inicio</a>.</h1>
		</div>
		<!-- /Cuerpo del Artículo -->
	<?php endif; ?>

		</article>
	</div>

<?php  get_sidebar(); ?>

<?php get_footer(); ?>

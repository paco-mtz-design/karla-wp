<?php get_header(); ?>

	<div class="container">
		<article id="single_post_body" class="row">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- Cuerpo del Artículo -->
		<div class="page_content ten columns offset-by-one" id="post-<?php the_ID(); ?>" >

			<div class="single_post_meta">
				<h2 class="neuton"><?php the_title(); ?></h2>
			</div>

			<?php the_content(); // Dynamic Content ?>

		</div>
		<!-- /Cuerpo del Artículo -->

	<?php endwhile; ?>

	<?php else: ?>
		<!-- Cuerpo del Artículo -->
		<div class="post_content ten columns offset-by-one">
			<h3>No se encontró ningún artículo, <a href="<?php echo home_url(); ?>">regresa al inicio</a>.</h3>
		</div>
		<!-- /Cuerpo del Artículo -->
	<?php endif; ?>

		</article>
	</div>

<?php  get_sidebar(); ?>

<?php get_footer(); ?>

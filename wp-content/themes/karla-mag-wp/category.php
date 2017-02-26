<?php get_header(); ?>

<?php
// Check if there are any posts to display
if ( have_posts() ) : ?>

<div class="container category_banner">
	<div class="row">
			<?php
				// Mostrar la imagen de portada de la categoría
				$queried_object = get_queried_object();
				$taxonomy = $queried_object->taxonomy;
				$term_id = $queried_object->term_id;
			?>
			<div class="one-half-no-gutter column" id="category_image" style="background-image: url('<?php the_field('imagen_de_la_categoria', $taxonomy . '_' . $term_id);?>')">
		</div>
		<div class="one-half-no-gutter column category_meta" style="background-color: #D6FFAA">
			<div class="vertical_center">
				<h2 class="archive-title neuton"><?php single_cat_title(); ?></h2>
				<?php if ( category_description() ) : ?>
				<div class="archive_meta small">
					<?php echo category_description(); ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="container">

	<ul class="post_list row">
	<?php
	// The Loop
	while ( have_posts() ) : the_post(); ?>

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
				<h4 class="neuton"><?php the_title(); ?></h4>
			</a>
		</li>

	<?php endwhile; ?>
	</ul>

</div>

<?php else: ?>
	<!-- Cuerpo del Artículo -->
	<div class="post_content ten columns offset-by-one">
		<h1>No se encontró ningún artículo, <a href="#">regresa al inicio</a>.</h1>
	</div>
	<!-- /Cuerpo del Artículo -->
<?php endif; ?>

<?php get_footer(); ?>

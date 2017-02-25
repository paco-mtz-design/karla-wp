<footer id="footer">
	<?php $frontpage_id = get_option('page_on_front'); ?>
	<div class="go_up"><a href="#"><small>Volver arriba ↑</small></a></div>
	<div class="container">
		<div class="row">
			<img class="four columns offset-by-two" src="<?php echo the_field('foto_de_seccion_acerca', $frontpage_id) ?>" alt="Karla"></img>
			<div class="four columns">
				<h5><strong><?php echo(the_field('titulo_seccion_acerca', $frontpage_id)); ?></strong></h5>
				<p class="neuton"><?php echo(the_field('texto_seccion_acerca', $frontpage_id));?></p>
			</div>
		</div>
		<div class="row copyright">
			<small class="eight columns offset-by-two"><?php echo(the_field('mensaje_de_copyright', $frontpage_id));?><a href="<?php echo(the_field('liga_al_aviso_de_privacidad', $frontpage_id));?>">Ver nuestro <strong>Aviso de Privacidad</strong></a>.</small>
		</div>
	</div>
</footer>

</body>
</html>

<?php
/*
Template Name:  pagos
*/
?>

<?php get_header(); ?>



<body>
	<?php include_once("includes/analyticstracking.php") ?>

	<?php include("includes/menu-up.php"); ?>

	<section class="Contenedor-formasDepago">
		<div class="Contenedor-menu">
			<div class="Imagen">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
			</div> <!-- End of Imagen -->

			<?php include("includes/menu-internas.php"); ?>
		</div> <!-- Contenedor-menu -->
	</section> <!-- End of Contenedor-zapatos -->

	<section class="Cuerpo">
		<h2>Formas de pago</h2>
	</section> <!-- End of Cuerpo -->

	<section class="Cont-pagos">
		<article>
			<p>
				<?php query_posts("category_name=Pagos"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
			</p
		</article>
	</section> <!-- End of Cont-pagos -->

	<?php include("includes/pie-interno.php"); ?>

</body>
</html>
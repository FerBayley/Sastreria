<?php
/*
Template Name: eventos
*/
?>

<?php get_header(); ?>


<body>
	<?php include_once("includes/analyticstracking.php") ?>

	<?php include("includes/menu-up.php"); ?>

	<section class="Contenedor-eventos">
		<div class="Contenedor-menu">
			<div class="Imagen">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
			</div> <!-- End of Imagen -->

			<?php include("includes/menu-internas.php"); ?>
		</div> <!-- Contenedor-menu -->
	</section> <!-- End of Contenedor-zapatos -->

		<div class="Eventos">
			<section class="Cuerpo-especial">
				<h2>Casamientos y eventos</h2>
			</section> <!-- End of Cuerpo -->

			<div class="Contendio-eventos">
				<article>
					<p>
						<?php query_posts("category_name=Eventos"); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<p><?php the_content();?></p>
						<?php endwhile; else: ?>
							<p>No se encontraron productos cargados en esta sección.</p>
						<?php endif; ?>
					</p>
				</article>
			</div> <!-- Contenido-eventos -->
		</div> <!-- End of Eventos -->

	<?php include("includes/pie-interno.php"); ?>

</body>
</html>
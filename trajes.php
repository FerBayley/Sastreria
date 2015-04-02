<?php
/*
Template Name: trajes
*/
?>

<?php get_header(); ?>

<body>
	<?php include_once("includes/analyticstracking.php") ?>

	<?php include("includes/menu-up.php"); ?>

	<section class="Contenedor-trajes">
		<div class="Contenedor-menu">
			<div class="Imagen">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
			</div> <!-- End of Imagen -->

			<?php include("includes/menu-internas.php"); ?>
		</div> <!-- Contenedor-menu -->
	</section> <!-- End of Contenedor-zapatos -->

	<section class="Cuerpo">
		<h2>Trajes</h2>
	</section> <!-- End of Cuerpo -->

	<section class="Contenido">
		<div class="Col1">
			<div class="Emboltorio">
				<?php query_posts("category_name=trajes-col1"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title();?></h2>

					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
			</div> <!-- End of Emboltorio -->
		</div> <!-- End of Col1 -->

		<div class="Col2">
			<div class="Emboltorio">
				<?php query_posts("category_name=trajes-col2"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title();?></h2>
					<img src="img/trajes/ambo-1.jpg" width="684" height="513" alt="Ambo s100 Detalli">
					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
			</div> <!-- End of Emboltorio -->
		</div> <!-- End of Col2 -->

		<div class="Col3">
			<div class="Emboltorio">
				<?php query_posts("category_name=trajes-col3"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title();?></h2>
					<img src="img/trajes/ambo-1.jpg" width="684" height="513" alt="Ambo s100 Detalli">
					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
			</div> <!-- End of Emboltorio -->
		</div> <!-- End of Col3 -->

		<div class="Col4">
			<div class="Emboltorio">
				<?php query_posts("category_name=trajes-col4"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title();?></h2>
					<img src="img/trajes/ambo-1.jpg" width="684" height="513" alt="Ambo s100 Detalli">
					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
			</div> <!-- End of Emboltorio -->
		</div> <!-- End of Col4 -->
	</section> <!-- End of Contenido -->

	<?php include("includes/pie-interno.php"); ?>
	
</body>
</html>
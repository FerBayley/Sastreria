<?php
/*
Template Name: showroom
*/
?>

<?php get_header(); ?>

<body>
	<?php include_once("includes/analyticstracking.php") ?>

	<?php include("includes/menu-up.php"); ?>

	<section class="Contenedor-show">
		<div class="Contenedor-menu">
			<div class="Imagen">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
			</div> <!-- End of Imagen -->

			<?php include("includes/menu-internas.php"); ?>
		</div> <!-- Contenedor-menu -->
	</section> <!-- End of Contenedor-zapatos -->

	<section class="Cuerpo">
		<h2>Conoc&eacute; nuestro show room</h2>
	</section> <!-- End of Cuerpo -->


	<section class="Row1">
		<div class="Slider">
			<?php query_posts("category_name=slider"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
		</div> <!-- End of Slider -->
	</section> <!-- End of Row1 -->

	<section class="Row2">
		<div class="Galerias">
			<div class="Gal1">
				<?php query_posts("category_name=showroom-col1"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
			</div> <!-- End of Gal1 -->

			<div class="Gal2">
				<?php query_posts("category_name=showroom-col2"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
			</div> <!-- End of Gal2 -->

			<div class="Gal3">
				<?php query_posts("category_name=showroom-col3"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
			</div> <!-- End of Gal3 -->

			<div class="Gal4">
				<?php query_posts("category_name=showroom-col4"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="Thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</div><!-- End of Thumb -->

					<p><?php the_content();?></p>
				<?php endwhile; else: ?>
					<p>No se encontraron productos cargados en esta sección.</p>
				<?php endif; ?>
			</div> <!-- End of Gal4 -->
		</div> <!-- End of Galerias -->
	</section> <!-- End of Row1 -->

	<section class="Row3">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3283.8931388457763!2d-58.3757315!3d-34.6068636!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccad213160e1b%3A0x6fbe5700915d97db!2sAv+Pres.+Roque+S%C3%A1enz+Pena+615%2C+Buenos+Aires%2C+Ciudad+Aut%C3%B3noma+de+Buenos+Aires!5e0!3m2!1ses!2sar!4v1428435547647" width="800" height="300" frameborder="0" style="border:0"></iframe>
	</section> <!-- End of Row1 -->


	<?php include("includes/pie-interno.php"); ?>

</body>
</html>
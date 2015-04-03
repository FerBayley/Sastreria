<?php
/*
Template Name:  quienes-somos
*/
?>

<?php get_header(); ?>

<body>
	<?php include_once("includes/analyticstracking.php") ?>

	<?php include("includes/menu-up.php"); ?>

	<section class="Perfil-pablo">
		<div class="Col-Pablo1">
			<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
				<article>
					<p>
						<?php query_posts("category_name=Pablo"); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<p><?php the_content();?></p>
						<?php endwhile; else: ?>
							<p>No se encontraron productos cargados en esta sección.</p>
						<?php endif; ?>
					</p>
				</article>

				<div class="Firma">
					<h3>Pablo Anta <br> <span>
						<a href="mailto:pabloanta@detali.com">pabloanta@detali.com</a>
							</span>
					</h3>
				</div> <!-- End of Firma -->
			</div> <!-- End of Col-Pablo1 -->

		<div class="Col-Pablo2">
			<div class="Video">
				<a href="https://www.facebook.com/video.php?v=792295437529319&set=vb.464194760339390&type=2&theater" target="_blanck">
					<img src="<?php bloginfo('template_directory'); ?>/img/video.jpg" alt="Video Sastreia Detali">
				</a>
			</div> <!-- End of Video -->
		</div> <!-- End of Col-Pablo2 -->
	</section> <!-- End of Perfil-pablo -->

	<section class="Pie-pablo">
		<div class="Pie-perfilPablo">
			<ul>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/pinterest.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/instagram.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/google.png" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/linkedin.png" alt="">
					</a>
				</li>
			</ul>
		</div> <!-- End of Pie-perfilPablo -->
	</section>

<?php get_footer(); ?>

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

	<?php include ("includes/columna-100.php"); ?>
	<?php include ("includes/columna-130.php"); ?>
	<?php include("includes/pie-interno.php"); ?>

</body>
</html>
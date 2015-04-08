<?php
/*
Template Name: corbatas
*/
?>

<?php get_header(); ?>

<body>
	<?php include_once("includes/analyticstracking.php") ?>

	<?php include("includes/menu-up.php"); ?>

	<section class="Contenedor-corbatas">
		<div class="Contenedor-menu">
			<div class="Imagen">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
			</div> <!-- End of Imagen -->

			<?php include("includes/menu-internas.php"); ?>
		</div> <!-- Contenedor-menu -->
	</section> <!-- End of Contenedor-zapatos -->

	<section class="Cuerpo">
		<h2>Corbatas</h2>
	</section> <!-- End of Cuerpo -->

	<section class="Trajes__cien">
		<h3>Corbatas Yves Saint Laurent</h3>
	</section> <!-- End of 100 -->

	<?php include("includes/corbatas-detali.php"); ?>

	<section class="Trajes__cien">
		<h3>Corbatas Christian Lacroix</h3>
	</section> <!-- End of 100 -->

	<?php include("includes/corbatas-lacroix.php"); ?>

	<section class="Trajes__cien">
		<h3>Corbatas G. Redaelli seda italiana</h3>
	</section> <!-- End of 100 -->

	<?php include("includes/corbatas-redaelli.php"); ?>

	<?php include("includes/pie-interno.php"); ?>

</body>
</html>
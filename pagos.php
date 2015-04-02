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
				<strong>Los métodos de pago son simples, ud. puede abonar en efectivo o bien con 
						tarjeta de crédito.
				</strong>
			</p>

			<p>
				La consulta o pedidos desde la web no implica la compra del mismo. Al hacer una 
				consulta sobre un producto nos pondremos en contacto con Ud. para concretar la visita 
				de un vendedor. Una vez conforme con su producto, puede pautar la forma de pago con 
				el vendedor.
			</p>

			<p>
				Ahora también nos encontramos adheridos al programa Ahora12 por el cual puede 
				abonar sus compras en 12 cuotas sin interés.
			</p>
		
			<p>
				Show room
				<br>
				Dirección: Av Roque Saenz Peña 615 - Piso 5 Oficinas 512
				<br>
				Tel: 4-328-9656
				<br>
				E-mail: <a href="mailto:sastreria@detali.com.ar">sastreria@detali.com.ar</a>
			</p>
		</article>
	</section> <!-- End of Cont-pagos -->

	<?php include("includes/pie-interno.php"); ?>
	
</body>
</html>
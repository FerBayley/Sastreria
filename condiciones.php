<?php
/*
Template Name: condiciones
*/
?>

<?php get_header(); ?>


<body>
	<?php include_once("includes/analyticstracking.php") ?>
	
	<?php include("includes/menu-up.php"); ?>
	
	<section class="Contenedor-condiciones">
		<div class="Contenedor-menu">
			<div class="Imagen">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
			</div> <!-- End of Imagen -->

			<?php include("includes/menu-internas.php"); ?>
		</div> <!-- Contenedor-menu -->
	</section> <!-- End of Contenedor-zapatos -->

	<section class="Cuerpo">
		<h2>Condiciones</h2>
	</section> <!-- End of Cuerpo -->


	<section class="Contenido-condiciones">
		<article>
			<p>
				Es siempre preferible que conozca su talle de camisa y ambo al momento de solicitar una 
				serie de productos para que lo visitemos. En caso de que no lo sepa se ofrecerá dicho 
				producto en varios talles hasta calzar con el indicado.
			</p>

			<p>
				Poseemos un departamento administrativo que tanto vía mail o telefónicamente se comunicará 
				con usted para combinar visitas, pagos, o lo que fuera necesario.
			</p>

			<p>
				Los arreglos en el ambo de confección los realiza nuestra sastrería en caso de que fueran 
				necesarios, el costo de los mismos corre por cuenta del cliente.
			</p>

			<p>
				La sastrería y camisería de medida requiere el pago de un anticipo para iniciarse luego 
				de haber escogido la o las telas. Los arreglos o retoques, si es que estos fueran 
				necesarios, corren por cuenta de nuestra empresa. Hasta tanto el cliente no esté 
				satisfecho la venta no está terminada.
			</p>
		</article>
	</section> <!-- End of Contenido-condiciones -->

	<?php include("includes/pie-interno.php"); ?>
	
</body>
</html>
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
						Ofrecemos una atención exclusiva para eventos tales como casamientos, 
						cumpleaños de quince, eventos familiares o empresariales de diverso tipo.
					</p>

					<p>
						Tratamos de asesorar siempre al novio y a su grupo familiar, buscando la 
						distinción, combinando lo clásico y moderno. 
						Asesoramos siempre buscando que la vestimenta del novio se destaque pero 
						que al mismo tiempo no caiga en prendas antiguas y que difícilmente pueda 
						utilizar nuevamente. Buscando que las prendas del grupo familiar sean 
						distintas al del resto de los invitados, que se unan en texturas, colores 
						y detalles.
					</p>

					<p>
						Realizamos todas las pruebas y charlas que sean necesarias. Siempre estamos 
						a disposición para asesorar, probar y acompañar. Ofrecemos además promociones 
						especiales para estos eventos que hacen que nuestro trabajo sea además de 
						exclusivo y personalizado, accesible.

					</p>
				</article>
			</div> <!-- Contenido-eventos -->			
		</div> <!-- End of Eventos -->

	<?php include("includes/pie-interno.php"); ?>
	
</body>
</html>
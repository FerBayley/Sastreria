<section class="Columna-menu">
	<li><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Detali Sastreria Italiana"></li>

		<?php wp_nav_menu(
			array(
			'container' => false,
			'items_wrap' => '<ul>%3$s</ul>',
			'theme_location' => 'menu'
		)); ?>
</section> <!-- End of Columna-menu -->
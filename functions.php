<?php
register_nav_menus( array(
'menu' => 'Menu Principal',
'menu-up' => 'Menu Up',
'menu-interno' => 'Menu Interno',
));


//Thumb de las imagenes en miniatura
add_theme_support( 'post-thumbnails' );
add_image_size( 'galeria_thumbs', 684, 513, true );

?>
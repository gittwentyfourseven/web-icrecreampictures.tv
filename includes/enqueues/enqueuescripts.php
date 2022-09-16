<?php

/*
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
ENCOLAR SCRIPTS (JS)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

function site_scripts() {

	/*
  	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	Registra y encola aquí tus ficheros JS
	Aplica "false" para desactivar lo que no uses, nuestro sitio será ligero como un fotón
	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	*/

	$bootstrap 		= false;
	$generales 		= true;
	$masonry 		= false;
	$menu_lateral 	= false;
	$slick 			= true;

	// Bootstrap
	if ( $bootstrap ) :
		wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/vendors/bootstrap.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'bootstrap', $in_footer = true );
	endif;
	// Slick
	if ( $slick ) :
		wp_register_script( 'slick', get_template_directory_uri() . '/js/vendors/slick.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'slick', $in_footer = true); // $in_footer = true hace que el encolado sea antes de cerrar el </body> en lugar de en el <head>
	endif;
	// Letter Animate
	wp_register_script( 'anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', false, null );
	wp_enqueue_script( 'anime' );
	// Scripts generales
	if ( $generales ) :
		wp_register_script( 'main', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'main', $in_footer = true); // $in_footer = true hace que el encolado sea antes de cerrar el </body> en lugar de en el <head>
	endif;

	// Menú lateral
	if ( $menu_lateral ) :
		wp_register_script( 'offcanvas', get_template_directory_uri() . '/js/vendors/form5-offcanvas.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'offcanvas', $in_footer = true );
		wp_register_script( 'tabs', get_template_directory_uri() . '/js/vendors/form5-tabs.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'tabs', $in_footer = true );
	endif;

	// Masonry + ImagesLoaded
	// - Para activarla también hay que descomentar el script del /footer.php
	// - Los estilos ya están incluidos en /css/main.css
	if ( $masonry ) :
		if ( is_home() | is_category() | is_tag() ) :
			wp_register_script( 'masonry.pkgd', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '', true );
			wp_enqueue_script( 'masonry.pkgd');
			wp_register_script( 'imagesloaded.pkgd', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '', true );
			wp_enqueue_script( 'imagesloaded.pkgd');
		endif;
	endif;

}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

// This is the end...
// My only friend,
// The end!!
?>
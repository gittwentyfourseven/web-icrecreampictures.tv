<?php

/*
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
ENCOLAR HOJAS DE ESTILO (CSS)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

function site_styles() {

  	/*
  	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	Registra y encola aquí tus ficheros CSS
	Aplica "false" para desactivar lo que no uses, nuestro sitio será ligero como astronauta en el espacio profundo
	- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	*/

	$bootstrap 	  = true;
	$woocommerce  = false;
	$generales 	  = true;
	$fontawesome = true;

	// Bootstrap (incluye Normalize)
	if ( $bootstrap ) :
		wp_register_style( 'bootstrap',  get_template_directory_uri() . '/css/vendors/bootstrap.css' ); // Sin minimizar para poder modificar estilos de botones, forms, etc.
		wp_enqueue_style( 'bootstrap' );
	endif;

	// Woocommerce
	if ( $woocommerce ) :
		if ( is_woocommerce() | is_page_template( array( 'woo-cart.php' , 'woo-checkout.php', 'woo-myaccount.php' ) ) ) :
		// Cart, Checkout y My Account son páginas que incluyen los shortcodes de Woocomerce para llamar a estos elementos. Sí sólo usásemos "is_woocommerce" quedarían fuera del condicional.
		// Para que ésto funcione, en el editor de cada página debemos asignar su template correspondiente.
			wp_register_style( 'woocommerce',  get_template_directory_uri() . '/css/woocommerce.css' );
			wp_enqueue_style( 'woocommerce' );
		endif;
	endif;

	// Estilos generales
	if ( $generales ) :
	  	wp_register_style( 'main',  get_template_directory_uri() . '/css/main.css' );
		wp_enqueue_style( 'main' );
	endif;

	// Font Awesome
	if ( $fontawesome ) :
	  	wp_register_style( 'fontawesome',  get_template_directory_uri() . '/css/vendors/font-awesome.css' );
		wp_enqueue_style( 'fontawesome' );
	endif;

}
add_action( 'wp_enqueue_scripts', 'site_styles' );

/*
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
ENCOLAR HOJA DE ESTILO (CSS) PARA LA PÁGINA DE ACCESO A WP (LOGIN)
- Con el if/endif hacemos que sólo se encole en la página de login
- is_login_page() es una función que creamos previamente en "includes/installation.php"
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
*/

function crepes_login_stylesheet() {

	if ( is_login_page() ) : // is_login_page no existe en el codex de WP, la generamos en /includes/installation.php
	    wp_register_style( 'custom-login',  get_template_directory_uri() . '/css/admin/custom-login.css' );
		wp_enqueue_style( 'custom-login');
	endif;

}
add_action( 'login_enqueue_scripts', 'crepes_login_stylesheet' );

// This is the end...
// My only friend,
// The end!!
?>
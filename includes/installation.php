<?php

/*

INSTALACIÓN WP

Lo básico para arrancar el Wordpress:

    1. Permitir a la plantilla leer las traducciones
    2. Registrar nuestra sidebar y el área de widgets
    3. Forzar "Imagen Destacada" en Post, Page y Product
    4. Cambiar la url del logo de la página de acceso a WP
    5. Incluir la función is_login_page()
    6. Añadir nuevos menús a la plantilla

*/


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 1. Permitir a la plantilla leer las traducciones
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
load_theme_textdomain( 'ct', get_template_directory().'/languages' );


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 2. Registrar nuestra sidebar y el área de widgets
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
function crepestheme_widgets_init() {

  register_sidebar( array(
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'description'   => __( 'Nuestra barra lateral, el lugar perfecto para incluir widgets y tomarse una cañita.' ),
      'id'            => 'barra_lateral',
      'name'          => __( 'Barra lateral', 'Crepes&Themes' ),
  ) );

  // Si queremos añadir barras adicionales basta con añadir aquí un código similar al anterior: register_sidebar( 'bla bla bla' );
}
add_action( 'widgets_init', 'crepestheme_widgets_init' );


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 3. Forzar "Imagen Destacada" en Post, Page y Product. Desaparece cuando instalamos ACF Pro
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product' ) );


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 4. Cambiar la url del logo de la página de acceso a WP, por la de Crepes & Texas
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
  return 'http://www.crepesandtexas.com/';
}


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 5. Incluir la función is_login_page() para poder encolar el css de la página de login sólo en la página de login (con if/else)
// Fuente: http://wordpress.stackexchange.com/questions/28095/how-can-i-tell-if-im-on-a-login-page
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 6. Añadir nuevos menús a la plantilla
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
function registrar_mis_menus() {
  register_nav_menus(
    array(
      'main' => __( 'Menu Principal' ),
      'footer' => __( 'Footer' )
      // Añade aquí más menús
    )
  );
}
add_action( 'init', 'registrar_mis_menus' );




// This is the end...
// My only friend,
// The end!!
?>
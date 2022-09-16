<?php
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// CONFIGURACIÓN WP
// Aquí añadimos nuestras propias funciones de Wordpress
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// CAMBIAR mensaje de error del login
// Así evitamos dar pistas a los malos
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
function login_errors_message() {
    return 'Vaya! creo que has hecho algo mal...';
}
add_filter('login_errors', 'login_errors_message');

// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// ELIMINAR “basura” del <head>
// (Versión de WordPress, RSD, Windows Live Writter, etc.)
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// DESACTIVAR código HTML de los comentarios
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
add_filter('pre_comment_content', 'wp_specialchars');

// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// AÑADIR el slug de las páginas como class en el body
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		// en este caso añade el tipo de post más "-" más el nombre de la página 
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


// Ordernar works
function pmg_ex_sort_posts( $q )
{
    if ( !$q->is_main_query() || is_admin() )
        return;
    
    if ( !is_post_type_archive('videos') && !is_tax( array( 'works' ) ) && !is_post_type_archive('studio') )
    	return;
    	
    $q->set('orderby', 'menu_order');
    $q->set('order', 'ASC');
}
add_action('parse_query', 'pmg_ex_sort_posts');

if ( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Configuración de Studio',
		'menu_title'	=> 'Configuración de Studio',
		'menu_slug' 	=> 'studio-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// This is the end...
// My only friend,
// The end!!
?>
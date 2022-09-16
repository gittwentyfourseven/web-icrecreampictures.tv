<?php

/*

INSTALACIÓN WOO

Lo básico para arrancar el Woocommerce:

  1. Woocommerce Support
  2. Añadir "wishlist" a Mi Cuenta
  3. Quitar el ítem "Descargas" del menú de la página de Mi Cuenta
  4. Permitir contraseñas simples en el registro de clientes

*/


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 1. Woocommerce Support
// Imprescindible para que funcione Woocommerce en nuestra flamante plantilla)
// ----------------------------------------------------------------------------------------------------------------------------------------------------------

// A. Unhook the WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// B. Hook to display the wrappers your theme requires
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div id="main" class="main">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}

// C. Declare WooCommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 2. Añadir "wishlist" a Mi Cuenta (para el plugin "YITH WooCommerce Wishlist")
// Fuentes:
// http://stackoverflow.com/questions/38039616/woocommerce-assigning-an-endpoint-to-a-custom-template-in-my-account-pages
// https://github.com/woocommerce/woocommerce/wiki/2.6-Tabbed-My-Account-page
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
function my_custom_endpoints() {
    add_rewrite_endpoint( 'lista-deseos', EP_ROOT | EP_PAGES );
}

add_action( 'init', 'my_custom_endpoints' );

function my_custom_query_vars( $vars ) {
    $vars[] = 'lista-deseos';
    return $vars;
}

add_filter( 'query_vars', 'my_custom_query_vars', 0 );

function my_custom_flush_rewrite_rules() {
    flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'my_custom_flush_rewrite_rules' );

function my_custom_my_account_menu_items( $items ) {
    // Ordenamos el menú de Mi Cuenta y añadimos el nuevo item ()
    $items = array(
        'dashboard'         => __( 'Dashboard', 'woocommerce' ),
        'lista-deseos'      => __( 'Wishlist', 'woocommerce' ),
        'orders'            => __( 'Orders', 'woocommerce' ),
        'edit-address'      => __( 'Addresses', 'woocommerce' ),
        'edit-account'      => __( 'Edit Account', 'woocommerce' ),
        //'customer-logout'   => __( 'Logout', 'woocommerce' ),
        //'downloads'       => __( 'Downloads', 'woocommerce' ),
        //'payment-methods' => __( 'Payment Methods', 'woocommerce' ),
    );
    return $items;
}

add_filter( 'woocommerce_account_menu_items', 'my_custom_my_account_menu_items' );

function my_custom_endpoint_content() {
    echo do_shortcode( '[yith_wcwl_wishlist]' );
}

add_action( 'woocommerce_account_lista-deseos_endpoint', 'my_custom_endpoint_content' );


// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 3. Quitar el ítem "Descargas" del menú de la página de Mi Cuenta 
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
add_filter( 'woocommerce_account_menu_items', 'custom_woocommerce_account_menu_items' );
function custom_woocommerce_account_menu_items( $items ) {
    if ( isset( $items['downloads'] ) ) unset( $items['downloads'] );
    return $items;
}

// ----------------------------------------------------------------------------------------------------------------------------------------------------------
// 4. Permitir contraseñas simples en el registro de clientes
// Fuente: https://nicola.blog/wp-content/cache/wp-rocket/nicolamustone.com/2016/01/27/remove-the-password-strength-meter-on-the-checkout-page/index-https.html_gzip
// ----------------------------------------------------------------------------------------------------------------------------------------------------------
function permitir_password_simple() {
	if ( wp_script_is( 'wc-password-strength-meter', 'enqueued' ) ) {
		wp_dequeue_script( 'wc-password-strength-meter' );
	}
}
add_action( 'wp_print_scripts', 'permitir_password_simple', 100 );




// This is the end...
// My only friend,
// The end!!
?>
<?php
/*
*   =================================================================================================
*   TU_CPT
*   Custom Post Type
*   =================================================================================================
*/
function registrar_cpt() { // Como ejemplo hemos usado un CPT imaginario "Project"
    $args = array (
        'has_archive' => true,
        'label' => 'Videos y Photo',
        'labels' => array (
            'add_new' => 'Añadir nuevo',
            'add_new_item' => 'Añadir nuevo Video',
            'new_item' => 'Nuevo Video'
        ),
        'menu_icon' => 'dashicons-media-video', // Más iconos en https://developer.wordpress.org/resource/dashicons/
        'menu_position' => 3,
        'public' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'supports' => array('title','thumbnail','page-attributes'),
        //'taxonomies' => array( 'cat_videos'), // Tiene que coincidir con la taxonomía registrada en la última línea: register_taxonomy( 'taxonomia', array( 'project' ), $args );
    );
    register_post_type('videos', $args);
    
    $args = array (
        'has_archive' => true,
        'label' => 'Studio',
        'labels' => array (
            'add_new' => 'Añadir nuevo',
            'add_new_item' => 'Añadir nuevo Studio',
            'new_item' => 'Nuevo Studio'
        ),
        'menu_icon' => 'dashicons-video-alt', // Más iconos en https://developer.wordpress.org/resource/dashicons/
        'menu_position' => 4,
        'public' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'supports' => array('title','thumbnail','page-attributes')
    );
    register_post_type('studio', $args);

    //flush_rewrite_rules();
};

add_action('init','registrar_cpt');


function create_works_tax() {
	
	$labels = array(
		'name'                       => _x( 'Proyectos', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Proyecto', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Proyectos', 'textdomain' ),
		'popular_items'              => __( 'Popular Proyectos', 'textdomain' ),
		'all_items'                  => __( 'All Proyectos', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Proyecto', 'textdomain' ),
		'update_item'                => __( 'Update Proyecto', 'textdomain' ),
		'add_new_item'               => __( 'Add New Proyecto', 'textdomain' ),
		'new_item_name'              => __( 'New Proyecto Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Proyectos with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Proyectos', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Proyectos', 'textdomain' ),
		'not_found'                  => __( 'No Proyectos found.', 'textdomain' ),
		'menu_name'                  => __( 'Proyectos', 'textdomain' ),
	);
	
	$args = array(
		'hierarchical'          => true,
		'labels'				=> $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'works' ),
	);

	register_taxonomy( 'works', 'videos', $args );
}
add_action( 'init', 'create_works_tax', 0 );


add_theme_support( 'post-thumbnails', array( 'studio' ) );


// This is the end...
// My only friend,
// The end!!
?>
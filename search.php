<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying Search Results: search.php
*
* @package WordPress
* @subpackage crepesandtheme
*/

?>

<?php get_header(); ?>

	<div id="main" class="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } // imagen destacada (tamaño 'large', 640x640px por defecto) ?>
				<h2><?php the_title(); // Título ?></h2>
				<p><?php the_excerpt(); // Excerpt ?></p>
			</article>

		<?php endwhile; else : ?>

			<p><?php _e( 'Lo siento, pero todavía no tenemos post para mostrarte…', 'ct' ); ?></p>
			
		<?php endif; ?>

	</div>

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<?php get_footer(); ?>
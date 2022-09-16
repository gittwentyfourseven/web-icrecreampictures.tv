<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying the Blog: blog.php
*
* @package WordPress
* @subpackage crepesandtheme
*/

?>

<?php get_header(); ?>

	<div id="main" class="main">
		<div class="wrap">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article>
					<a href="<?php the_permalink(); // Permalink ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } // imagen destacada (tamaño 'large', 640x640px por defecto) ?></a>
					<h2><a href="<?php the_permalink(); // Permalink ?>"><?php the_title(); // Título ?></a></h2>
					<?php the_excerpt(); // Excerpt ?>
					<p><a href="<?php the_permalink(); // Permalink ?>">Ver más</a></p>
				</article>

			<?php endwhile; else : ?>

				<p><?php _e( 'Lo siento, pero todavía no tenemos post para mostrarte…', 'ct' ); ?></p>
				
			<?php endif; ?>
			
		</div>
	</div>

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<?php get_footer(); ?>
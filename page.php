<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying the Pages: page.php
*
* @package WordPress
* @subpackage crepesandtheme
*/

?>

<?php get_header(); ?>
	
	<div id="main" class="main">
		<div class="wrap">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php if ( has_post_thumbnail() ) { the_post_thumbnail('full'); } // imagen destacada (tamaño original) ?>

					<h1><?php the_title(); // título ?></h1>

					<div class="cont-entrada">
						<?php the_content(); // contenido ?>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>
	</div>

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<?php get_footer(); ?>
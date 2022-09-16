<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying the Pages: about.php
* Template name: Directors
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

					<div class="info">
						<div class="row">
							<div class="col-md-2 empty"></div>
							<div class="col-md-8">
								<div class="texto-blur">
									<?php the_content(); ?>
								</div>
								<div class="oficina">
									<!--<h2>
										<?php //_e('Main Office','ct') ?>
									</h2>
									<a class="telefono" href="tel:<?php //the_field('telefono'); ?>">
										<?php //the_field('telefono'); ?>
									</a>-->
									<a class="telefono"><?php the_field('telefono'); ?></a>
								</div>
							</div>
							<div class="col-md-2"></div>
						</div>
					</div>


				<?php endwhile; ?>

			<?php endif; ?>

		</div>
	</div>

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<?php get_footer(); ?>
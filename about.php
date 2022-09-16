<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying the Pages: about.php
* Template name: About
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

					<div class="contacto">
<!--
						<h2>
							<?php _e('Contact team','ct') ?>
						</h2>
-->
						<div class="row">
						<?php $i = 0 ?>
							<?php if( have_rows('equipo') ): ?>

								<?php while( have_rows('equipo') ): the_row();

									// vars
									$nombre = get_sub_field('nombre');
									$cargo  = get_sub_field('cargo');
									$movil  = get_sub_field('movil');
									$mail   = get_sub_field('mail');
									$skype  = get_sub_field('skype');
									$contacto  = get_sub_field('contact');

									?>
									<?php if ($i == 4)
											echo '</div><div class="row">';
									?>
										<div class="col-md-4 col-sm-8">
											<div>
												<h3> <a href="<?php echo $contacto['url']; ?>"><i class="fa fa-id-badge" aria-hidden="true"></i><?php echo $nombre; ?></a></h3>
												<p class="h5"><?php echo $cargo; ?></p>
											</div>
											<ul>
												<li><a href="tel:<?php echo $movil; ?>"><?php echo $movil; ?></a></li>
												<li><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></li>
												<?php if($skype) : ?>
												<li><?php _e('Skype','ct') ?>:<?php echo $skype; ?></li>
												<?php endif; ?>
											</ul>
										</div>
									<?php $i++; ?>


								<?php endwhile; ?>

							<?php endif; ?>

						</div>
					</div>



				<?php endwhile; ?>

			<?php endif; ?>

		</div>
	</div>

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<?php get_footer(); ?>

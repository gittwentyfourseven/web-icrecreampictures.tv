<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying the Posts: single.php
* Template Name: 
*
* @package WordPress
* @subpackage crepesandtheme
*/

?>

<?php get_header(); ?>
	
	<div id="main" class="main">

		<?php if ( have_posts() ) : ?>

			<?php



			while ( have_posts() ) : the_post(); ?>

				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('full'); } // imagen destacada (tamaño original) ?>

				<div class="volver">
					<a class="volver__boton" href="<?php echo esc_url( home_url( '/' ) ); ?>/videos/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icecream_icono_flecha-izq.svg" alt="left arrow">
					</a>
				</div>
				
				<?php 
			        $proyecto = get_field('tipo_proyecto');
			        if( $proyecto == 'video' ) { ?>
					<div class="footer">
						<div class="info">
							<div class="row">
								<?php 
									$director = get_field('director');
									if( !empty($director) ): ?>
									<div class="col-md-3">
										<h4><?php _e('Director','ct') ?></h4>
										<p class="h3"><?php echo $director; ?></p>
									</div>
								<?php endif; ?>
								<?php if(get_field('production')) : ?>
									<div class="col-md-3">
										<h4><?php _e('Production co','ct') ?></h4>
										<p class="h3"><?php the_field('production'); ?></p>
									</div>
								<?php endif; ?>
								<?php if(get_field('dop')) : ?>
									<div class="col-md-3">
										<h4><?php _e('DOP','ct') ?></h4>
										<p class="h3"><?php the_field('dop'); ?></p>
									</div>
								<?php endif; ?>
								<?php if(get_field('photographer')) : ?>
									<div class="col-md-3">
										<h4><?php _e('Photographer','ct') ?></h4>
										<p class="h3"><?php the_field('photographer'); ?></p>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php }
				else{ ?>
					<div class="footer">
						<div class="info">
							<div class="row">
								<div class="col-md-3">
									<h4><?php _e('Photographer co','ct') ?></h4>
									<p class="h3"><?php the_field('photographer'); ?></p>
								</div>
								<div class="col-md-3">
									<h4><?php _e('Production co','ct') ?></h4>
									<p class="h3"><?php the_field('production'); ?></p>
								</div>
								<div class="col-md-3"></div>
								<div class="col-md-3"></div>
							</div>
						</div>
					</div>
				<?php } ?>
				
				<?php 
			        $proyecto = get_field('tipo_proyecto');
			        if( $proyecto == 'video' ) { ?>
				<div class="video">
					<div class="contenedor-iframe">
						<iframe src="https://player.vimeo.com/video/<?php the_field('video'); ?>?color=ffffff&title=0&byline=0&portrait=0" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div class="video__cerrar">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icecream_icono_cerrar.svg">
					</div>
<!--
					<div class="cartela" style="background-image: url('<?php $imagen = get_field('imagen'); if( !empty($imagen) ): ?><?php echo $imagen['url']; ?><?php endif; ?>');">
						<div class="cartela__play centrado">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icecream_icono_play.svg" alt="play button"> 
						</div>
					</div>
-->
					<div class="cartela">
						<div class="cartela__play centrado">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icecream_icono_play.svg" alt="play button"> 
						</div>
					</div>
				</div>
				<?php }
				else{ ?>
				<?php $galeria = get_field('galeria'); 
					$size = 'full'; 
					if($galeria):?>
					
				<!-- Slider (Slick) -->
						<div class="slider-works">
							<?php foreach( $galeria as $image ): ?>
							
					            <div>
						            <div style="background-image: url( <?php echo $image['url'] ?> )"></div>
					            	
					            </div>
					        <?php endforeach; ?>
						</div>
					<?php endif; ?>
				<?php } ?>
				

			<?php endwhile; ?>

			<nav class="otros_proyectos">
				<ul class="menu">
					<li class="prev-posts">
						<?php previous_post_link('%link', 'Prev Project') ?>
					</li>
					<li class="next-posts">
						<?php next_post_link('%link', 'Next Project') ?>
					</li>
				</ul>
			</nav>
			
		<?php endif; ?>
			
	</div>

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<?php get_footer(); ?>
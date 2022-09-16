<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying the Archive Page (cats, tags, search, etc.)
*
* @package WordPress
* @subpackage crepesandtheme
*/

?>

<?php get_header(); ?>

	<div id="main" class="main">
		<div class="wrap">
			<div class="row">

				<?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>

					<div class="col-md-6">
						<article class="animation-element">
							<div class="imagen  <?php  $proyecto = get_field('tipo_proyecto');  if( $proyecto == 'galeria' ) { ?>galeria <?php } ?>" style="background-image: url('<?php $imagen = get_field('imagen'); if( !empty($imagen) ): echo $imagen['url']; endif; ?>');">
								<a href="<?php the_permalink(); // Permalink ?>">
									<?php if ($i == 1): ?>
								        <img class="imagen-1" src="<?php echo get_template_directory_uri(); ?>/img/icecream_works-1.png">
								    <?php elseif ($i == 2): ?>
								        <img class="imagen-2" src="<?php echo get_template_directory_uri(); ?>/img/icecream_works-2.png">
								    <?php elseif ($i == 3): ?>
								    	<img class="imagen-3" src="<?php echo get_template_directory_uri(); ?>/img/icecream_works-3.png">
								    <?php elseif ($i == 4): ?>
								    	<img class="imagen-4" src="<?php echo get_template_directory_uri(); ?>/img/icecream_works-4.png">
								    <?php elseif ($i == 5): ?>
								    	<img class="imagen-4" src="<?php echo get_template_directory_uri(); ?>/img/icecream_works-2.png">
								    <?php elseif ($i == 6): ?>
								    	<img class="imagen-4" src="<?php echo get_template_directory_uri(); ?>/img/icecream_works-1.png">
								    <?php $i = 0; endif; ?>
								</a>
								<?php 
							        $proyecto = get_field('tipo_proyecto');
							        if( $proyecto == 'video' ) { ?>
										<div class="contenedor-iframe">
											<iframe src="https://player.vimeo.com/video/<?php the_field('video'); ?>?color=ffffff&title=0&byline=0&portrait=0" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
										</div>
								<?php } ?>

								<a class="click-video" href="<?php the_permalink(); // Permalink ?>"></a>
							</div>
							<h3><a href="<?php the_permalink(); // Permalink ?>"><?php the_title(); // Título ?></a></h3>
							<p class="h4"><?php the_field('titulo'); ?></p>
						</article>
					</div>

				<?php $i++; endwhile; else : ?>

					<p><?php _e( 'Lo siento, pero todavía no tenemos post para mostrarte…', 'ct' ); ?></p>
					
				<?php endif; ?>

				<?php echo do_shortcode('[ajax_load_more post_type="videos" posts_per_page="6" scroll="true" button_label="View more" button_loading_label="Loading videos…" offset="12"]') ?>

			</div>
		</div>
	</div>

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<?php get_footer(); ?>
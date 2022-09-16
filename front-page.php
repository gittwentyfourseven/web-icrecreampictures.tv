<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying the Front Page: front-page.php
*
* @package WordPress
* @subpackage crepesandtheme
*/
$total_videos = 0;
?>

<?php get_header(); ?>

	<div id="main" class="main">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if( have_rows('slider') ): ?>

						<!-- Slider (Slick) -->
						<div class="slider">
							<?php while( have_rows('slider') ): the_row(); ?>
								<?php // set up post object
							        $post_object = get_sub_field('video');
							        if( $post_object ) :
							        $post = $post_object;
							        setup_postdata($post);
							        $total_videos++;
							    ?>
							        <div data-thumb="<?php $imagen = get_field('imagen'); if( !empty($imagen) ): echo $imagen['url']; endif; ?>" data-text="<?php the_title(); ?>">
							    		<div class="contenedor-full">

								    	<?php if ( get_field( 'video_home' ) ) : //eliminados autoplay y loop?>

								    		<video width="1920" height="1080" muted playsinline autoplay loop id="video<?php echo $total_videos; ?>">
												<source src="<?php the_field( 'video_home' ); ?>" type="video/mp4">
												Your browser does not support the video tag.
											</video>

								    	<?php else : ?>

											<!--<iframe src="https://player.vimeo.com/video/<?php the_field('video'); ?>?autoplay=1" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
											<iframe src="https://player.vimeo.com/video/<?php the_field('video'); ?>" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											<img src="<?php $imagen = get_field('imagen'); if( !empty($imagen) ): ?><?php echo $imagen['url']; ?><?php endif; ?>" alt="<?php the_title(); ?>">

										<?php endif; ?>

										</div>
										<div class="centrado info">
<!--
							    			<h2>
							    				<a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
							    			</h2>
-->
							    			<a href="<?php the_permalink(); ?>">
								    			<h2 class="ml11">
													<span class="text-wrapper">
														<span class="letters"><span><?php //the_title(); ?><?php the_field('titulo'); ?></span></span>
													</span>
												</h2>
											</a>

							    		</div>
							    	</div>
							    	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							    <?php endif; ?>
							<?php endwhile; ?>
						</div>
						<!-- Fin del Slider -->

						<!-- Botonera inferior -->
<!-- 						<div class="botonera">
	<div class="compartir">
		<img src="<?php //echo get_template_directory_uri(); ?>/img/icecream_icono_compartir.svg">
	</div>
	<?php //get_template_part('premaquetados/redes'); ?>
</div>
<div class="studio_link"><a href="<?php //echo get_post_type_archive_link( 'studio' ); ?>"><img src="<?php //echo get_template_directory_uri(); ?>/img/logo-icecream-studio-white.svg" /></a></div> -->
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>

	</div>

<?php // dynamic_sidebar( 'barra_lateral' ); ?>
<script>
	var total_videos = <?php echo $total_videos; ?>;
	var videoinicial = 0;



	jQuery(document).ready(function($) {
		window.setTimeout(cambiarVideo,10000);
	});

	function cambiarVideo(numero) {
		videoinicial++;
		if (videoinicial == total_videos) { videoinicial = 0; }

		jQuery(".slick-dots #slick-slide0" + videoinicial + " a").click();

		window.setTimeout(cambiarVideo,10000);

	}


</script>
<?php get_footer(); ?>
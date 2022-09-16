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
		<div class="wrap">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php

			$all_posts = new WP_Query(array(
				'post_type' => 'videos',
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'posts_per_page' => -1
			));
			$nextID = $prevID = '';
			foreach ( $all_posts->posts as $key => $value )
			{
				if ( $value->ID == $post->ID )
				{
					if ( $all_posts->posts[$key + 1] )
						$nextID = $all_posts->posts[$key + 1]->ID;
					if ( $all_posts->posts[$key - 1] )
						$prevID = $all_posts->posts[$key - 1]->ID;
					break;
				}
			}

		?>

			<?php $terms = wp_get_post_terms( $post->ID, 'works' ); ?>

			<!-- <h1><?php //if ( $terms ) echo $terms[0]->name; else the_title(); ?></h1> -->
			<h1><?php the_field('titulo'); ?></h1>

			<?php if ( has_post_thumbnail() ) { the_post_thumbnail('full'); } ?>

			<div class="volver">
				<a class="volver__boton" href="<?php echo esc_url( home_url( '/' ) ); ?>/videos/">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icecream_icono_flecha-izq.svg" alt="left arrow">
				</a>
			</div>

			<?php

				$proyecto = get_field('tipo_proyecto');
				if ( $proyecto == 'video' ) {

				?>

				<div class="video">
					<div class="contenedor-iframe">
						<iframe src="https://player.vimeo.com/video/<?php the_field('video'); ?>?color=ffffff&title=0&byline=0&portrait=0" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="footer">
					<nav class="otros_proyectos">
						<ul class="menu">
							<li class="prev-posts">
							<?php if ( $prevID ) : ?>
								<a href="<?php echo get_the_permalink( $prevID ); ?>" rel="prev"><?php _e( 'Prev Project', '' ); ?></a>
							<?php endif; ?>
							</li>
							<li class="next-posts">
							<?php if ( $nextID ) : ?>
								<a href="<?php echo get_the_permalink( $nextID ); ?>" rel="next"><?php _e( 'Next Project', '' ); ?></a>
							<?php endif; ?>
							</li>
						</ul>
					</nav>
					<div class="info">
						<div class="row">

						<?php

							$director = get_field('director');
							if ( !empty( $director ) ) :

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Director','ct') ?></h4>
								<p class="h3"><?php echo $director; ?></p>
							</div>

							<?php

							endif;

							if ( get_field('dop') ) :

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('DOP','ct') ?></h4>
								<p class="h3"><?php the_field('dop'); ?></p>
							</div>

							<?php

							endif;

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Client','ct') ?></h4>
								<p class="h3"><?php the_title(); ?></p>
							</div>

							<?php

							if ( get_field('agency') ) :

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Agency','ct') ?></h4>
								<p class="h3"><?php the_field('agency'); ?></p>
							</div>

							<?php

							endif;

							if ( get_field('production') ) :

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Prod Co','ct') ?></h4>
								<p class="h3"><?php the_field('production'); ?></p>
							</div>

							<?php

							endif;

							if ( get_field('video_year') ) :

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Year','ct') ?></h4>
								<p class="h3"><?php the_field('video_year'); ?></p>
							</div>

							<?php

							endif;

						?>

						</div>
					</div>
				</div>

			<?php } else { ?>

			<?php

				$galeria = get_field('galeria');
				$size = 'full';
				if ( $galeria ) :

				?>

				<div class="slider-works">

				<?php foreach ( $galeria as $image ) : ?>

					<img src="<?php echo $image['url'] ?>" width="<?php echo $image['width'] ?>" height="<?php echo $image['height'] ?>" title="<?php echo $image['title'] ?>" />

		        <?php endforeach; ?>

				</div>

				<div class="footer">
					<div class="info">
						<div class="row">

						<?php

							if ( get_field('photographer') ) :

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Photographer','ct') ?></h4>
								<p class="h3"><?php the_field('photographer'); ?></p>
							</div>

							<?php

							endif;

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Client','ct') ?></h4>
								<p class="h3"><?php the_title(); ?></p>
							</div>

							<?php

							if ( get_field('agency') ) :

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Agency','ct') ?></h4>
								<p class="h3"><?php the_field('agency'); ?></p>
							</div>

							<?php

							endif;

							if ( get_field('production') ) :

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Prod Co','ct') ?></h4>
								<p class="h3"><?php the_field('production'); ?></p>
							</div>

							<?php

							endif;

							if ( get_field('video_year') ) :

							?>

							<div class="col-xs-12 col-md-flex">
								<h4><?php _e('Year','ct') ?></h4>
								<p class="h3"><?php the_field('video_year'); ?></p>
							</div>

							<?php

							endif;

						?>

						</div>
					</div>
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
				</div>

				<?php

					endif;

				}

			?>

			<?php

				if ( $terms )
				{
					$related = new WP_Query(array(
						'post_type' => 'videos',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'works',
								'field' => 'term_id',
								'terms' => $terms[0]->term_id
							)
						),
						'post__not_in' => array( $post->ID )

					));

					if ( $related->have_posts() ) :

					?>

					<div class="row moreprojects">
						<div class="col-xs-12">
							<h2>More projects of <?php echo $terms[0]->name; ?></h2>
						</div>
						<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
							<div class="row">

						<?php while ( $related->have_posts() ) : $related->the_post(); ?>

						<div class="col-xs-12 col-sm-6">
							<article class="animation-element">
								<div class="imagen  <?php  $proyecto = get_field('tipo_proyecto');  if( $proyecto == 'galeria' ) { ?>galeria <?php } ?>" style="background-image: url('<?php $imagen = get_field('imagen'); if( !empty($imagen) ): echo $imagen['url']; endif; ?>');">
									<a href="<?php the_permalink(); // Permalink ?>">
										<img class="imagen-2" src="<?php echo get_template_directory_uri(); ?>/img/icecream_works-2.png">
									</a>
								</div>
								<h3><a href="<?php the_permalink(); // Permalink ?>"><?php the_title(); // Título ?></a></h3>
								<p class="h4"><?php the_field('titulo'); ?></p>
							</article>
						</div>

						<?php endwhile; wp_reset_postdata(); ?>

							</div>
						</div>
					</div>

					<?php

					endif;

				}

			?>

			<?php endwhile; ?>

		<?php endif; ?>

		</div>
	</div>

<!-- 	<div style="height: 100px; background: red;"></div> -->

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<?php get_footer(); ?>
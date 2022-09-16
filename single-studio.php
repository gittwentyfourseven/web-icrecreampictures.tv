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

			<div class="row">
				<div class="col-xs-12 col-md-11 col-md-offset-1">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'img-responsive', 'title' => get_the_title(), 'alt' => get_the_title() ) ); } ?>
					<?php if ( get_field( 'studio_trailer' ) ) : ?>
					<p class="h3"><a href="<?php the_field( 'studio_trailer' ); ?>">VIEW TRAILER</a></p>
					<?php endif; ?>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
					<?php if ( get_field( 'studio_genero' ) ) : ?>
					<p class="h4"><span>Genre</span><?php the_field( 'studio_genero' ); ?></p>
					<?php endif; ?>


					<?php if ( get_field( 'studio_director' ) && get_field( 'studio_script' ) && get_field( 'studio_director' ) ==  get_field( 'studio_script' ) ): ?>
							<p class="h4"><span>Director & Scriptwriter</span><?php the_field( 'studio_director' ); ?></p>
					<?php else: ?>
						<?php if ( get_field( 'studio_director' ) ) : ?>
						<p class="h4"><span>Director</span><?php the_field( 'studio_director' ); ?></p>
						<?php endif; ?>
						<?php if ( get_field( 'studio_script' ) ) : ?>
						<p class="h4"><span>Scriptwriter</span><?php the_field( 'studio_script' ); ?></p>
						<?php endif; ?>
					<?php endif; ?>

					<?php if ( get_field( 'studio_date' ) ) : ?>
					<p class="h4"><span>Release Date</span><?php the_field( 'studio_date' ); ?></p>
					<?php endif; ?>
					<?php if ( have_rows( 'studio_network' ) ) : ?>
					<p class="h4"><span>TV Network</span>
						<?php while ( have_rows( 'studio_network' ) ) : the_row(); ?>
							<?php if ( get_sub_field( 'studio_network_url' ) ) : ?>
								<a href="<?php the_sub_field( 'studio_network_url' ); ?>"><?php the_sub_field( 'studio_network_nombre' ); ?></a>
							<?php else : ?>
								<?php the_sub_field( 'studio_network_nombre' ); ?>
							<?php endif; ?>
							<br><span>&nbsp;</span>
						<?php endwhile; ?>
					</p>
					<?php endif; ?>
					<?php if ( get_field( 'studio_production' ) ) : ?>
					<p class="h4"><span>Production Companies</span>
						<?php while ( have_rows( 'studio_production' ) ) : the_row(); ?>
							<?php if ( get_sub_field( 'studio_production_url' ) ) : ?>
								<a href="<?php the_sub_field( 'studio_production_url' ); ?>"><?php the_sub_field( 'studio_production_nombre' ); ?></a>
							<?php else : ?>
								<?php the_sub_field( 'studio_production_nombre' ); ?>
							<?php endif; ?>
							<br>
						<?php endwhile; ?>
					</p>
					<?php endif; ?>
					<?php if ( get_field( 'studio_spain' ) ) : ?>
					<p class="h4"><span>Service Prod Companies Spain</span>
						<?php while ( have_rows( 'studio_spain' ) ) : the_row(); ?>
							<?php if ( get_sub_field( 'studio_spain_url' ) ) : ?>
								<a href="<?php the_sub_field( 'studio_spain_url' ); ?>"><?php the_sub_field( 'studio_spain_nombre' ); ?></a>
							<?php else : ?>
								<?php the_sub_field( 'studio_spain_nombre' ); ?>
							<?php endif; ?>
							<br>
						<?php endwhile; ?>
					</p>
					<?php endif; ?>
					<?php if ( get_field( 'production_company' ) ) : ?>
					<p class="h4"><span>Production Company</span><?php the_field( 'production_company' ); ?></p>
					<?php endif; ?>
					<?php if ( get_field( 'co_production' ) ) : ?>
					<p class="h4"><span>Co Production</span><?php the_field( 'co_production' ); ?></p>
					<?php endif; ?>

					<?php if ( get_field( 'studio_imdb' ) ) : ?>
					<a href="<?php echo get_field( 'studio_imdb' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-imdb.png" alt="IMDB" /></a>
					<?php endif; ?>
				</div>
			</div>

		<?php endwhile; endif; ?>

		</div>
	</div>

<!-- 	<div style="height: 100px; background: red;"></div> -->

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<?php get_footer(); ?>

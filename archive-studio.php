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
				<div class="col-xs-12 col-sm-10 col-sm-offsset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
					<div class="content"><?php the_field( 'studio_contenido', 'option' ); ?></div>
				</div>
			</div>

			<?php if ( have_posts() ) : ?>

			<div class="row">

				<?php while ( have_posts() ) : the_post(); ?>

				<div class="col-xs-12 col-sm-6 col-md-4">
					<article>
						<div class="imagen">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive', 'alt' => get_the_title(), 'title' => get_the_title() ) ); ?>
							</a>
						</div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="h4"><?php the_field('studio_director'); ?></p>
					</article>
				</div>

				<?php endwhile; ?>

			</div>

			<?php else : ?>

				<p><?php _e( 'Lo siento, pero todavía no tenemos post para mostrarte…', 'ct' ); ?></p>

			<?php endif; ?>

			<div class="contacto">
				<div class="row">

				<?php
					$i=0;
					if ( have_rows( 'equipo', 'option' ) ) : while ( have_rows( 'equipo', 'option' ) ) : the_row(); ?>

					<?php

						$nombre = get_sub_field('nombre');
						$cargo  = get_sub_field('cargo');
						$movil  = get_sub_field('movil');
						$mail   = get_sub_field('mail');
						$skype  = get_sub_field('skype');
						$contacto  = get_sub_field('contact');

						if ( $nombre ) :

							if ($i == 4)
								echo '</div><div class="row">';
					?>

					<div class="col-md-3 col-sm-6">
						<div>
							<h3><a href="<?php echo $contacto['url']; ?>"><i class="fa fa-id-badge" aria-hidden="true"></i><?php echo $nombre; ?></a></h3>
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

				<?php
						$i++;
						endif;
					endwhile;
				endif;
				?>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>

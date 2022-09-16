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
			<div class="row filavideos">

				<?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<article class="animation-element">
							<div class="imagen  <?php  $proyecto = get_field('tipo_proyecto');  if( $proyecto == 'galeria' ) { ?>galeria <?php } ?>" style="background-image: url('<?php $imagen = get_field('imagen'); if( !empty($imagen) ): echo $imagen['url']; endif; ?>');" data-alterna="<?php //echo sacarAnimacion($imagen); ?>">
								<a href="<?php the_permalink(); // Permalink ?>">
									<img class="imagen-2" src="<?php echo get_template_directory_uri(); ?>/img/icecream_works-2.png">
								</a>
							</div>
							<h3><a href="<?php the_permalink(); // Permalink ?>"><?php (get_field('titulo') != '')?the_field('titulo'):the_title(); // Título ?></a></h3>
						</article>
					</div>

				<?php $i++; endwhile; else : ?>

					<p><?php _e( 'Lo siento, pero todavía no tenemos post para mostrarte…', 'ct' ); ?></p>

				<?php endif; ?>


 			</div>

				<?php //echo do_shortcode('[ajax_load_more post_type="videos" posts_per_page="6" scroll="false" button_label="View more" button_loading_label="Loading videos…" offset="18" order="ASC" orderby="menu_order" nested="true" destroy_after="20"]')

				echo do_shortcode('[ajax_load_more post_type="videos" posts_per_page="18" orderby="menu_order" order="ASC" offset="18" destroy_after="20" scroll="true" transition_container="false" nested="true" destroy_after="20"container_type="div" css_classes="row filavideos" ]');
				?>

		</div>
	</div>

<?php // dynamic_sidebar( 'barra_lateral' ); ?>

<!-- <script>
	jQuery(document).ready(function($) {
		jQuery(".post-type-archive-videos article .imagen").each(function() {
			if (jQuery(this).data("alterna") != '') {
				nuevaimagen = jQuery(this).data("alterna");
				imagenbase = jQuery(this).css("background-image");
				var img = new Image();
    			img.src = nuevaimagen;
				jQuery(this).hover(
					function() { jQuery(this).css("background-image","url(" + nuevaimagen + ")"); },
					function() { jQuery(this).css("background-image",imagenbase); }
				);
			}
		});
	});
</script> -->


<?php get_footer(); ?>

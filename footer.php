<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying the Site Footer: footer.php
*
* @package WordPress
* @subpackage crepesandtheme
*/

?>

			</div>
			<!-- Fin del Contenido (Main + Sidebar) -->

			<!-- Footer -->
			<footer class="site-footer">

				<div class="site-footer__izq">
					<p class="creditos">
						<?php _e('© 2019 Icecream','ct') ?>
					</p>
					<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); // Menú footer ?>
				</div>
			    <div class="site-footer__center">
			    <p>+34 93 348 43 75 <br>
			Mallorca 214, 2º 2ª  <br>
			        08008, Barcelona, Spain</p>
			    </div>
				<div class="site-footer__der">
					<img src="/wp-content/themes/icecream/img/APCP4-01.png" class="calidad">
					<?php //get_template_part('premaquetados/redes'); ?>
				</div>

			</footer>
			<!-- Fin del Footer -->

		</div>
		<!-- Fin del Top (Capa que engloba todo el contenido) -->

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
		<?php if(is_singular( 'videos' )) : ?>
			<script src="https://cdn.rawgit.com/jrue/Vimeo-jQuery-API/master/dist/jquery.vimeo.api.min.js" integrity="" crossorigin="anonymous"></script>
		<?php endif; ?>
		<!-- Fin de jQuery  -->

		<?php wp_footer(); ?>

		<!-- SCRIPT PARA MASONRY. De inicio sólo se carga en Home (intro blog), Categorías y Tags -->
		<?php // if ( is_home() | is_category() | is_tag() ): ?>

			<!--<script language="javascript" type="text/javascript">
			    // This line tells the script to run after the page is loaded,
			    // As well as allows you to use the `$` function within the script
			    jQuery(function($) {
			    	// init Masonry
					var $grid = $('.grid').masonry({
						// options...
						itemSelector: '.grid-item',
						percentPosition: true
					});
					// layout Masonry after each image loads
					$grid.imagesLoaded().progress( function() {
						$grid.masonry('layout');
					});
			    });
			</script>-->

		<?php // endif; ?>
		<!-- Fin de Mansonry -->

	</body>
</html>
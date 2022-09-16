<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying Sidebar: sidebar.php
* Template Name: 
*
* @package WordPress
* @subpackage crepesandtheme
*/

?>


<?php if ( is_active_sidebar( 'barra_lateral' ) ) : ?>
	<aside>
		<?php dynamic_sidebar( 'barra_lateral' ); ?>
	</aside>
<?php endif; ?>
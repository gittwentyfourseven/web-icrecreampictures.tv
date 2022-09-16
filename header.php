<?php

/**
* Crepes&Themes by Crepes&Texas (http://www.crepesandtexas.com/)
* The template base for displaying the Site Header: header.php
*
* @package WordPress
* @subpackage crepesandtheme
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJSV77W');</script>
<!-- End Google Tag Manager -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<!--
                            `
                        `,,,,,
                      ,,,,. ,,,`
                     ,,,,,,,,,,,,,,.
                    ,,,,,,,,,,,,,,,,,,
                   ,,,,,,,,,,,,,,,,,,,,,
                  .,,,,,,,,,,,,,,,,,,,,,`
                  ,,,,,,,,,,,,,,,,,,,,,,,
                  ,,,,,,,,,,,,,,,,,,,,,,
                 ,,,,,,,,,,,,,,,,,,,,,,,,
                 ,,,,,,,,,,,,,,,,,,,,,,,,,
                 ,,,,,,,,,,,,. `,,,,,,,,,,`
                 ,,,,,,,,,,,,   .,,,,,,,,,`
                 ,,,,,,,,,,,.    ,,,,,,,,,
                 ,,,,,,,,,,,,    ,,,,,,,,,
                 ,,,,,,,,,,,,    ,,,,,,,,.
                 ,,,,,,,,,,,,    ,,,,,,,,
                 ,,,,,,,,,,,,  `,,,,,,,,,
                 ,,,,,,,,,,,,. ,,,,,,,`,,
                 ,,,,,,,,,,,,,`.,,,,,,`,,
                  ,,,,,,,,,,,,,,,,,,,,,,.
                  ,,,,,,,,,,,,,.,,,,`,,,
                  ,,,,,,,,,,,,, ,,, ,,,
                  ,,,,,,,,,,,,,,,,.,,,,
                  ,,,,,,,,,,,,,,,,,,,,                  .`
                  `,,,,,,,,,,,,,, ,,,                  .
                   ,,,,,,,,,,,,,,`,,                 `    .
                   ,,,,,,,,,,,,,,,,                     `,
                    ,,,,,,,,,,,,,,.                . ` ,,
                    ,,,,,,,,,,,,,,.               `.  ,,
                    .,,,,,,,,,,,,,,              ,. .,,    .
                    ,,,,,,,,,,,,,,,             ,, ,,,    ,
                   ,,,,,,,,,,,,,,,,`           ,, ,,,   `,` `
                  ,,,,,,,,,,,,,,,,,,          ,, ,,,   ,,`
                  ,,,,,,,,,,,,,,,,,,,        ,, ,,.   ,,,
                 ,,,,,,,,,,,,,,,,,,,,       ,, ,,. `,,,,  `
                `,,,,,,,,,,,,,,,,,,,,,     ,,`,,``.,,,,  .
                ,,,,,,,,,,,,,,,,,,,,,,,   ,,,,,,.,,,,,  ,
               `.,,,,,,,,,,,,,,,,,,,,,,  ,,,,,,,,,,,, .,
               ,.,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,
              . ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
              ,.,.,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
             . .,, ,.,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,`
             , ,,`,,,,,,,,,``,,,,,,,,,,,,,,,,,,,,,,.
            ` ,,, , ,,,,,,,  ,,,,,,,,,,,,,,,,,,,,,,
            .`,, ,..,,,,`     ,,,,,,,,,,,,,,,,,,,,
              ,, , ,,,,``     ,,,,,,,,,,,,,,,,,,,
            .,` ,,.,,,  ,      ,,,,,,,,,,,,,,,,,
           ` ,,`, ,,., ,`       ,,,,,,,,,,,,,,, `
          ,,,  ,, ,,,  ,       .,,,,,,,,,,,,,,,`,`
          ,,,,`,,,,,, ,      . ,,,,,,,,,,,,,,,,,,,
          ,,,,,, ,,,, ,     ,,,,,,,,,,,,,,,,,,,,,`
         `,,,,,,,,,, ,`   .,,,,,,,,,,,,,,,,,,,,, ,
         .,, ,,,,,,,`,  ,,,,,,,,,,,,,,,,,,,,,,,,
          ,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,`` ,
          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
          ,,,,,,,,,,,,,,,,,,,,,,,,,,,.,,,,,,,,,,,,,,
          .,,.,,,,,,,,,,,,,,,,,,,,,,  ,,,,,,,,,,,.`,
           ,, ,,,,,,,,,,,,,,,,,,,,    ,,,,,,,,,,,.,,
            ,, ,,,,,,,,,,,,,`,,,,        . ,,,`,,. ,
                 ,,,,,,,,,, ``,            `,,.,, ,.
                   ,,,,,,`  .`               `,  `,
                     ,,,,.,,                   .,,
                       .,,`                     `
		-->

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch" >
		<link href="<?php echo get_template_directory_uri(); ?>/humans.txt" rel="author">

        <!-- FAVICONS => http://www.favicon-generator.org/ -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/ms-icon-144x144.png">

		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#ffffff">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#ffffff">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<?php // if((defined('WP_DEVELOPMENTMODE') && WP_DEVELOPMENTMODE )): ?>



		<?php // endif; ?>

	</head>
	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJSV77W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

		<!-- Botón hamburguesa Menú Lateral -->
		<!--<a href="#toggle-canvas" class="toggle-canvas"><div class="hamburguesa"></div></a>-->
		<!-- Fin del Botón hamburguesa Menú Lateral -->

		<!-- Top (Capa que engloba todo el contenido) -->
		<div id="top">
			<!-- Header -->
			<?php if(!is_singular( 'videos' )) : ?>
				<header role="banner" class="site-header">

				<?php if ( !is_post_type_archive('studio') && !is_singular('studio') ) : ?>
					<!-- Menu principal -->
					<nav class="nav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
					</nav>
					<!-- Fin del Menu principal -->
					<!-- Logo de la web icecream-logo.svg-->
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-icecream-new.png" alt="Logo Icecream">
						</a>
					</div>
					<!-- Fin del logo de la web -->
				<?php else : ?>
					<?php if ( is_post_type_archive('studio') ) : ?>
					<nav class="nav" role="navigation">
						<ul class="menu"><li><a href="<?php bloginfo( 'url' ) ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icecream_icono_arrow-left.svg" /><?php _e( 'Back to Icecream', 'ct' ); ?></a></li></ul>
					</nav>
					<?php else : ?>
						<nav class="nav"><div class="menu"><a href="<?php echo get_post_type_archive_link( 'studio' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icecream_icono_arrow-left.svg" alt="Back to Icecream Studio"></a></div></nav>
					<?php endif; ?>
					<div class="logo">
						<a href="<?php echo get_post_type_archive_link( 'studio' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-icecream-studio.svg" alt="Logo Icecream"></a>
					</div>
				<?php endif; ?>

				</header>
			<?php endif; ?>
			<!-- Fin del Header -->

			<!-- Contenido (Main + Sidebar) -->
			<div class="contenido">
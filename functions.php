<?php

/*
----------------------------------------------------------------------------------------------------------------------------------------------------------
INSTALACIÓN WP
Lo básico para arrancar Wordpress: Sidebar, Menú Principal, Woocommerce Support, Traducciones
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
include __DIR__ . "/includes/installation.php";

/*
----------------------------------------------------------------------------------------------------------------------------------------------------------
CONFIGURACIÓN WP
Aquí añadimos nuestras propias funciones de Wordpress
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
include __DIR__ . "/includes/config.php";

/*
----------------------------------------------------------------------------------------------------------------------------------------------------------
INSTALACIÓN WOOCOMMERCE
Lo básico para arrancar Woocommerce
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
//include __DIR__ . "/includes/woo-installation.php";

/*
----------------------------------------------------------------------------------------------------------------------------------------------------------
CONFIGURACIÓN WOOCOMMERCE
Aquí añadimos nuestras propias funciones de Woocommerce
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
//include __DIR__ . "/includes/woo-config.php";

/*
----------------------------------------------------------------------------------------------------------------------------------------------------------
SHORTCODES
Aquí añadimos nuestros shortcodes
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
include __DIR__ . "/includes/shortcodes.php";

/*
----------------------------------------------------------------------------------------------------------------------------------------------------------
SCRIPTS Y ESTILOS
Registramos los Scripts JS y los estios CSS en la carpeta 'includes/enqueues/'
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
foreach (glob(__DIR__ . "/includes/enqueues/*.php") as $filename)
    include $filename;

/*
----------------------------------------------------------------------------------------------------------------------------------------------------------
CUSTOM POST TYPES (CPT)
Incluimos todos los Custom Post Types que necesitemos en la carpeta 'includes/cpts/'
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
foreach (glob(__DIR__ . "/includes/cpts/*.php") as $filename)
    include $filename;

/*
----------------------------------------------------------------------------------------------------------------------------------------------------------
ADVANCED CUSTOM FIELDS (ACF)
Incluimos todos los Advanced Custom Field files que necesitemos en la carpeta 'includes/acf/'
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
foreach (glob(__DIR__ . "/includes/acf/*.php") as $filename)
    include $filename;

/*
----------------------------------------------------------------------------------------------------------------------------------------------------------
CUSTOM USER ROLES (CUR)
Incluimos todos los nuevos tipos de usuarios y sus roles en la carpeta 'includes/cur/'
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
foreach (glob(__DIR__ . "/includes/cur/*.php") as $filename)
    include $filename;

/*
SUBIDA DE .VCF
Permitimos la subida de archivos de contacto .vcf a la librería de medios
----------------------------------------------------------------------------------------------------------------------------------------------------------
*/
 add_filter('upload_mimes', 'custom_upload_mimes');
 function custom_upload_mimes ( $existing_mimes=array() ){
 // add your extension to the array
 $existing_mimes['vcf'] = 'text/x-vcard'; return $existing_mimes;
 }


function sacarAnimacion($imagen) {
    if( !empty($imagen) ) {
        $url = $imagen['url'];
        $fichero_alternativo = $imagen['alt'];
        $nombre_fichero = basename($url);
        $ruta = str_replace(site_url().'/wp-content','',$url);
        $ruta = str_replace($nombre_fichero,'',$ruta);

        if ($fichero_alternativo != '' && file_exists(WP_CONTENT_DIR . $ruta.$fichero_alternativo)) {
            $nueva_imagen = str_replace($nombre_fichero, $fichero_alternativo, $url);
            return $nueva_imagen;
        }
    }

    return '';
}

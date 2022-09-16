<?php

// -----------------------------------------------------------------------------------------------------------------------------------------------------------
// INSTAGRAM.PHP
// Premaquetado del modulo de Instagram | Ruta: premaquetados/instagram.php
// -----------------------------------------------------------------------------------------------------------------------------------------------------------

/*

Para llamarla desde otro archivo:

    get_template_part('premaquetados/instagram');

*/

?>

<?php 

function fetchData($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

/*
ID DE LA CUENTA
Se puede obtener aquí: https://smashballoon.com/instagram-feed/find-instagram-user-id/
Una vez lo tengas sustituye el de abajo con él 
*/
$instagram_id = '3149605545'; // código de ejemplo

/*
ACCESS TOKEN DE LA CUENTA
Se puede obtener aquí: http://instagram.pixelunion.net/
Una vez lo tengas sustituye el de abajo con él 
*/
$access_token = '3149605545.1677ed0.15ce4f28712c493c9b524c11ba4acf15'; // código de ejemplo

$result = fetchData("https://api.instagram.com/v1/users/". $instagram_id ."/media/recent/?access_token=". $access_token ."");
$result = json_decode($result);
$in = 0;

/*

    ELEMENTOS QUE PODEMOS LLAMAR | Fuente: https://rudrastyh.com/php/instagram-api-recent-photos.html#get_photos

    $post->images->standard_resolution->url - URL of 612x612 image
    $post->images->low_resolution->url - URL of 150x150 image
    $post->images->thumbnail->url - URL of 306x306 image

    $post->type - "image" or "video"
    $post->videos->low_resolution->url - URL of 480x480 video
    $post->videos->standard_resolution->url - URL of 640x640 video

    $post->link - URL of an Instagram post
    $post->tags - array of assigned tags
    $post->id - Instagram post ID
    $post->filter - photo filter
    $post->likes->count - the number of likes to this photo
    $post->comments->count - the number of comments
    $post->caption->text
    $post->created_time

    $post->user->username
    $post->user->profile_picture
    $post->user->id

    $post->location->latitude
    $post->location->longitude
    $post->location->street_address
    $post->location->name

*/
?>

<!-- Contenedor -->
<div class="instagram">

    <!-- Contenedor de Boostrap -->
     <div class="container">

    	<?php foreach ($result->data as $post) { // Loop ?>

            <?php if($in < 6) { // Nº DE FOTOS A MOSTRAR ?>

                <!-- Foto de Instagram -->
            	<div class="col-md-3"><!-- Ahora a 4 columnas (col-md-3) -->
                    <a class="instalink" href="<?php echo $post->link; // ?>" target="_blank">
                        <img class="image" src="<?php echo $post->images->standard_resolution->url; // imagen de 612 x 612 px ?>">
                    </a>
                </div>
                <!-- Foto de Instagram -->

            <?php ++$in; } ?>

        <?php } ?>
    </div>
    <!-- Fin del Contenedor de Boostrap -->

</div>
<!-- Fin del Contenedor -->
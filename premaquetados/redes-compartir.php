<?php

// -----------------------------------------------------------------------------------------------------------------------------------------------------------
// REDES-COMPARTIR.PHP
// Premaquetado del menú de redes sociales. Ruta: premaquetados/redes-compartir.php
// -----------------------------------------------------------------------------------------------------------------------------------------------------------

/*

Para llamarla desde otro archivo:

    get_template_part('premaquetados/redes-compartir');

*/

?>

<?php

// DESCRIPCIÓN FACEBOOK
// Para los hastags sustituye # por %23
$facebook_des = "Lo importante no es lo que calzas, sino lo que sientes al moverte. Dile al mundo que significa empezar a vestirte por los pies. %23BeElevant";

// DESCRIPCIÓN TWITTER
// Para los hastags sustituye # por %23
$twitter_des = "Dile al mundo lo que significa empezar a vestirse por los pies. %23BeElevant"; // Hastags: sustituye # por %23

// Más redes aquí: https://www.doitwithwp.com/add-sharing-buttons-to-wordpress-no-plugins-or-external-references/

?>

<!-- Contendor -->
<ul class="menu redes">

    <!-- Facebook -->
    <li>
        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>&amp;description=<?php echo $facebook_des; ?>" title="Comparte en Facebook!" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
    </li>

    <!-- Twitter -->
    <li>
        <a href="http://twitter.com/home/?status=<?php echo $twitter_des; ?> <?php the_permalink(); ?>" title="Twitea ésto!" target="_blank">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
    </li>

</ul>
<!-- Fin del Contenedor -->
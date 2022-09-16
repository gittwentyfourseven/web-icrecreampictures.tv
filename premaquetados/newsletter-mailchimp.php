<?php

// -----------------------------------------------------------------------------------------------------------------------------------------------------------
// NEWSLETTER-MAILCHIMP.PHP
// Premaquetado de la newsletter de Mailchimp. Ruta: premaquetados/newsletter-mailchimp.php
// -----------------------------------------------------------------------------------------------------------------------------------------------------------

/*

Para llamarla desde otro archivo:

    get_template_part('premaquetados/newsletter-mailchimp');

*/

?>

<?php 

    // URL DE LA LISTA DE MAILCHIMP
    // Para obtenerla necesitamos acceder a la cuenta de mailchimp del cliente
    // Una vez la tengas sustituye la de abajo con ella

    $url_mailchimp = '//dalstontime.us12.list-manage.com/subscribe/post?u=ef87fdf33dd282e18f77cff5f&amp;id=b6f90c0200'; // URL de ejemplo

?>

<!-- Contenedor -->
<div class="mailchimp">

    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
        <form action="<?php echo $url_mailchimp ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate> 
            <div id="mc_embed_signup_scroll">
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_ef87fdf33dd282e18f77cff5f_b6f90c0200" tabindex="-1" value="">
                </div>
                <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button">
            </div>
        </form>
    </div>
    <!--End mc_embed_signup-->

</div>
<!-- Fin del Contenedor -->
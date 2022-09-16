<?php

// -----------------------------------------------------------------------------------------------------------------------------------------------------------
// NEWSLETTER-DAVID.PHP
// Premaquetado de la newsletter de David. Ruta: premaquetados/newsletter-david.php
// -----------------------------------------------------------------------------------------------------------------------------------------------------------

/*

Para llamarla desde otro archivo:

	get_template_part('premaquetados/newsletter-david');

*/

?>

<?php 

	// CLAVE
	// Nos la pasa Marquitos (algún día jefe de todo ésto)
	// Una vez la tengas sustituye la de abajo con ella

	$clave = "PAIpy0UtnMS5Bpcso9xiug"; // clave de ejemplo

?>

<!-- Contendor -->
<div class="newsletter">

    <!-- Formulario -->
	<form id="estoyenremoto" action="http://newsletter.estoyenremoto.com/subscribe" method="POST" accept-charset="utf-8">
	    <input class="email" type="text" name="email" id="email" placeholder="email" />
	    <input type="hidden" name="list" value="<?php echo $clave; ?>" />
	    <input class="button" type="submit" name="submit" id="submit" />
	</form>
	<!-- Fin del Formulario -->

</div>
<!-- Fin del Contendor -->
<?php

// -----------------------------------------------------------------------------------------------------------------------------------------------------------
// CESTA.PHP
// Premaquetado de la mini-cesta | Ruta: premaquetados/cesta.php
// -----------------------------------------------------------------------------------------------------------------------------------------------------------

/*

Para llamarla desde otro archivo:

	get_template_part('premaquetados/cesta');

*/

?>

<!-- Contenedor -->
<div class="cesta">

	<!-- Botón cerrar cesta - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<div class="cerrar-cesta">
		<img src="<?php echo get_template_directory_uri(); ?>/img/elevant_icono_cerrar-n.svg" alt="icono cerrar">
	</div>
	<!-- Fin del Botón cerrar cesta -->

	<!-- Contador de productos - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<div class="mi-cesta">
		<?php echo _e('Mi cesta', 'ct_'); ?> <?php echo sprintf ( _n( '(%d)', '(%d)', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
	</div>
	<!-- Fin del Contador de productos -->

	<?php do_action( 'woocommerce_before_cart' ); ?>

	<!-- Productos - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
		<div>
			<?php do_action( 'woocommerce_before_cart_table' ); ?>

			<!-- Lista de Productos - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<ul class="cart_list">
			<?php if ( ! WC()->cart->is_empty() ) : ?>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<!-- Producto - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
						<li class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
			
							<!-- Botón de eliminar producto - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
							<?php
								echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
									'<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s"><img src="'. get_template_directory_uri() .'/img/elevant_icono_cerrar-c.svg" alt="icono cerrar"></a>',
									esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
									__( 'Remove this item', 'woocommerce' ),
									esc_attr( $product_id ),
									esc_attr( $_product->get_sku() )
								), $cart_item_key );
							?>
							<!-- Fin del Botón de eliminar producto -->

							<!-- Foto producto - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
							<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image('medium'), $cart_item, $cart_item_key );
								if ( ! $product_permalink ) {
									echo $thumbnail;
								} else {
									printf( '<a class="miniatura" href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
								}
							?>
							<!-- Fin de la Foto producto -->
						
							<!-- Nombre producto - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
							<?php
								if ( ! $product_permalink ) {
									echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
								} else {
									echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a class="titulo" href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
								}
								// Meta data
								echo WC()->cart->get_item_data( $cart_item );
								// Backorder notification
								if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
									echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
								}
							?>
							<!-- Fin del Nombre producto -->

							<!-- Cantidad, Precio y Subtotal - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
							<div class="datos">
								<span class="cantidad">
									<?php _e('Cantidad:','ct') ?> <?php echo $cart_item['quantity']; // Cantidad ?>
								</span>
								<!--<span class="product-price" data-title="<?php _e( 'Price', 'woocommerce' ); ?>">
									<?php // echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // Precio ?>
								</span>-->
								<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // Subtotal ?>
							</div>
							<!-- Fin de la Cantidad, Precio y Subtotal -->

							<!-- Actualizar cantidad -->
							<!--<div class="actualizar-cantidad">
								<?php
									/*if ( $_product->is_sold_individually() ) {
										$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
									} else {
										$product_quantity = woocommerce_quantity_input( array(
											'input_name'  => "cart[{$cart_item_key}][qty]",
											'input_value' => $cart_item['quantity'],
											'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
											'min_value'   => '0'
										), $_product, false );
									}
									echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );*/
								?>
								<div class="actualizar">
									<input type="submit" class="button" name="update_cart" value=" " />
									<?php // do_action( 'woocommerce_cart_actions' ); ?>
									<?php // wp_nonce_field( 'woocommerce-cart' ); ?>
								</div>
							</div>-->
							<!-- Fin de Actualizar cantidad -->
							
						</li>
						<!-- Fin del Producto -->
						<?php
					}
				}

				do_action( 'woocommerce_cart_contents' );
				?>

				<?php do_action( 'woocommerce_after_cart_contents' ); ?>
			</ul>
			<!-- Fin de la Lista de Productos -->

			<?php else : ?>
				<!-- Cesta vacía - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
				<div class="centrado vacio">
					<p>
						<span><?php _e('¡Ey!','ct') ?></span> <?php _e('Tu cesta está vacía','ct') ?>
					</p>
					<a class="boton" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
						<?php _e('Comenzar','ct') ?>
					</a>
				</div>
				<!-- Fin de la Cesta vacía -->
			<?php endif; ?>

			<?php do_action( 'woocommerce_after_cart_table' ); ?>	
		</div>
	</form>
	<!-- Fin de los productos -->

	<?php do_action( 'woocommerce_after_cart' ); ?>

	<!-- Total + Botón Checkout - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<?php if ( ! WC()->cart->is_empty() ) : ?>
		<div class="botones">
			<p class="total"><?php _e( 'Total', 'woocommerce' ); ?> <?php echo WC()->cart->get_cart_subtotal(); ?></p>
			<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
			<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="boton"><?php _e( 'Checkout', 'woocommerce' ); ?></a>
		</div>
	<?php endif; ?>
	<!-- Fin del Total + Botón checkout -->

</div>
<!-- Fin del Contenedor -->

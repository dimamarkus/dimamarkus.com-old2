<?php
	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
		if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
			$product_title = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
		}
	}
 ?>



 <h3 id="order_review_heading"><?php _e( '1. Order Summary', 'woocommerce' ); ?></h3>

 <div class="panel">


 	<table class="shop_table">
 		<tbody>

 			<tr>
 				<th><?php _e( 'Product', 'woocommerce' ); ?></th>
 				<td><?php echo $product_title ?></th>
 				</tr>

 				<?php foreach ( WC()->cart->get_coupons( 'cart' ) as $code => $coupon ) : ?>
 					<tr class="cart-discount coupon-<?php echo esc_attr( $code ); ?>">
 						<th><?php _e( 'Coupon:', 'woocommerce' ); ?> <?php echo esc_html( $code ); ?></th>
 						<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
 					</tr>
 				<?php endforeach; ?>

 				<?php foreach ( WC()->cart->get_coupons( 'order' ) as $code => $coupon ) : ?>
 					<tr class="order-discount coupon-<?php echo esc_attr( $code ); ?>">
 						<th><?php _e( 'Coupon:', 'woocommerce' ); ?> <?php echo esc_html( $code ); ?></th>
 						<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
 					</tr>
 				<?php endforeach; ?>



 				<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

 				<tr class="order-total">
 					<th><?php _e( 'Order Total', 'woocommerce' ); ?></th>
 					<td><?php wc_cart_totals_order_total_html(); ?></td>
 				</tr>

 				<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

 			</tbody>
 		</table>
 	</div>

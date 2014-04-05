<?php
/**
 * Review order form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<div id="order_review" class="">

	<h3>3. Your Payment Information</h3>



		<?php do_action( 'woocommerce_review_order_before_payment' ); ?>

		<div id="payment" class="row panel">
			<?php if ( WC()->cart->needs_payment() ) : ?>
			<ul class="payment_methods methods">
				<?php
					$available_gateways = WC()->payment_gateways->get_available_payment_gateways();
					if ( ! empty( $available_gateways ) ) {

						// Chosen Method
						if ( isset( WC()->session->chosen_payment_method ) && isset( $available_gateways[ WC()->session->chosen_payment_method ] ) ) {
							$available_gateways[ WC()->session->chosen_payment_method ]->set_current();
						} elseif ( isset( $available_gateways[ get_option( 'woocommerce_default_gateway' ) ] ) ) {
							$available_gateways[ get_option( 'woocommerce_default_gateway' ) ]->set_current();
						} else {
							current( $available_gateways )->set_current();
						}

						foreach ( $available_gateways as $gateway ) {
							?>
							<li class="payment_method_<?php echo $gateway->id; ?>">
								<input id="payment_method_<?php echo $gateway->id; ?>" type="radio" class="input-radio" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />
								<label for="payment_method_<?php echo $gateway->id; ?>"><?php echo $gateway->get_title(); ?> <?php echo $gateway->get_icon(); ?></label>
								<?php
									if ( $gateway->has_fields() || $gateway->get_description() ) :
										echo '<div class="payment_box payment_method_' . $gateway->id . '" ' . ( $gateway->chosen ? '' : 'style="display:none;"' ) . '>';
										$gateway->payment_fields();
										echo '</div>';
									endif;
								?>
							</li>
							<?php
						}
					} else {

						if ( ! WC()->customer->get_country() )
							echo '<p>' . __( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) . '</p>';
						else
							echo '<p>' . __( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) . '</p>';

					}
				?>
			</ul>
			<?php endif; ?>

		</div>

		<div class="form-row place-order">

			<noscript><?php _e( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ); ?><br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php _e( 'Update totals', 'woocommerce' ); ?>" /></noscript>

			<?php wp_nonce_field( 'woocommerce-process_checkout' ); ?>

			<?php do_action( 'woocommerce_review_order_before_submit' ); ?>

			<?php
			$order_button_text = apply_filters( 'woocommerce_order_button_text', __( 'Place order', 'woocommerce' ) );

			echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="button success radius" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />' );
			?>

			<?php if ( wc_get_page_id( 'terms' ) > 0 && apply_filters( 'woocommerce_checkout_show_terms', true ) ) {
				$terms_is_checked = apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) );
				?>
				<p class="form-row terms">
					<label for="terms" class="checkbox"><?php _e( 'I have read and accept the', 'woocommerce' ); ?> <a href="<?php echo esc_url( get_permalink(wc_get_page_id('terms')) ); ?>" target="_blank"><?php _e( 'terms &amp; conditions', 'woocommerce' ); ?></a></label>
					<input type="checkbox" class="input-checkbox" name="terms" <?php checked( $terms_is_checked, true ); ?> id="terms" />
				</p>
			<?php } ?>

			<?php do_action( 'woocommerce_review_order_after_submit' ); ?>

		</div>

		<?php do_action( 'woocommerce_review_order_after_payment' ); ?>


</div>
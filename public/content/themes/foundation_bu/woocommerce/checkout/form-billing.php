<?php
/**
 * Checkout billing information form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.2
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<div class="woocommerce-billing-fields">




	<h3>2. <?php _e( 'Your Account Info', 'woocommerce' ); ?></h3>

	<div class="row panel">
		<div class="large-6 columns">

		<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

		<?php foreach ( $checkout->checkout_fields['billing'] as $key => $field ) : ?>
			<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
		<?php endforeach; ?>

		<?php do_action('woocommerce_after_checkout_billing_form', $checkout ); ?>


		<?php if ( ! is_user_logged_in() && $checkout->enable_signup ) : ?>

			<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

			<?php if ( ! empty( $checkout->checkout_fields['account'] ) ) : ?>

				<div class="create-account">

					<?php foreach ( $checkout->checkout_fields['account'] as $key => $field ) : ?>

						<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

					<?php endforeach; ?>

					<div class="clear"></div>

				</div>

			<?php endif; ?>

			<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
		</div>
	</div>

	<?php endif; ?>
</div>
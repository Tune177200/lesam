<?php

/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
    exit;
}

do_action('woocommerce_before_checkout_form', $checkout);

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
    return;
}

?>
<div class="row row8">
    <div class="item col-lg-8" id="customer_details">
        <form id="fcheckout" name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

            <?php if ($checkout->get_checkout_fields()) : ?>

                <?php do_action('woocommerce_checkout_before_customer_details'); ?>

                <div class="wrap-cart">
                    <div class="cart-heading"><span class="color1">THÔNG TIN GIAO HÀNG</span></div>
                    <div class="cart-body p-1530 pt-30">
                        <?php do_action('woocommerce_checkout_billing'); ?>
                    </div>
                    <?php do_action('woocommerce_checkout_shipping'); ?>
                </div>

                <?php do_action('woocommerce_checkout_after_customer_details'); ?>

            <?php endif; ?>
            <div class="wrap-cart">
                <?php do_action('woocommerce_checkout_before_order_review_heading'); ?>
                <div class="cart-heading"><span class="color1">THANH TOÁN</span></div>

                <?php do_action('woocommerce_checkout_before_order_review'); ?>

                <div class="cart-body p-1530">
                    <div class="form-inputb">
                        <?php woocommerce_checkout_payment(); ?>
                    </div>

                </div>

                <?php do_action('woocommerce_checkout_after_order_review'); ?>
            </div>
        </form>
    </div>
    <div class="item col-lg-4">
        <div class="wrap-cart">
            <div class="cart-heading plr-15"><span class="text-uppercase color1">Đơn hàng</span> (4 sản phẩm)</div>
            <div class="cart-body plr-15">
                <?php woocommerce_order_review(); ?>
            </div>
        </div>
        <div class="btn-submit">
            <noscript>
                <?php
                /* translators: $1 and $2 opening and closing emphasis tags respectively */
                printf(esc_html__('Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce'), '<em>', '</em>');
                ?>
                <br /><button type="submit" class="button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e('Update totals', 'woocommerce'); ?>"><?php esc_html_e('Update totals', 'woocommerce'); ?></button>
            </noscript>

            <?php do_action('woocommerce_review_order_before_submit'); ?>

            <?php echo apply_filters('woocommerce_order_button_html', '<button type="submit" id="placeOrder" class="btn-pay w-100" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr($order_button_text) . '" data-value="' . esc_attr($order_button_text) . '">Thanh toán</button>'); // @codingStandardsIgnoreLine 
            ?>

            <?php do_action('woocommerce_review_order_after_submit'); ?>

            <?php wp_nonce_field('woocommerce-process_checkout', 'woocommerce-process-checkout-nonce'); ?>
        </div>
    </div>
</div>


<?php do_action('woocommerce_after_checkout_form', $checkout); ?>
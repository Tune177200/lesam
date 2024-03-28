<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>
<div class="row">
	<div class="col-lg-8">
		<div class="wrap-cart">
			<div class="cart-heading"><strong>Giỏ hàng</strong></div>
			<div class="cart-body">
				<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
					<?php do_action('woocommerce_before_cart_contents');

					foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
						$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
						$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

						$product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);

						if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {

							$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
					?>
							<article class="cart-box">
								<div class="row row17">
									<div class="item col-sm-auto">
										<figure>
											<?php
											$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

											if (!$product_permalink) {
												echo $thumbnail;
											} else {
												printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail);
											}
											?>
										</figure>
									</div>
									<div class="item col-sm">
										<div class="row row17">
											<div class="item col-12 col-xl-5 text-left text-sm-start" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
												<?php
												if (!$product_permalink) {
													echo wp_kses_post($product_name . '&nbsp;');
												} else {

													echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
												}

												do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

												echo wc_get_formatted_cart_item_data($cart_item);

												if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
													echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
												}
												?>
											</div>

											<div class="item col-sm-8 col-md-6 col-xl-4 text-center text-sm-start text-xl-center" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
												<?php
												echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
												?>
											</div>

											<div class="item col-sm-4 col-xl-3 text-center text-sm-left text-md-center text-xl-end" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
												<?php
												if ($_product->is_sold_individually()) {
													$min_quantity = 1;
													$max_quantity = 1;
												} else {
													$min_quantity = 0;
													$max_quantity = $_product->get_max_purchase_quantity();
												}

												$product_quantity = woocommerce_quantity_input(
													array(
														'input_name'   => "cart[{$cart_item_key}][qty]",
														'input_value'  => $cart_item['quantity'],
														'max_value'    => $max_quantity,
														'min_value'    => $min_quantity,
														'product_name' => $product_name,
													),
													$_product,
													false
												);
												echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
												?>
											</div>
											<div class="item col-12 col-md-2 col-xl-12 text-end text-xl-start">
												<?php echo apply_filters(
													'woocommerce_cart_item_remove_link',
													sprintf(
														'<a href="%s" class="del" aria-label="%s" data-product_id="%s" data-product_sku="%s">Xóa</a>',
														esc_url(wc_get_cart_remove_url($cart_item_key)),
														esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
														esc_attr($product_id),
														esc_attr($_product->get_sku())
													),
													$cart_item_key
												); ?>
											</div>

										</div>
									</div>
								</div>
							</article>
					<?php }
					}
					?>

					<?php
					do_action('woocommerce_cart_contents');

					do_action('woocommerce_cart_actions');

					wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>

				</form>
				<?php do_action('woocommerce_before_cart_collaterals'); ?>
			</div>

		</div>
	</div>
	<div class="col-lg-4">
		<div class="cart_totals calculated_shipping">
			<?php do_action('woocommerce_before_cart_collaterals'); ?>

			<?php
			/**
			 * Cart collaterals hook.
			 *
			 * @hooked woocommerce_cross_sell_display
			 * @hooked woocommerce_cart_totals - 10
			 */
			do_action('woocommerce_cart_collaterals');
			?>
			<?php do_action('woocommerce_after_cart'); ?>
		</div>
	</div>
</div>
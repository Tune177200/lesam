<?php

/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined('ABSPATH') || exit;

?>
<div class="wrap-cart fontzise-16">
    <div class="cart-heading plr-15"><strong>Thông tin đơn hàng</strong></div>
    <div class="cart-body">
        <div class="p-15 ptb-20 border-b1">
            <div class="row  align-items-center">
                <div class="col-auto">Tổng tiền tạm tính:</div>
                <div class="col text-end">
                    <div class="price-1">
                        <strong>
                            <?php wc_cart_totals_order_total_html(); ?>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-20">
            <ul class="pl-35">
                <li>Phí vận chuyển sẽ được tính ở trang thanh toán.</li>
                <li>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán</li>
            </ul>
            <div class="text-center">
                <?php do_action('woocommerce_proceed_to_checkout'); ?>
            </div>
        </div>
    </div>
</div>
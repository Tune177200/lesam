<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}
?>
<div class="<?php echo is_single() ? 'item col-12 col-sm-6 pb-30' : 'col-lg-3 col-md-4 col-6 sp-col pb-22' ?>">
    <article class="article-product product-box text-center h-100">
        <figure>
            <a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title() ?>"></a>
        </figure>
        <div class="product-content">
            <header>
                <h4><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title() ?></a></h4>
                <p class="price">
                    <strong>
                        <?php echo $product->get_price_html(); ?>
                    </strong>
                </p>
            </header>
            <div class="dscription"><?php echo get_field('trong_luong') ? 'Trọng lượng: ' . get_field('trong_luong') : '' ?></div>
        </div>
        <a href="#" value="<?php echo get_the_ID() ?>" class="single_add_to_cart_button" data-product_id="<?php echo get_the_ID() ?>" data-product_sku="" aria-label="Add “Nhân hạt Macca HAPPY NUTS 500gr” to your cart">
            <div class="bag"></div>
        </a>
    </article>
</div>
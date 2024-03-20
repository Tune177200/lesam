<?php

/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
    return;
}

global $product;

$columns           = apply_filters('woocommerce_product_thumbnails_columns', 4);
$attachment_ids = $product->get_gallery_image_ids();
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
    'woocommerce_single_product_image_gallery_classes',
    array(
        'woocommerce-product-gallery',
        'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
        'woocommerce-product-gallery--columns-' . absint($columns),
        'images',
    )
);

if (!empty($attachment_ids)) { ?>
    <div class="slider-vertical" id="slider-vertical-0">
        <div class="slider-for-wrap">
            <div class="slider-for">
                <?php
                if ($post_thumbnail_id) {
                    // $html = wc_get_gallery_image_html($post_thumbnail_id, true);
                    $html = '<div class="1">
                        <div class="item" style="width: 100%; display: inline-block;">
                            <figure><img class="w-100" src="' . wp_get_attachment_image_src($post_thumbnail_id)[0] . '" alt=""></figure>
                        </div>
                    </div>';
                    // $html = '<div data-thumb="' . esc_url( $thumbnail_src[0] ) . '" data-thumb-alt="' . esc_attr( $alt_text ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_src[0] ) . '">' . $image . '</a></div>';

                } else {
                    $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
                    $html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
                    $html .= '</div>';
                }

                echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

                do_action('woocommerce_product_thumbnails');
                ?>

            </div>
        </div>
        <div class="slider-nav-wrap overflow-hidden">
            <div class="slider-nav">
                <?php
                if ($post_thumbnail_id) {
                    // $html = wc_get_gallery_image_html($post_thumbnail_id, true);
                    $html = '<div class="3">
                        <div class="item" style="width: 100%; display: inline-block;">
                            <figure><img class="w-100" src="' . wp_get_attachment_image_src($post_thumbnail_id)[0] . '" alt=""></figure>
                        </div>
                    </div>';
                } else {
                    $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
                    $html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
                    $html .= '</div>';
                }

                echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

                do_action('woocommerce_product_thumbnails'); ?>

            </div>
        </div>
    </div>
<?php } else {
    if ($post_thumbnail_id) {
        // $html = wc_get_gallery_image_html($post_thumbnail_id, true);
        $html = '<img class="w-100" src="' . wp_get_attachment_image_src($post_thumbnail_id)[0] . '" alt="">';
        // $html = '<div data-thumb="' . esc_url( $thumbnail_src[0] ) . '" data-thumb-alt="' . esc_attr( $alt_text ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_src[0] ) . '">' . $image . '</a></div>';

    } else {
        $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
        $html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
        $html .= '</div>';
    }

    echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

    do_action('woocommerce_product_thumbnails');
}
?>


<?php /*
<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>" data-columns="<?php echo esc_attr($columns); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
    <div class="woocommerce-product-gallery__wrapper">
        <?php
        if ($post_thumbnail_id) {
            $html = wc_get_gallery_image_html($post_thumbnail_id, true);
        } else {
            $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
            $html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
            $html .= '</div>';
        }

        echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

        do_action('woocommerce_product_thumbnails');
        ?>
    </div>
</div>*/ ?>
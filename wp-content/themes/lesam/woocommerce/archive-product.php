<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');
$term = get_queried_object();

$banner = get_field('banner', $term);

echo '<main class="main-wrap" style="padding-bottom: 286.188px; padding-top: 108.391px;">'; ?>
<div class="bn-inner">
    <img class="image image-mb" src="<?php echo !empty($banner['banner_pc']['url']) ? $banner['banner_pc']['url'] : '' ?>" alt="" style="display: none;">
    <img class="image image-dt" src="<?php echo !empty($banner['banner_mb']['url']) ? $banner['banner_mb']['url'] : '' ?>" alt="">
</div>
<!-- <header class="woocommerce-products-header"> -->
<?php /*if (apply_filters('woocommerce_show_page_title', true)) : ?>
        <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
    <?php endif; */ ?>

<?php
// /**
//  * Hook: woocommerce_archive_description.
//  *
//  * @hooked woocommerce_taxonomy_archive_description - 10
//  * @hooked woocommerce_product_archive_description - 10
//  */
// do_action('woocommerce_archive_description');
?>
<!-- </header> -->
<?php
echo '<div class="tempt-2">';
echo '<div class="pt-30">';
echo '<div class="container">';
echo '<div class="box-border gtype">';
if (woocommerce_product_loop()) {

    // /**
    //  * Hook: woocommerce_before_shop_loop.
    //  *
    //  * @hooked woocommerce_output_all_notices - 10
    //  * @hooked woocommerce_result_count - 20
    //  * @hooked woocommerce_catalog_ordering - 30
    //  */
    // do_action('woocommerce_before_shop_loop');

    woocommerce_product_loop_start();

    if (wc_get_loop_prop('total')) {
        while (have_posts()) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action('woocommerce_shop_loop');

            wc_get_template_part('content', 'product');
        }
    }

    woocommerce_product_loop_end();

    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action('woocommerce_after_shop_loop');
} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action('woocommerce_no_products_found');
}
echo '</div>';
echo '</div>';
echo '</div>';

if (!empty($banner['banner_bottom']['url'])) {
?>
    <div class="container bn-2">
        <img src="<?php echo $banner['banner_bottom']['url']; ?>">
    </div>
<?php
}
echo '</div>';
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action('woocommerce_sidebar');
echo '</main>';
get_footer('shop');

?>
<main class="main-wrap" style="padding-bottom: 286.188px; padding-top: 108.391px;">

    <div class="tempt-2">
        <div class="pt-30">
            <div class="container">
                <div class="box-border gtype">
                    <div class="row sp-col-8 break-474">

                        <div class="col-lg-3 col-md-4 col-6 sp-col pb-22">
                            <article class="article-product product-box text-center h-100">
                                <figure>
                                    <a href="https://happynuts.vn/san-pham/granola-premium-_-vi-dua-2/"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Granola_vi_dua_8768.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <header>
                                        <h4><a href="https://happynuts.vn/san-pham/granola-premium-_-vi-dua-2/">Premium Granola – Vị Dừa HAPPY NUTS 500gr</a></h4>
                                        <p class="price"><strong><span class="woocommerce-Price-amount amount"><bdi>229,000&nbsp;<span class="woocommerce-Price-currencySymbol"> vnđ</span></bdi></span></strong></p>
                                    </header>
                                    <div class="dscription">Trọng lượng: 500gr</div>
                                    <!-- <p>Khối lượng: 30gr</p> -->
                                </div>
                                <a href="#" value="347" class="single_add_to_cart_button" data-product_id="347" data-product_sku="" aria-label="Add “Premium Granola – Vị Dừa HAPPY NUTS 500gr” to your cart">
                                    <div class="bag"></div>
                                </a>
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 sp-col pb-22">
                            <article class="article-product product-box text-center h-100">
                                <figure>
                                    <a href="https://happynuts.vn/san-pham/granola-premium-_-vi-nho/"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Granola_vi_nho__0004_IMG_8807.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <header>
                                        <h4><a href="https://happynuts.vn/san-pham/granola-premium-_-vi-nho/">Premium Granola – Vị Nho HAPPY NUTS 500gr</a></h4>
                                        <p class="price"><strong><span class="woocommerce-Price-amount amount"><bdi>229,000&nbsp;<span class="woocommerce-Price-currencySymbol"> vnđ</span></bdi></span></strong></p>
                                    </header>
                                    <div class="dscription">Trọng lượng: 500gr</div>
                                    <!-- <p>Khối lượng: 30gr</p> -->
                                </div>
                                <a href="#" value="215" class="single_add_to_cart_button" data-product_id="215" data-product_sku="" aria-label="Add “Premium Granola – Vị Nho HAPPY NUTS 500gr” to your cart">
                                    <div class="bag"></div>
                                </a>
                                <img class="img-best-saller" src="https://happynuts.vn/wp-content/themes/happynut/images/icon-best-seller.png">
                            </article>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 sp-col pb-22">
                            <article class="article-product product-box text-center h-100">
                                <figure>
                                    <a href="https://happynuts.vn/san-pham/granola-premium-_-vi-xoai/"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Granola_vi_xoai__0004_IMG_8808.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <header>
                                        <h4><a href="https://happynuts.vn/san-pham/granola-premium-_-vi-xoai/">Premium Granola – Vị Xoài HAPPY NUTS 500gr</a></h4>
                                        <p class="price"><strong><span class="woocommerce-Price-amount amount"><bdi>229,000&nbsp;<span class="woocommerce-Price-currencySymbol"> vnđ</span></bdi></span></strong></p>
                                    </header>
                                    <div class="dscription">Trọng lượng: 500gr</div>
                                    <!-- <p>Khối lượng: 30gr</p> -->
                                </div>
                                <a href="#" value="213" class="single_add_to_cart_button" data-product_id="213" data-product_sku="" aria-label="Add “Premium Granola – Vị Xoài HAPPY NUTS 500gr” to your cart">
                                    <div class="bag"></div>
                                </a>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
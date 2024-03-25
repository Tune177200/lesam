<?php
get_header();
$term = get_queried_object();


echo '<main class="main-wrap" style="padding-bottom: 286.188px; padding-top: 108.391px;">'; ?>



<?php
$args = array(
    'post_type' => 'product',
    's' => 'vi',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);
$q = new WP_Query($args);

echo '<div class="tempt-2">';
echo '<div class="pt-30">';
echo '<div class="container">';
echo '<div class="box-border gtype">';
if ($q->have_posts()) {

    // /**
    //  * Hook: woocommerce_before_shop_loop.
    //  *
    //  * @hooked woocommerce_output_all_notices - 10
    //  * @hooked woocommerce_result_count - 20
    //  * @hooked woocommerce_catalog_ordering - 30
    //  */
    // do_action('woocommerce_before_shop_loop');

    woocommerce_product_loop_start();


    while ($q->have_posts()) {
        $q->the_post();

        /**
         * Hook: woocommerce_shop_loop.
         */
        do_action('woocommerce_shop_loop');

        wc_get_template_part('content', 'product');
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
echo '</div>';
echo '</main>';
get_footer();

?>
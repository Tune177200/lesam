<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<main class="main-wrap" style="padding-top: 108.391px;">
    <div class="tempt-8">
        <div class="container">
            <div class="box-border">
                <div class="row">
                    <div class="col-lg-6 col-xl-7 product-image">
                        <?php
                        wc_get_template('single-product/product-image.php')
                        ?>
                    </div>
                    <div class="col-lg-6 col-xl-5 product-intro">
                        <form class="cart" action="<?php echo get_permalink(); ?>" method="post" enctype="multipart/form-data">

                            <div id="primary" class="content-area">
                                <main id="main" class="site-main" role="main">
                                    <?php woocommerce_breadcrumb() ?>
                                    <?php the_title('<h1>', '</h1>'); ?>
                                    <div class="price">
                                        <?php echo number_format($product->get_price(), wc_get_price_decimals(), wc_get_price_decimal_separator(), wc_get_price_thousand_separator()) . ' ' . get_woocommerce_currency_symbol(); ?>
                                    </div>
                                    <?php
                                    $ratingCount = $product->get_rating_count();
                                    $averageRating = $product->get_average_rating();
                                    if ($ratingCount > 0) { ?>
                                        <div class="fontsize-12 pt-10 pb-15">
                                            <span class="d-inline-block color1"><?php echo  $averageRating; ?></span>
                                            <span class="d-inline-block mlr-5">
                                                <i class="color1 fa-sharp fa-solid fa-star fa-fw"></i>
                                                <i class="color1 fa-sharp fa-solid fa-star fa-fw"></i>
                                                <i class="color1 fa-sharp fa-solid fa-star fa-fw"></i>
                                                <i class="color1 fa-sharp fa-solid fa-star fa-fw"></i>
                                                <i class="color1 fa-sharp fa-solid fa-star fa-fw"></i>
                                            </span>
                                            | <span class="d-inline-block mlr-5"><?php echo $ratingCount;  ?> <span class="color7">Đánh Giá</span></span>
                                        </div>
                                    <?php } ?>
                                    <p class="lineb-1 pb-15"></p>
                                    <?php
                                    if (get_the_excerpt()) {
                                        echo '<p>' . get_the_excerpt() . '</p>';
                                    }

                                    if ($product->is_type('variable')) {
                                        $priceVariable = $product->get_variation_prices(); ?>
                                        <div class="row row8 pb-10">
                                            <div class="item col-auto wi-100  line-h-30"><strong>Trọng lượng: </strong></div>
                                            <div class="item col list-choise">
                                                <?php
                                                $first_variation = true;
                                                foreach ($priceVariable['sale_price'] as $priceVarKey => $priceVarVal) {
                                                    $variation_attributes = wc_get_product_variation_attributes($priceVarKey);
                                                    if (isset($variation_attributes['attribute_trong-luong'])) {
                                                        $variation_name = $variation_attributes['attribute_trong-luong'];
                                                    } else {
                                                        $variation_name = '';
                                                    }
                                                    $active_class = ($first_variation) ? 'active' : '';
                                                    echo '<button class="btn-a text-center btn-variant-item ' . $active_class . '" data-price="' . formatPrice($global, $priceVarVal) . '" data-variant_id="' . $priceVarKey . '"> ' . $variation_name . '</button>';
                                                    $first_variation = false;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="row row8 align-items-center pb-15">
                                        <div class="item col-auto wi-100"><strong>Số lượng:</strong></div>
                                        <div class="item col-auto">
                                            <div class="group-amount wi-90 border-7">
                                                <button class="arrow arrow-minus">-</button>
                                                <div class="quantity">
                                                    <input type="number" id="quantity_65d9f59e10b86" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="SL" size="4" placeholder="" inputmode="numeric" autocomplete="off" wfd-id="id3">
                                                </div>
                                                <button class="arrow arrow-plus">+</button>
                                            </div>
                                        </div>
                                        <div class="item col color7 fontsize-12"> sản phẩm có sẵn</div>
                                    </div>
                                    <div class="row sp-col-2">
                                        <div class="col-12 col-sm-6 sp-col">
                                            <a class="btn-2 mb-20 single_add_to_cart_button" href="<?php echo get_permalink(); ?>" value="<?php echo get_the_ID() ?>" data-product_id="<?php echo get_the_ID() ?>" data-product_sku="" aria-label="Add “<?php echo get_the_title() ?>” to your cart">
                                                Thêm vào giỏ hàng <i class="icon-add-cart"></i>
                                            </a>
                                            <input type="hidden" name="add-to-cart" value="<?php echo get_the_ID() ?>" wfd-id="id4">
                                            <input type="hidden" name="product_id" value="<?php echo get_the_ID() ?>" wfd-id="id5">
                                            <input type="hidden" name="variation_id" class="variation_id" value="0" wfd-id="id6">
                                        </div>
                                        <div class="col-12 col-sm-6 sp-col">
                                            <a class="btn-1 mb-20" href="<?php echo get_permalink(); ?>" value="<?php echo get_the_ID() ?>" data-product_id="<?php echo get_the_ID() ?>" data-product_sku="" aria-label="Add “<?php echo get_the_title() ?>” to your cart">
                                                Mua ngay
                                            </a>
                                        </div>
                                    </div>
                                    <?php if (get_the_term_list($product->get_id(), 'product_tag')) { ?>
                                        <div class="row row8">
                                            <div class="item col-auto line-h-30"><strong>Tag:</strong></div>
                                            <div class="item col product-tag">
                                                <?php
                                                echo get_the_term_list($product->get_id(), 'product_tag');
                                                ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </main>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xl-7 product-details">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px">
                            <li class="nav-item" role="presentation">
                                <a class="active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mô Tả</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Hướng Dẫn</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Bình Luận</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="document">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="document">
                                    <?php
                                    if (get_field('huong_dan_su_dung')) {
                                        echo get_field('huong_dan_su_dung');
                                    } else {
                                        echo 'Đang cập nhật...';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <?php comments_template('/single-product/review.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 product-other">
                        <?php
                        $args = array(
                            'posts_per_page' => 4,
                            'columns'        => 2,
                            'orderby'        => 'rand',
                            'order'          => 'desc',
                        );
                        woocommerce_related_products($args);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
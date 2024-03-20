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
<div class="tempt-8">
    <div class="container">
        <div class="box-border">
            <div class="row">
                <div class="col-lg-6 col-xl-7 product-image">
                    <?php 
                    wc_get_template( 'single-product/product-image.php' )
                    ?>
                    <!-- <div class="slider-vertical" id="slider-vertical-0">
                        <div class="slider-for-wrap">
                            <div class="slider-for">
                                <div>
                                    <div class="item" style="width: 100%; display: inline-block;">
                                        <figure><img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/10/dailynuts_0000_HappyNuts_24.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="item" style="width: 100%; display: inline-block;">
                                        <figure><img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/10/dailynuts_0001_HappyNuts_25.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="item" style="width: 100%; display: inline-block;">
                                        <figure><img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/10/dailynuts_0002_HappyNuts_22.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="item" style="width: 100%; display: inline-block;">
                                        <figure><img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/10/dailynuts_0003_IMG_8588.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-nav-wrap overflow-hidden">
                            <div class="slider-nav">
                                <div>
                                    <div class="item" style="width: 100%; display: inline-block;">
                                        <figure><img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/10/dailynuts_0000_HappyNuts_24.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="item" style="width: 100%; display: inline-block;">
                                        <figure><img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/10/dailynuts_0001_HappyNuts_25.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="item" style="width: 100%; display: inline-block;">
                                        <figure><img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/10/dailynuts_0002_HappyNuts_22.jpg" alt=""></figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="item" style="width: 100%; display: inline-block;">
                                        <figure><img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/10/dailynuts_0003_IMG_8588.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="col-lg-6 col-xl-5 product-intro">
                    <form class="cart" action="https://happynuts.vn/san-pham/daily-nuts-combo-7-goi-7-vi/" method="post" enctype="multipart/form-data">

                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">
                                <?php
                                /**
                                 * woocommerce_before_main_content hook.
                                 *
                                 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                                 * @hooked woocommerce_breadcrumb - 20
                                 */
                                do_action('woocommerce_before_main_content');
                                ?>
                                <?php
                                /**
                                 * Hook: woocommerce_single_product_summary.
                                 *
                                 * @hooked woocommerce_template_single_title - 5
                                 * @hooked woocommerce_template_single_rating - 10
                                 * @hooked woocommerce_template_single_price - 10
                                 * @hooked woocommerce_template_single_excerpt - 20
                                 * @hooked woocommerce_template_single_add_to_cart - 30
                                 * @hooked woocommerce_template_single_meta - 40
                                 * @hooked woocommerce_template_single_sharing - 50
                                 * @hooked WC_Structured_Data::generate_product_data() - 60
                                 */
                                do_action('woocommerce_single_product_summary');
                                ?>
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
                                ?>
                                <div class="row row8 pb-10">
                                    <div class="item col-auto wi-100  line-h-30"><strong>Trọng lượng: </strong></div>
                                    <div class="item col list-choise">
                                        <button class="active btn-a text-center btn-variant-item" data-price="599,000" data-variant_id="520"> 840gr</button><button class="btn-a text-center btn-variant-item" data-price="159,000" data-variant_id="521"> 210gr</button>
                                    </div>
                                </div>

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
                                        <a class="btn-2 mb-20 single_add_to_cart_button" href="https://happynuts.vn/san-pham/daily-nuts-combo-7-goi-7-vi/" value="513" data-product_id="513" data-product_sku="" aria-label="Add “Set Daily Nuts HAPPY NUTS (Combo 7 gói 7 vị)” to your cart">
                                            Thêm vào giỏ hàng <i class="icon-add-cart"></i>
                                        </a>
                                        <input type="hidden" name="add-to-cart" value="513" wfd-id="id4">
                                        <input type="hidden" name="product_id" value="513" wfd-id="id5">
                                        <input type="hidden" name="variation_id" class="variation_id" value="0" wfd-id="id6">
                                    </div>
                                    <div class="col-12 col-sm-6 sp-col">
                                        <a class="btn-1 mb-20" href="https://happynuts.vn/san-pham/daily-nuts-combo-7-goi-7-vi/" value="513" data-product_id="513" data-product_sku="" aria-label="Add “Set Daily Nuts HAPPY NUTS (Combo 7 gói 7 vị)” to your cart">
                                            Mua ngay
                                        </a>
                                    </div>
                                </div>
                                <div class="row row8">
                                    <div class="item col-auto line-h-30"><strong>Tag:</strong></div>
                                    <div class="item col product-tag">
                                        <a href="https://happynuts.vn/tu-khoa/songkhoetuoitre/" rel="tag">#songkhoetuoitre</a><a href="https://happynuts.vn/tu-khoa/anchay/" rel="tag">anchay</a><a href="https://happynuts.vn/tu-khoa/ankieng/" rel="tag">ankieng</a><a href="https://happynuts.vn/tu-khoa/anvat/" rel="tag">anvat</a><a href="https://happynuts.vn/tu-khoa/dailynuts/" rel="tag">dailynuts</a><a href="https://happynuts.vn/tu-khoa/happynuts/" rel="tag">happynuts</a><a href="https://happynuts.vn/tu-khoa/hatanhangngay/" rel="tag">hatanhangngay</a><a href="https://happynuts.vn/tu-khoa/hatdinhduong/" rel="tag">hatdinhduong</a><a href="https://happynuts.vn/tu-khoa/healthy/" rel="tag">healthy</a><a href="https://happynuts.vn/tu-khoa/moingay30ghat/" rel="tag">moingay30ghat</a>
                                    </div>
                                </div>

                            </main>
                        </div>
                    </form>
                </div>
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

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

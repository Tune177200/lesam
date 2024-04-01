<?php

/**
 * Template Name: Home
 */
get_header();
?>
<main>
    <?php
    $banner = get_field('banner');
    if (!empty($banner['list_banner'])) { ?>
        <div class="slick-0-desktop">
            <?php foreach ($banner['list_banner'] as $itemBanner) { ?>
                <div><a href="<?php echo !empty($itemBanner['link']['url']) ? $itemBanner['link']['url'] : '#' ?>"><img src="<?php echo !empty($itemBanner['banner']['url']) ? $itemBanner['banner']['url'] : '' ?>"></a></div>
            <?php } ?>

        </div>
    <?php }
    $intro_1 = get_field('intro_1'); ?>
    <div class="intro-home-1">
        <div class="container main-inner">
            <div class="intro text-center">
                <h3 class="yentu"><?php echo $intro_1['title'] ?></h3>
                <h2><?php echo $intro_1['sub_title'] ?></h2>
                <p><?php echo $intro_1['description'] ?></p>
            </div>
            <?php
            if (!empty($intro_1['list_category_product'])) { ?>
                <ul class="list-term">
                    <?php foreach ($intro_1['list_category_product'] as $itemCat) { ?>
                        <li class="list__term--item text-center">
                            <a href="<?php echo !empty($itemCat['link']['url']) ? $itemCat['link']['url'] : '#' ?>">
                                <img src="<?php echo !empty($itemCat['icon']['url']) ? $itemCat['icon']['url'] : '' ?>" alt="">
                                <div class="list__term--text">
                                    <?php echo !empty($itemCat['title']) ? $itemCat['title'] : '' ?>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            <?php }
            $information = get_field('information');
            if (!empty($information['list_information'])) { ?>
                <div class="grid-1">
                    <div class="row sp-col-30">
                        <?php foreach ($information['list_information'] as $itemInfor) { ?>
                            <div class="col-md-4 sp-col">
                                <figure>
                                    <img src="<?php echo !empty($itemInfor['icon']['url']) ? $itemInfor['icon']['url'] : '' ?>" alt="<?php echo $itemInfor['title'] ?>">
                                </figure>
                                <h3><?php echo $itemInfor['title'] ?></h3>
                                <p><?php echo $itemInfor['description'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php $intro_2 = get_field('intro_2'); ?>
    <div class="intro-home-3">
        <div class="container">
            <div class="intro intro-heading text-center">
                <h2><?php echo $intro_2['title'] ?></h2>
                <h3><?php echo $intro_2['sub_title'] ?></h3>
                <h4><?php echo $intro_2['description'] ?></h4>
                <br>
            </div>
            <?php if (!empty($intro_2['product'])) { ?>
                <div class="product-slick">
                    <div class="slick-3">
                        <?php
                        foreach ($intro_2['product'] as $itemProduct) {
                            $idProduct = $itemProduct->ID;
                            $product = wc_get_product($idProduct);
                        ?>
                            <div>
                                <article class="article-product text-center">
                                    <figure><a href="<?php echo get_permalink($idProduct); ?>" tabindex="-1"><img src="<?php echo get_the_post_thumbnail_url($idProduct) ?>" alt="<?php echo get_the_title($idProduct) ?>"></a></figure>
                                    <div class="product-content">
                                        <header>
                                            <h4><a href="<?php echo get_permalink($idProduct); ?>" tabindex="-1"><?php echo get_the_title($idProduct) ?></a></h4>
                                            <p class="price"><strong><?php echo formatPrice($product, $product->get_price()) ?></strong></p>
                                        </header>
                                        <?php
                                        if (get_field('trong_luong', $idProduct)) {
                                            echo '<div class="dscription">Trọng lượng: ' . get_field('trong_luong', $idProduct) . '</div>';
                                        }

                                        if (get_field('khoi_luong', $idProduct)) {
                                            echo '<p>Khối lượng: ' . get_field('khoi_luong', $idProduct) . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <a href="#" value="<?php echo $idProduct; ?>" class="single_add_to_cart_button" data-product_id="<?php echo $idProduct; ?>" data-product_sku="" aria-label="Add “<?php echo get_the_title($idProduct) ?>” to your cart" tabindex="-1">
                                        <div class="bag"></div>
                                    </a>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php $intro_3 = get_field('intro_3'); ?>
    <div class="intro-home-3">
        <div class="container">
            <div class="intro intro-heading text-center">
                <h2><?php echo $intro_3['title'] ?></h2>
                <h3><?php echo $intro_3['sub_title'] ?></h3>
                <h4><?php echo $intro_3['description'] ?></h4>
                <br>
            </div>
            <?php if (!empty($intro_3['product'])) { ?>
                <div class="box-border">
                    <div class="slick-4">
                        <?php foreach ($intro_3['product'] as $itemProduct) {
                            $idProduct = $itemProduct->ID;
                            $product = wc_get_product($idProduct); ?>
                            <div>
                                <div class="item h-100 pb-22" style="width: 100%; display: inline-block;">
                                    <article class="article-product product-box text-center h-100">
                                        <figure><a href="<?php echo get_permalink($idProduct); ?>" tabindex="-1"><img src="<?php echo get_the_post_thumbnail_url($idProduct) ?>" alt="<?php echo get_the_title($idProduct) ?>"></a></figure>
                                        <div class="product-content">
                                            <header>
                                                <h4><a href="<?php echo get_permalink($idProduct); ?>" tabindex="-1"><?php echo get_the_title($idProduct) ?></a></h4>
                                                <p class="price"><strong><?php echo formatPrice($product, $product->get_price()) ?></strong></p>
                                            </header>
                                            <?php
                                            if (get_field('trong_luong', $idProduct)) {
                                                echo '<div class="dscription">Trọng lượng: ' . get_field('trong_luong', $idProduct) . '</div>';
                                            }

                                            if (get_field('khoi_luong', $idProduct)) {
                                                echo '<p>Khối lượng: ' . get_field('khoi_luong', $idProduct) . '</p>';
                                            }
                                            ?>
                                        </div>
                                        <a href="#" value="<?php echo $idProduct; ?>" class="single_add_to_cart_button" data-product_id="<?php echo $idProduct; ?>" data-product_sku="" aria-label="Add “<?php echo get_the_title($idProduct) ?>” to your cart" tabindex="-1">
                                            <div class="bag"></div>
                                        </a>
                                    </article>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php $cam_nang = get_field('cam_nang'); ?>
    <div class="section__camnang intro-home-3">
        <div class="container">
            <div class="section__camnang--content text-center mb-5">
                <h3 class="yentu"><?php echo $cam_nang['title'] ?></h3>
            </div>
            <?php if (!empty($cam_nang['post_cam_nang'])) { ?>
                <div class="row">
                    <?php foreach ($cam_nang['post_cam_nang'] as $itemCamNang) { ?>
                        <div class="col-lg-4 section__camnang--block mb-4 col-sm-12 col-md-6">
                            <div class="col-inner">
                                <a href="<?php echo get_permalink($itemCamNang); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($itemCamNang); ?>">
                                    <div class="section__camnang--title">
                                        <?php echo get_the_title($itemCamNang); ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php $cong_tac_vien = get_field('cong_tac_vien');
    if (!empty($cong_tac_vien['list_ctv'])) { ?>
        <div class="intro-home-7 section__ctv">
            <div class="container ">
                <div class="slick-1 hfull-slick">
                    <?php foreach ($cong_tac_vien['list_ctv'] as $itemCTV) { ?>
                        <div>
                            <div class="item h-100" style="width: 100%; display: inline-block;">
                                <article class="article-colla h-100">
                                    <div class="row">
                                        <div class="item col-12 col-lg-5 col-xl-4">
                                            <figure>
                                                <img class="w-100" src="<?php echo !empty($itemCTV['avatar']['url']) ? $itemCTV['avatar']['url'] : '' ?>" alt="<?php echo $itemCTV['name'] ?>">
                                            </figure>
                                        </div>
                                        <div class="item col-12 col-lg-7 col-xl-8 text-center">
                                            <div class="article-content d-flex flex-column h-100">
                                                <header class="flex-auto">
                                                    <h4 class="title-1"><?php echo $itemCTV['position'] ?></h4>
                                                    <h5 class="title-3"><?php echo $itemCTV['slogan'] ?></h5>
                                                </header>
                                                <div class="description flex-const h-100"><?php echo $itemCTV['description'] ?></div>
                                                <div class="wrap-more-see flex-auto">
                                                    <div class="row align-items-end">
                                                        <div class="col-md">
                                                            <div class="colla-name"><?php echo $itemCTV['name'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php }
    $doi_tac = get_field('doi_tac');
    ?>
    <div class="intro-home-8" style="padding-bottom: 0; padding-top: 70px">
        <div class="container">
            <div class="intro text-center pb-30">
                <h2 class="title-3"><?php echo $doi_tac['title'] ?></h2>
            </div>
            <?php
            if (!empty($doi_tac['list_doi_tac'])) { ?>
                <div class="slick-6 hfull-slick text-center list-parents">
                    <?php foreach ($doi_tac['list_doi_tac'] as $itemBao) { ?>
                        <div>
                            <div>
                                <div class="item" style="width: 100%; display: inline-block;">
                                    <figure><a href="<?php echo !empty($itemBao['link']['url']) ? $itemBao['link']['url'] : '#' ?>" tabindex="-1"><img src="<?php echo !empty($itemBao['logo']['url']) ? $itemBao['logo']['url'] : '' ?>"></a></figure>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php $blog = get_field('blog'); ?>
    <div class="section__news intro-home-3">
        <div class="container">

            <div class="section__news--content text-center mb-5">
                <h3><?php echo $blog['title'] ?></h3>
                <p><?php echo $blog['description'] ?></p>
            </div>

            <?php
            if (!empty($blog['list_post'])) {
                echo '<div class="slick-blog">';
                foreach ($blog['list_post'] as $itemPost) {
                    $idPost = $itemPost->ID ?>
                    <div>
                        <article class="article-blog text-center">
                            <a href="<?php echo get_permalink($idPost); ?>">
                                <div class="entry-head">
                                    <img src="<?php echo get_the_post_thumbnail_url($idPost); ?>" class="entry-thumbnail">
                                    <div class="post-date">
                                        <div class="post-date-day"><?php echo get_the_date('d', $idPost); ?></div>
                                        <div class="post-date-month"><?php echo get_the_date('M', $idPost); ?></div>
                                    </div>
                                </div>
                                <h3 class="entry-title"><?php echo get_the_title($idPost); ?></h3>
                                <p class="entry-content">
                                    <?php echo get_the_excerpt($idPost); ?>
                                </p>
                            </a>
                        </article>
                    </div>
            <?php }
                echo '</div>';
            }
            ?>
        </div>
    </div>
</main>
<?php
get_footer();

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
    $intro_1 = get_field('intro_1');
    ?>
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
    <?php
    $intro_2 = get_field('intro_2');
    // echo '<div class="tutest">';
    // echo '<pre>';
    // print_r($intro_2);
    // echo '</pre>';
    // echo '</div>';
    ?>
    <div class="intro-home-3">
        <div class="container">

            <div class="intro intro-heading text-center">
                <h2><?php echo $intro_2['title'] ?></h2>
                <h3><?php echo $intro_2['sub_title'] ?></h3>
                <h4><?php echo $intro_2['description'] ?></h4>
                <br>
            </div>
            <?php
            if (!empty($intro_2['product'])) { ?>
                <div class="product-slick">
                    <div class="slick-3">
                        <?php
                        foreach ($intro_2['product'] as $itemProduct) {
                            $idProduct = $itemProduct->ID;
                        ?>
                            <div>
                                <article class="article-product text-center">
                                    <figure><a href="<?php echo get_permalink($idProduct); ?>" tabindex="-1"><img src="<?php echo get_the_post_thumbnail_url($idProduct) ?>" alt="<?php echo get_the_title($idProduct) ?>"></a></figure>
                                    <div class="product-content">
                                        <header>
                                            <h4><a href="<?php echo get_permalink($idProduct); ?>" tabindex="-1"><?php echo get_the_title($idProduct) ?></a></h4>
                                            <p class="price"><strong>229,000 vnđ</strong></p>
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
                        <?php }
                        ?>

                        <!-- 
                        <div>
                            <article class="article-product text-center">
                                <figure><a href="https://happynuts.vn/san-pham/granola-premium-_-vi-nho/" tabindex="-1"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Granola_vi_nho__0004_IMG_8807.jpg" alt=""></a></figure>
                                <div class="product-content">
                                    <header>
                                        <h4><a href="https://happynuts.vn/san-pham/granola-premium-_-vi-nho/" tabindex="-1">Premium Granola – Vị Nho HAPPY NUTS 500gr</a></h4>
                                        <p class="price"><strong>229,000 vnđ</strong></p>
                                    </header>
                                    <div class="dscription">Trọng lượng: 500gr</div>
                                    <p>Khối lượng: gr</p>
                                </div>
                                <a href="#" value="215" class="single_add_to_cart_button" data-product_id="215" data-product_sku="" aria-label="Add “Premium Granola – Vị Nho HAPPY NUTS 500gr” to your cart" tabindex="-1">
                                    <div class="bag"></div>
                                </a>
                                <img class="img-best-saller" src="https://happynuts.vn/wp-content/themes/happynut/images/icon-best-seller.png">
                            </article>
                        </div>

                        <div>
                            <article class="article-product text-center">
                                <figure><a href="https://happynuts.vn/san-pham/granola-premium-_-vi-xoai/" tabindex="-1"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Granola_vi_xoai__0004_IMG_8808.jpg" alt=""></a></figure>
                                <div class="product-content">
                                    <header>
                                        <h4><a href="https://happynuts.vn/san-pham/granola-premium-_-vi-xoai/" tabindex="-1">Premium Granola – Vị Xoài HAPPY NUTS 500gr</a></h4>
                                        <p class="price"><strong>229,000 vnđ</strong></p>
                                    </header>
                                    <div class="dscription">Trọng lượng: 500gr</div>
                                    <p>Khối lượng: gr</p>
                                </div>
                                <a href="#" value="213" class="single_add_to_cart_button" data-product_id="213" data-product_sku="" aria-label="Add “Premium Granola – Vị Xoài HAPPY NUTS 500gr” to your cart" tabindex="-1">
                                    <div class="bag"></div>
                                </a>
                            </article>
                        </div> -->
                    </div>


                </div>
            <?php }
            ?>

        </div>
    </div>

    <div class="intro-home-3">
        <div class="container">

            <div class="intro intro-heading text-center">
                <h2>365 Ngày</h2>
                <h3>Ăn uống lành mạnh</h3>
                <h4>HẠT DINH DƯỠNG</h4>
                <br>

            </div>
            <div class="slick-4">
                <div>
                    <div class="item h-100 pb-22" style="width: 100%; display: inline-block;">
                        <article class="article-product product-box text-center h-100">
                            <figure><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Nho_kho_3_mau__0004_IMG_8787.jpg" alt=""></a></figure>
                            <div class="product-content">
                                <header>
                                    <h4><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1">Nho khô 3 màu HAPPY NUTS 500gr</a></h4>
                                    <p class="price"><strong>175,000 vnđ</strong></p>
                                </header>
                                <div class="dscription">500gr</div>
                                <p>Khối lượng: gr</p>
                            </div>
                            <a href="#" value="374" class="single_add_to_cart_button" data-product_id="374" data-product_sku="" aria-label="Add “Nho khô 3 màu HAPPY NUTS 500gr” to your cart" tabindex="-1">
                                <div class="bag"></div>
                            </a>
                        </article>
                    </div>
                </div>

                <div>
                    <div class="item h-100 pb-22" style="width: 100%; display: inline-block;">
                        <article class="article-product product-box text-center h-100">
                            <figure><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Nho_kho_3_mau__0004_IMG_8787.jpg" alt=""></a></figure>
                            <div class="product-content">
                                <header>
                                    <h4><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1">Nho khô 3 màu HAPPY NUTS 500gr</a></h4>
                                    <p class="price"><strong>175,000 vnđ</strong></p>
                                </header>
                                <div class="dscription">500gr</div>
                                <p>Khối lượng: gr</p>
                            </div>
                            <a href="#" value="374" class="single_add_to_cart_button" data-product_id="374" data-product_sku="" aria-label="Add “Nho khô 3 màu HAPPY NUTS 500gr” to your cart" tabindex="-1">
                                <div class="bag"></div>
                            </a>
                        </article>
                    </div>
                </div>

                <div>
                    <div class="item h-100 pb-22" style="width: 100%; display: inline-block;">
                        <article class="article-product product-box text-center h-100">
                            <figure><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Nho_kho_3_mau__0004_IMG_8787.jpg" alt=""></a></figure>
                            <div class="product-content">
                                <header>
                                    <h4><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1">Nho khô 3 màu HAPPY NUTS 500gr</a></h4>
                                    <p class="price"><strong>175,000 vnđ</strong></p>
                                </header>
                                <div class="dscription">500gr</div>
                                <p>Khối lượng: gr</p>
                            </div>
                            <a href="#" value="374" class="single_add_to_cart_button" data-product_id="374" data-product_sku="" aria-label="Add “Nho khô 3 màu HAPPY NUTS 500gr” to your cart" tabindex="-1">
                                <div class="bag"></div>
                            </a>
                        </article>
                    </div>
                </div>

                <div>
                    <div class="item h-100 pb-22" style="width: 100%; display: inline-block;">
                        <article class="article-product product-box text-center h-100">
                            <figure><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Nho_kho_3_mau__0004_IMG_8787.jpg" alt=""></a></figure>
                            <div class="product-content">
                                <header>
                                    <h4><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1">Nho khô 3 màu HAPPY NUTS 500gr</a></h4>
                                    <p class="price"><strong>175,000 vnđ</strong></p>
                                </header>
                                <div class="dscription">500gr</div>
                                <p>Khối lượng: gr</p>
                            </div>
                            <a href="#" value="374" class="single_add_to_cart_button" data-product_id="374" data-product_sku="" aria-label="Add “Nho khô 3 màu HAPPY NUTS 500gr” to your cart" tabindex="-1">
                                <div class="bag"></div>
                            </a>
                        </article>
                    </div>
                </div>

                <div>
                    <div class="item h-100 pb-22" style="width: 100%; display: inline-block;">
                        <article class="article-product product-box text-center h-100">
                            <figure><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Nho_kho_3_mau__0004_IMG_8787.jpg" alt=""></a></figure>
                            <div class="product-content">
                                <header>
                                    <h4><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1">Nho khô 3 màu HAPPY NUTS 500gr</a></h4>
                                    <p class="price"><strong>175,000 vnđ</strong></p>
                                </header>
                                <div class="dscription">500gr</div>
                                <p>Khối lượng: gr</p>
                            </div>
                            <a href="#" value="374" class="single_add_to_cart_button" data-product_id="374" data-product_sku="" aria-label="Add “Nho khô 3 màu HAPPY NUTS 500gr” to your cart" tabindex="-1">
                                <div class="bag"></div>
                            </a>
                        </article>
                    </div>
                </div>

                <div>
                    <div class="item h-100 pb-22" style="width: 100%; display: inline-block;">
                        <article class="article-product product-box text-center h-100">
                            <figure><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1"><img src="https://happynuts.vn/wp-content/uploads/2022/09/Nho_kho_3_mau__0004_IMG_8787.jpg" alt=""></a></figure>
                            <div class="product-content">
                                <header>
                                    <h4><a href="https://happynuts.vn/san-pham/nho-kho-3-mau-happy-nuts-say/" tabindex="-1">Nho khô 3 màu HAPPY NUTS 500gr</a></h4>
                                    <p class="price"><strong>175,000 vnđ</strong></p>
                                </header>
                                <div class="dscription">500gr</div>
                                <p>Khối lượng: gr</p>
                            </div>
                            <a href="#" value="374" class="single_add_to_cart_button" data-product_id="374" data-product_sku="" aria-label="Add “Nho khô 3 màu HAPPY NUTS 500gr” to your cart" tabindex="-1">
                                <div class="bag"></div>
                            </a>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section__camnang intro-home-3">
        <div class="container">

            <div class="section__camnang--content text-center mb-5">
                <h3 class="yentu">Cẩm Nang Dinh Dưỡng</h3>
            </div>

            <div class="row">
                <div class="col-lg-4 section__camnang--block mb-4 col-sm-12 col-md-6">
                    <div class="col-inner">
                        <a href="">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/om-day-1024x576-1.png">
                            <div class="section__camnang--title">
                                Yến cho người bệnh ốm dậy
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 section__camnang--block mb-4 col-sm-12 col-md-6">
                    <div class="col-inner">
                        <a href="">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/om-day-1024x576-1.png">
                            <div class="section__camnang--title">
                                Yến cho người bệnh ốm dậy
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 section__camnang--block mb-4 col-sm-12 col-md-6">
                    <div class="col-inner">
                        <a href="">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/om-day-1024x576-1.png">
                            <div class="section__camnang--title">
                                Yến cho người bệnh ốm dậy
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 section__camnang--block mb-4 col-sm-12 col-md-6">
                    <div class="col-inner">
                        <a href="">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/om-day-1024x576-1.png">
                            <div class="section__camnang--title">
                                Yến cho người bệnh ốm dậy
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 section__camnang--block mb-4 col-sm-12 col-md-6">
                    <div class="col-inner">
                        <a href="">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/om-day-1024x576-1.png">
                            <div class="section__camnang--title">
                                Yến cho người bệnh ốm dậy
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="intro-home-7 section__ctv">

        <div class="container ">

            <div class="slick-1 hfull-slick">

                <div>
                    <div class="item h-100" style="width: 100%; display: inline-block;">
                        <article class="article-colla h-100">
                            <div class="row">
                                <div class="item col-12 col-lg-5 col-xl-4">
                                    <figure>
                                        <img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/09/CTV2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="item col-12 col-lg-7 col-xl-8 text-center">
                                    <div class="article-content d-flex flex-column h-100">
                                        <header class="flex-auto">
                                            <h4 class="title-1">Cộng tác viên</h4>
                                            <h5 class="title-3">Khuất phục trước thất bại, bạn sẽ mãi là kẻ thất bại</h5>
                                        </header>
                                        <div class="description flex-const h-100">Câu chuyện của Trúc Anh là tấm gương cho sự kiên cường, bại không nản , và sẵn sàng nắm bắt lấy mọi cơ hội để bắt đầu lại cho hành trình khởi nghiệp của mình.&nbsp;</div>
                                        <div class="wrap-more-see flex-auto">
                                            <div class="row align-items-end">
                                                <div class="col-md">
                                                    <div class="colla-name">Trúc Anh</div>
                                                </div>
                                                <div class="col-md-auto text-end"><a href="https://happynuts.vn/collaborator/happynut-da-thay-doi-cuoc-song-cua-toi/" tabindex="-1">Xem thêm &gt;</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div>
                    <div class="item h-100" style="width: 100%; display: inline-block;">
                        <article class="article-colla h-100">
                            <div class="row">
                                <div class="item col-12 col-lg-5 col-xl-4">
                                    <figure>
                                        <img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/09/CTV2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="item col-12 col-lg-7 col-xl-8 text-center">
                                    <div class="article-content d-flex flex-column h-100">
                                        <header class="flex-auto">
                                            <h4 class="title-1">Cộng tác viên</h4>
                                            <h5 class="title-3">Khuất phục trước thất bại, bạn sẽ mãi là kẻ thất bại</h5>
                                        </header>
                                        <div class="description flex-const h-100">Câu chuyện của Trúc Anh là tấm gương cho sự kiên cường, bại không nản , và sẵn sàng nắm bắt lấy mọi cơ hội để bắt đầu lại cho hành trình khởi nghiệp của mình.&nbsp;</div>
                                        <div class="wrap-more-see flex-auto">
                                            <div class="row align-items-end">
                                                <div class="col-md">
                                                    <div class="colla-name">Trúc Anh</div>
                                                </div>
                                                <div class="col-md-auto text-end"><a href="https://happynuts.vn/collaborator/happynut-da-thay-doi-cuoc-song-cua-toi/" tabindex="-1">Xem thêm &gt;</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div>
                    <div class="item h-100" style="width: 100%; display: inline-block;">
                        <article class="article-colla h-100">
                            <div class="row">
                                <div class="item col-12 col-lg-5 col-xl-4">
                                    <figure>
                                        <img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/09/CTV2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="item col-12 col-lg-7 col-xl-8 text-center">
                                    <div class="article-content d-flex flex-column h-100">
                                        <header class="flex-auto">
                                            <h4 class="title-1">Cộng tác viên</h4>
                                            <h5 class="title-3">Khuất phục trước thất bại, bạn sẽ mãi là kẻ thất bại</h5>
                                        </header>
                                        <div class="description flex-const h-100">Câu chuyện của Trúc Anh là tấm gương cho sự kiên cường, bại không nản , và sẵn sàng nắm bắt lấy mọi cơ hội để bắt đầu lại cho hành trình khởi nghiệp của mình.&nbsp;</div>
                                        <div class="wrap-more-see flex-auto">
                                            <div class="row align-items-end">
                                                <div class="col-md">
                                                    <div class="colla-name">Trúc Anh</div>
                                                </div>
                                                <div class="col-md-auto text-end"><a href="https://happynuts.vn/collaborator/happynut-da-thay-doi-cuoc-song-cua-toi/" tabindex="-1">Xem thêm &gt;</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div>
                    <div class="item h-100" style="width: 100%; display: inline-block;">
                        <article class="article-colla h-100">
                            <div class="row">
                                <div class="item col-12 col-lg-5 col-xl-4">
                                    <figure>
                                        <img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/09/CTV2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="item col-12 col-lg-7 col-xl-8 text-center">
                                    <div class="article-content d-flex flex-column h-100">
                                        <header class="flex-auto">
                                            <h4 class="title-1">Cộng tác viên</h4>
                                            <h5 class="title-3">Khuất phục trước thất bại, bạn sẽ mãi là kẻ thất bại</h5>
                                        </header>
                                        <div class="description flex-const h-100">Câu chuyện của Trúc Anh là tấm gương cho sự kiên cường, bại không nản , và sẵn sàng nắm bắt lấy mọi cơ hội để bắt đầu lại cho hành trình khởi nghiệp của mình.&nbsp;</div>
                                        <div class="wrap-more-see flex-auto">
                                            <div class="row align-items-end">
                                                <div class="col-md">
                                                    <div class="colla-name">Trúc Anh</div>
                                                </div>
                                                <div class="col-md-auto text-end"><a href="https://happynuts.vn/collaborator/happynut-da-thay-doi-cuoc-song-cua-toi/" tabindex="-1">Xem thêm &gt;</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div>
                    <div class="item h-100" style="width: 100%; display: inline-block;">
                        <article class="article-colla h-100">
                            <div class="row">
                                <div class="item col-12 col-lg-5 col-xl-4">
                                    <figure>
                                        <img class="w-100" src="https://happynuts.vn/wp-content/uploads/2022/09/CTV2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="item col-12 col-lg-7 col-xl-8 text-center">
                                    <div class="article-content d-flex flex-column h-100">
                                        <header class="flex-auto">
                                            <h4 class="title-1">Cộng tác viên</h4>
                                            <h5 class="title-3">Khuất phục trước thất bại, bạn sẽ mãi là kẻ thất bại</h5>
                                        </header>
                                        <div class="description flex-const h-100">Câu chuyện của Trúc Anh là tấm gương cho sự kiên cường, bại không nản , và sẵn sàng nắm bắt lấy mọi cơ hội để bắt đầu lại cho hành trình khởi nghiệp của mình.&nbsp;</div>
                                        <div class="wrap-more-see flex-auto">
                                            <div class="row align-items-end">
                                                <div class="col-md">
                                                    <div class="colla-name">Trúc Anh</div>
                                                </div>
                                                <div class="col-md-auto text-end"><a href="https://happynuts.vn/collaborator/happynut-da-thay-doi-cuoc-song-cua-toi/" tabindex="-1">Xem thêm &gt;</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

            </div>

        </div>
    </div>



</main>

<?php
get_footer();

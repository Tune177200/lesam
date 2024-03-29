<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php $header = get_field('header', 'option'); ?>
    <header class="header-container">
        <div class="container">
            <div class="inner">
                <div class="logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php echo $header['logo']['url']; ?>" alt="<?php echo $header['logo']['title']; ?>">
                    </a>
                </div>
                <div class="headinfo">
                    <a class="icoinfo icohot" href="<?php echo $header['link_hotline']; ?>"><i class="fas fa-record-vinyl"></i><strong><?php echo $header['hotline']; ?></strong></a>
                    <a class="icoinfo" href="<?php echo $header['link_email']; ?>"><i class="far fa-envelope"></i> <?php echo $header['email']; ?></a>
                    <a class="btn-control-notext" href="#qsearch"><i class="fas fa-search"></i></a>
                    <div id="qsearch" class="qsearch">
                        <?php echo do_shortcode('[aws_search_form]') ?>
                    </div>
                    <a class="headcart" href="<?php echo wc_get_cart_url() ?>">
                        <span class="headincart">
                            <i class="fas fa-cart-plus"></i>
                            <span class="number"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                        </span>
                    </a>
                </div>
                <a href="#menu" class="control-page btn-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>

        <div class="menu-wrap">
            <?php echo lesam_menu('main-menu', 'menu', 'nav'); ?>
        </div>

    </header>
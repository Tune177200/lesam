<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-container">
        <div class="container">
            <div class="inner">
                <div class="logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="https://happynuts.vn/wp-content/themes/happynut/images/happynut-logo.png" alt="Happynut">
                    </a>
                </div>
                <div class="headinfo">
                    <a class="icoinfo icohot" href="tel:0985023463"><i class="fas fa-record-vinyl"></i><strong>0985 023 463</strong></a>
                    <a class="icoinfo" href="mailto:info@happynuts.vn"><i class="far fa-envelope"></i> info@happynuts.vn</a>
                    <a class="btn-control-notext" href="#qsearch"><i class="fas fa-search"></i></a>
                    <div id="qsearch" class="qsearch">
                        <form class="aws-search-form aws-show-clear" action="https://happynuts.vn/" method="get" role="search">
                            <div class="aws-wrapper">
                                <input type="search" name="s" value="" placeholder="Search">
                            </div>
                        </form>
                    </div>
                    <a class="headcart" href="https://happynuts.vn/gio-hang">
                        <span class="headincart">
                            <i class="fas fa-cart-plus"></i>
                            <span class="number">0</span>
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
        <?php echo lesam_menu('main-menu', 'menu', 'nav') ; ?>
        </div>
        
    </header>
    <?php
    ?>
<?php $footer = get_field('footer', 'option'); ?>

<footer class="footer-container">
    <div class="container">
        <div class="row break-324">
            <div class="col-xl-3 col-sm-6 sp-col fcol-1">
                <div class="intro">
                    <h4><?php echo $footer['title']; ?></h4>
                    <address><?php echo $footer['description']; ?></address>
                    <a target="_blank" href="<?php echo $footer['link_map']; ?>">
                        <?php echo $footer['map']; ?>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-6 sp-col fcol-2">
                <h4>Sản phẩm</h4>
                <?php echo lesam_menu('footer-menu', 'flist', ''); ?>
            </div>
            <div class="col-xl-3 col-sm-6 col-6 sp-col fcol-3">
                <h4>Trợ giúp</h4>
                <?php echo lesam_menu('footer-menu-2', 'flist', ''); ?>
            </div>
            <div class="col-xl-3 col-sm-6 sp-col fcol-4">
                <h4>Liên hệ</h4>
                <?php
                if (!empty($footer['list_contact'])) {
                    echo '<ul class="flist">';
                    foreach ($footer['list_contact'] as $itemContact) {
                        echo '<li>' . $itemContact['item'] . '</li>';
                    }
                    echo '</ul>';
                }

                if (!empty($footer['list_ecommerce'])) {
                    echo '<div class="row social">';
                    foreach ($footer['list_ecommerce'] as $itemEcommerce) { ?>
                        <div class="col-6 sp-col">
                            <a href="<?php echo $itemEcommerce['link'] ?>" target="_blank"><img src="<?php echo $itemEcommerce['icon']['url'] ?>" alt="<?php echo $itemEcommerce['icon']['title'] ?>"></a>
                        </div>
                <?php }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</footer>
<a href="#toppage" class="gotop" style="display: none;"><i class="fa-solid fa-chevron-up"></i></a>
<?php $button_contact = get_field('button_contact', 'option'); ?>
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a href="<?php echo $button_contact['tel'] ?>" class="pps-btn-img">
                <img data-lazyloaded="1" src="<?php echo !empty($button_contact['icon_tel']['url']) ? $button_contact['icon_tel']['url'] : get_stylesheet_directory_uri() . '/assets/images/icon/icon-1.png' ?>" width="50" class="litespeed-loaded" data-was-processed="true">
            </a>
        </div>
    </div>
    <div class="hotline-bar">
        <a href="<?php echo $button_contact['tel'] ?>">
            <span class="text-hotline"><?php echo $button_contact['title_tel'] ?></span>
        </a>
    </div>
</div>
<div class="zalo-container left">
    <a id="zalo-btn" href="<?php echo $button_contact['zalo'] ?>" target="_blank" rel="noopener noreferrer nofollow">
        <div class="animated_zalo infinite zoomIn_zalo cmoz-alo-circle"></div>
        <div class="animated_zalo infinite pulse_zalo cmoz-alo-circle-fill"></div>
        <span>
            <img src="<?php echo !empty($button_contact['icon_zalo']['url']) ? $button_contact['icon_zalo']['url'] : get_stylesheet_directory_uri() . '/assets/images/icon/zalo-2.png' ?>" class="litespeed-loaded" data-was-processed="true">
        </span>
    </a>
</div>
<div class="facebook-container left">
    <a id="zalo-btn" href="<?php echo $button_contact['facebook'] ?>" target="_blank" rel="noopener noreferrer nofollow">
        <div class="animated_zalo infinite zoomIn_zalo cmoz-alo-circle"></div>
        <div class="animated_zalo infinite pulse_zalo cmoz-alo-circle-fill"></div>
        <span>
            <img src="<?php echo !empty($button_contact['icon_facebook']['url']) ? $button_contact['icon_facebook']['url'] : get_stylesheet_directory_uri() . '/assets/images/icon/facebook.png' ?>" class="litespeed-loaded" data-was-processed="true">
        </span>
    </a>
</div>

<?php wp_footer(); ?>
</body>

</html>
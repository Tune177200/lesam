<?php

/**
 * Template Name: Giới Thiệu
 */
?>
<?php get_header(); ?>
<main class="main-wrap">
    <?php $banner = get_field('banner'); ?>
    <div class="bn-inner">
        <img class="image" src="<?php echo !empty($banner['banner']['url']) ? $banner['banner']['url'] : ''; ?>">
    </div>
    <?php $thuong_hieu = get_field('thuong_hieu'); ?>
    <div class="tempt-4 pt-20">
        <div class="container">
            <h1 class="gbtitle-4 text-center"><?php echo $thuong_hieu['title']; ?></h1>
            <?php if (!empty($thuong_hieu['list_description'])) { ?>
                <div class="row sp-col-30">
                    <?php foreach ($thuong_hieu['list_description'] as $itemDesc) { ?>
                        <div class="col-lg-6 sp-col">
                            <p><?php echo $itemDesc['description'] ?></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php $cam_hung = get_field('cam_hung'); ?>
    <div class="tempt-4">
        <div class="container">
            <div class="intro">
                <h2 class="gbtitle-4 text-center"><?php echo $cam_hung['title']; ?></h2>
                <p><?php echo $cam_hung['description']; ?></p>
            </div>
        </div>
    </div>
    <div class="tempt-5">
        <div class="container">
            <?php if (!empty($cam_hung['banner']['url'])) { ?>
                <div class="mb-30 text-center">
                    <img src="<?php echo $cam_hung['banner']['url']; ?>" alt="<?php echo $cam_hung['title']; ?>">
                </div>
            <?php } ?>

            <div class="row sp-col-30">
                <?php if (!empty($cam_hung['list_muc_tieu'])) {
                    foreach ($cam_hung['list_muc_tieu'] as $itemMucTieu) { ?>
                        <div class="col-md-6 sp-col">
                            <h4><?php echo $itemMucTieu['title'] ?></h4>
                            <p><?php echo $itemMucTieu['description'] ?></p>
                        </div>
                    <?php }
                }
                if (!empty($cam_hung['sub_banner']['url'])) { ?>
                    <div class="col-md-6 sp-col align-self-center">
                        <img src="<?php echo $cam_hung['sub_banner']['url']; ?>" alt="">
                    </div>
                <?php } ?>
            </div>
            <?php $information = get_field('information');
            if (!empty($information['list_information'])) { ?>
                <div class="grid-1">
                    <div class="row sp-col-30">
                        <?php foreach ($information['list_information'] as $itemInf) { ?>
                            <div class="col-md-4 sp-col">
                                <figure>
                                    <img src="<?php echo !empty($itemInf['icon']['icon']) ? $itemInf['icon']['icon'] : '' ?>" alt="<?php echo $itemInf['title'] ?>">
                                </figure>
                                <h3><?php echo $itemInf['title'] ?></h3>
                                <p><?php echo $itemInf['description'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php $chung_nhan = get_field('chung_nhan'); ?>
    <div class="intro-home-5 page-introduce">
        <div class="container">
            <div class="intro text-center pb-45">
                <h2 class="title-2"><?php echo $chung_nhan['title']; ?></h2>
                <div class="box-description"><?php echo $chung_nhan['description']; ?></div>
            </div>
            <?php if (!empty($chung_nhan['list_chung_nhan'])) { ?>
                <div class="slick-3 text-center slick-arrow-2">
                    <?php foreach ($chung_nhan['list_chung_nhan'] as $itemDescC) { ?>
                        <div>
                            <figure><a href="<?php echo !empty($itemDescC['link']['url']) ? $itemDescC['link']['url'] : '#' ?>" tabindex="-1"><img class="img-fluid" src="<?php echo !empty($itemDescC['image_chung_nhan']['url']) ? $itemDescC['image_chung_nhan']['url'] : '' ?>" alt=""></a></figure>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>
    <?php $album_anh = get_field('album_anh'); ?>
    <div class="container tempt-6">
        <h2 class="gbtitle-6 text-center"><?php echo $album_anh['title'] ?></h2>
        <div class="grid-2-wrap">
            <div class="grid-2 iso" style="position: relative; height: 0px;">
            </div>
            <?php
            $shortCode = $album_anh['shortcode_anh'];
            echo do_shortcode($shortCode);
            ?>
        </div>
    </div>
    <?php $bao_chi = get_field('bao_chi'); ?>
    <div class="intro-home-8" style="padding-bottom: 0;">
        <div class="container">
            <div class="intro text-center pb-30">
                <h2 class="title-3"><?php echo $bao_chi['title'] ?></h2>
            </div>
            <?php
            if (!empty($bao_chi['list_bao_chi'])) { ?>
                <div class="slick-5 hfull-slick text-center list-parents">
                    <?php foreach ($bao_chi['list_bao_chi'] as $itemBao) { ?>
                        <div>
                            <div>
                                <div class="item" style="width: 100%; display: inline-block;">
                                    <figure><a href="<?php echo !empty($itemBao['link']['url']) ? $itemBao['link']['url'] : '' ?>" tabindex="-1"><img src="<?php echo !empty($itemBao['image']['url']) ? $itemBao['image']['url'] : '' ?>"></a></figure>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</main>
<style>
    @media (max-width: 767px) {
        .intro-home-5 .intro {
            margin-top: 0;
        }

        .intro-home-5 .intro .box-description {
            margin-bottom: 15px;
        }
    }
</style>
<?php get_footer(); ?>
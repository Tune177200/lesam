<?php $footer = get_field('footer', 'option'); ?>
<div class="section__news intro-home-3">
    <div class="container">

        <div class="section__news--content text-center mb-5">
            <h3><?php echo $footer['blog']['title'] ?></h3>
            <p><?php echo $footer['blog']['description'] ?></p>
        </div>

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'post_status' => 'publish',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            echo '<div class="slick-blog">';
            while ($query->have_posts()) {
                $query->the_post(); ?>
                <div>
                    <article class="article-blog text-center">
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="entry-head">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="entry-thumbnail">
                                <div class="post-date">
                                    <div class="post-date-day"><?php echo get_the_date('d'); ?></div>
                                    <div class="post-date-month"><?php echo get_the_date('M'); ?></div>
                                </div>
                            </div>
                            <h3 class="entry-title"><?php echo get_the_title(); ?></h3>
                            <p class="entry-content">
                                <?php echo get_the_excerpt(); ?>
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
                <?php echo lesam_menu('footer-menu', 'flist', ''); ?>
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
<?php wp_footer(); ?>
<?php //lesam_menu('footer-menu', 'flist') 
?>
</body>

</html>
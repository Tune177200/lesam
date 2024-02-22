<?php get_header(); ?>
<main style="padding-top: 108.391px;">
    <div class="archive-post">
        <div class="container">
            <div class="archive-title text-center">
                <h1><?php echo get_queried_object()->name ?></h1>
                <div class="archive-desc">
                <?php echo get_the_archive_description(); ?>
                </div>
            </div>
            
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => get_option('posts_per_page'),
                'paged'          => $paged,
            );
            $queryPost = new WP_Query($args);

            if ($queryPost->have_posts()) {
                echo '<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 archive-list-post">';
                while ($queryPost->have_posts()) {
                    $queryPost->the_post(); ?>
                    <div class="col mb-4">
                        <div class="col-inner">
                            <a href="<?php echo get_permalink() ?>">
                                <div class="post-thumbnail">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>">
                                </div>
                                <div class="post-content">
                                    <h5 class="post-title">
                                        <?php echo get_the_title() ?>
                                    </h5>
                                    <div class="divider"></div>
                                    <div class="post-desc">
                                        <?php
                                        $content = wp_strip_all_tags(get_the_content());
                                        echo strlen($content) > 100 ? substr($content, 0, 100) . '...' : $content;
                                        ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
            <?php }
                echo '</div>';
                echo pagination_lesam($queryPost);
            }
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
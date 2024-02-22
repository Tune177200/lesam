<?php get_header(); ?>
<main style="padding-top: 108.391px;">
    <div class="archive-post">
        <div class="container">
            <article class="single-post-content">
                <div class="entry-cat">
                    <a href="">Tin tức</a>,
                    <a href="">tuyển dụng</a>,
                </div>
                <div class="entry-title">
                    <h1><?php echo get_the_title() ?></h1>
                </div>
                <div class="divider"></div>
                <div class="entry-thumbnail">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title() ?>">
                </div>
                <div class="entry-content">
                    <?php echo get_the_content() ?>
                </div>
            </article>
        </div>
    </div>
</main>
<?php get_footer(); ?>
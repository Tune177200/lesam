<?php

/**
 * Template Name: Đại Lý
 */
get_header();
?>
<main style="padding-top: 108.391px;">
    <!-- Cửa hàng -->
    <div class="container">
        <section class="ss_agency">
            <form method="GET">
                <div class="form_group form_title">
                    <div class="search-title">
                        Tìm Kiếm Đại Lý
                    </div>
                </div>
                <?php
                $sub_terms = get_terms(array(
                    'taxonomy'   => 'tinh_thanh_pho',
                    'hide_empty' => true,
                    'parent' => 0
                ));
                if (!empty($_GET) && !empty($sub_terms)) {
                    $huyen_array = array();
                    foreach ($sub_terms as $term) {
                        $huyen_terms = get_terms(array(
                            'taxonomy'   => 'tinh_thanh_pho',
                            'hide_empty' => true,
                            'parent'     => $term->term_id,
                        ));
                        if (!empty($huyen_terms)) {
                            $huyen_info = array();
                            foreach ($huyen_terms as $huyen_term) {
                                $huyen_info[$huyen_term->slug] = array(
                                    'id'   => $huyen_term->term_id,
                                    'name' => $huyen_term->name,
                                    'slug' => $huyen_term->slug,
                                );
                            }
                            $huyen_array[$term->slug] = $huyen_info;
                        }
                    }
                    $huyen_json = json_encode($huyen_array);
                    $file_path = get_template_directory() . '/assets/json/huyen_data.json';
                    file_put_contents($file_path, $huyen_json);
                }
                ?>
                <div class="form_group">
                    <select name="tinh_thanh_pho" id="tinh_thanh_pho" class="form-control">
                        <option value="">Tỉnh thành</option>
                        <?php
                        if (!empty($sub_terms)) {
                            foreach ($sub_terms as $term) {
                                $selected = '';
                                if (!empty($_GET) && $_GET['tinh_thanh_pho'] == $term->slug) {
                                    $selected = 'selected';
                                }

                                echo '<option value="' . $term->slug . '" ' . $selected . '>' . $term->name . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form_group">
                    <select name="quan_huyen" id="quan_huyen" class="form-control">
                        <?php
                        if (!empty($_GET)) {
                            $termGet = get_term_by('slug', $_GET['tinh_thanh_pho'], 'tinh_thanh_pho');
                            $termGetChild = get_term_children($termGet->term_id, 'tinh_thanh_pho');
                            if (!empty($termGetChild)) {
                                foreach ($termGetChild as $termChild) {
                                    $termEachChild = get_term($termChild, 'tinh_thanh_pho');
                                    $selected = '';
                                    if ($termEachChild->slug == $_GET['quan_huyen']) {
                                        $selected = 'selected';
                                    }
                                    echo '<option value="' . $termEachChild->slug . '" ' . $selected . '>' . $termEachChild->name . '</option>';
                                }
                            } else {
                                echo '<option value="">Quận huyện</option>';
                            }
                        } else {
                            echo '<option value="">Quận huyện</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form_group form_btn">
                    <button type="submit" class="btn btn-primary btn-searchform">Tìm kiếm</button>
                </div>
            </form>

            <div class="row align-items-center justify-content-center">
                <div class="col" data-animate="fadeInUp" data-animated="true">
                    <div class="col-inner text-center">
                        <div class="title_home bold">Hệ thống cửa hàng</div>
                        <div class="gap-element clearfix" style="display:block; height:auto;padding-top: 16px;"></div>
                        <div class="desc_home"><?php the_content() ?></div>
                    </div>
                </div>
            </div>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => 'dai-ly',
                'post_status' => 'publish',
                'posts_per_page' => 9,
                'paged' => $paged,
            );

            if (!empty($_GET['tinh_thanh_pho']) && !empty($_GET['quan_huyen'])) {
                $termArr = array(
                    $_GET['tinh_thanh_pho'],
                    $_GET['quan_huyen']
                );
            } else if (!empty($_GET['tinh_thanh_pho'])) {
                $termArr = array(
                    $_GET['tinh_thanh_pho']
                );
            }

            if (!empty($_GET)) {
                $args['tax_query'] = array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'tinh_thanh_pho',
                        'field' => 'slug',
                        'terms' => $termArr,
                        'include_children' => false,
                        'operator' => 'AND'
                    ),
                );
            }

            $qPost = new WP_Query($args);

            if ($qPost->have_posts()) { ?>
                <div class="row">
                    <?php while ($qPost->have_posts()) {
                        $qPost->the_post(); ?>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <div class="box_store">
                                <div class="box_image">
                                    <img width="1123" height="1280" src="https://kjmaloe.com.vn/wp-content/uploads/2024/01/z4519557203278_676df457eb3a07de685ce3ae909dbeeb.jpg" data-src="https://kjmaloe.com.vn/wp-content/uploads/2024/01/z4519557203278_676df457eb3a07de685ce3ae909dbeeb.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazy-load-active" alt="" decoding="async" fetchpriority="high" srcset="https://kjmaloe.com.vn/wp-content/uploads/2024/01/z4519557203278_676df457eb3a07de685ce3ae909dbeeb.jpg 1123w, https://kjmaloe.com.vn/wp-content/uploads/2024/01/z4519557203278_676df457eb3a07de685ce3ae909dbeeb-768x875.jpg 768w, https://kjmaloe.com.vn/wp-content/uploads/2024/01/z4519557203278_676df457eb3a07de685ce3ae909dbeeb-600x684.jpg 600w" data-srcset="https://kjmaloe.com.vn/wp-content/uploads/2024/01/z4519557203278_676df457eb3a07de685ce3ae909dbeeb.jpg 1123w, https://kjmaloe.com.vn/wp-content/uploads/2024/01/z4519557203278_676df457eb3a07de685ce3ae909dbeeb-768x875.jpg 768w, https://kjmaloe.com.vn/wp-content/uploads/2024/01/z4519557203278_676df457eb3a07de685ce3ae909dbeeb-600x684.jpg 600w" sizes="(max-width: 1123px) 100vw, 1123px">
                                </div>
                                <div class="box_text">
                                    <div class="text-center">
                                        <h4>
                                            <?php echo get_the_title() ?>
                                        </h4>
                                        <div class="agency_map">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ic_sharp-location-on.png" alt="">
                                            <?php echo get_field('address', get_the_ID()) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php
                $big = 999999999;
                $listString = paginate_links(array(
                    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $qPost->max_num_pages,
                    'type'  => 'list',

                ));
                $listString = str_replace("<ul class='page-numbers'>", '<ul class="pagination">', $listString);
                $listString = str_replace('page-numbers', 'page-link', $listString);
                $listString = str_replace('<li>', '<li class="page-item">', $listString);
                $listString = str_replace(
                    '<li class="page-item"><span aria-current="page" class="page-link current">',
                    '<li class="page-item active"><span aria-current="page" class="page-link">',
                    $listString
                );
                echo $listString;
                ?>
            <?php } ?>
        </section>
    </div>
</main>
<?php get_footer(); ?>
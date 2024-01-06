<?php
if (!function_exists('lesam_theme_setup')) {
    function lesam_theme_setup()
    {

        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        // menu
        register_nav_menus(array(
            'main-menu' => __('Main Menu', 'text_domain'),
            'footer-menu' => __('Footer Menu', 'text_domain'),
        ));

        $sidebar = array(
            'name' => 'Main Sidebar',
            'id'    => 'main-sidebar',
            'description' => 'main-sidebar',
            'class' => 'main-sidebar',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   =>  '</h3>',
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'lesam_theme_setup');
}

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

if (!function_exists('lesam_menu')) {
    function lesam_menu($menu, $menuClass, $container)
    {
        $menu = array(
            'theme_location'    => $menu,
            'container'     => $container,
            'container_class'   => 'menu mn-1',
            'menu_class'    => $menuClass,
            'container_id'  => 'menu'
        );
        wp_nav_menu($menu);
    }
}

function pagination_lesam($query)
{
    $listString = paginate_links(array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages,
        'prev_text' => 'Trước',
        'next_text' => 'Sau',
        'type'  => 'list',
    ));
    $listString = str_replace("<ul class='page-numbers'>", '<ul class="pagination">', $listString);
    $listString = str_replace('prev page-numbers', 'page-link btn_text', $listString);
    $listString = str_replace('next page-numbers', 'page-link btn_text', $listString);
    $listString = str_replace('page-numbers', 'page-link', $listString);
    $listString = str_replace('<li>', '<li class="page-item">', $listString);
    $listString = str_replace(
        '<li class="page-item"><span aria-current="page" class="page-link current">',
        '<li class="page-item"><span class="page-link active">',
        $listString
    );
    echo $listString;
}
// gọi ra bằng cách truyền $query vào pagination_baongoc($query);
// cần có 2 tham số bên dưới trong query
// 'posts_per_page' => $wp_query->query_vars['posts_per_page'],
//             'paged' => $paged,

function loadStyle(){
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri().'/assets/css/main.css');
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri().'/assets/css/custom.css');

    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-bundle-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'loadStyle');

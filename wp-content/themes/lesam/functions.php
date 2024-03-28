<?php
if (!function_exists('lesam_theme_setup')) {
    function lesam_theme_setup()
    {

        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        // menu
        register_nav_menus(array(
            'main-menu' => __('Main Menu', 'lesam'),
            'footer-menu' => __('Footer Menu', 'lesam'),
            'footer-menu-2' => __('Footer Menu 2', 'lesam'),
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

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

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

function loadStyle()
{

    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('toastr-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('lightbox-css', get_stylesheet_directory_uri() . '/assets/css/lightbox.css');
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/custom.css');



    wp_enqueue_script('toastr-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array('jquery'), null, true);
    // wp_enqueue_script('jquery-bootstrap-slim', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-bundle-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
    wp_localize_script('custom-js', 'frontendajax', array('ajaxurl' => admin_url('admin-ajax.php'), 'jsonURL' => get_stylesheet_directory_uri() . '/assets/json/huyen_data.json'));
    wp_enqueue_script('lightbox-js', get_stylesheet_directory_uri() . '/assets/js/lightbox.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'loadStyle');

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function creatPostType()
{

    $args = array(

        'labels' => array(
            'name' => 'Đại Lý',
            'singular_name' => 'Đại Lý'
        ),
        'public' => true,
        'supports' => array(
            'title',
            'revisions',
            'thumbnail'
        )

    );

    register_post_type('dai-ly', $args);
}
add_action('init', 'creatPostType');

function custom_taxonomy()
{
    register_taxonomy(
        'tinh_thanh_pho',
        'dai-ly',
        array(
            'label' => 'Tỉnh, Thành Phố',
            'rewrite' => array('slug' => 'tinh-thanh-pho'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'custom_taxonomy');


// // Tạo Endpoint AJAX
// add_action( 'wp_ajax_get_districts_by_province', 'get_districts_by_province' );
// add_action( 'wp_ajax_nopriv_get_districts_by_province', 'get_districts_by_province' );

// function get_districts_by_province() {
//     $province_id = $_POST['province_id'];
//     // Thực hiện truy vấn để lấy danh sách quận huyện dựa trên tỉnh thành
//     // Trả về danh sách quận huyện dưới dạng JSON
//     wp_send_json($districts);
// }

function bootstrap_pagination()
{
    global $wp_query;
    $big = 999999999;
    $listString = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text'    => __('← Previous'),
        'next_text'    => __('Next  →'),
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
}

add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case 'VND':
            $currency_symbol = 'vnđ';
            break;
    }
    return $currency_symbol;
}

add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');

function woocommerce_ajax_add_to_cart()
{
    $product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
    $variation_id = isset($_POST['variation_id']) ? absint($_POST['variation_id']) : '';

    $passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity, $variation_id);

    if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) !== false) {
        do_action('woocommerce_ajax_added_to_cart', $product_id);

        WC_AJAX::get_refreshed_fragments();
    } else {
        $data = array(
            'error' => true,
            'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
        );
        wp_send_json($data);
    }

    die();
}

function formatPrice($product, $price)
{
    global $product;
    $a = number_format($price, wc_get_price_decimals(), wc_get_price_decimal_separator(), wc_get_price_thousand_separator()) . ' ' . get_woocommerce_currency_symbol();

    return $a;
}

function test($fieldset){

    $fieldset['order']['order_comments']['type'] = 'text';
    $fieldset['order']['order_comments']['placeholder'] = 'Nhập ghi Chú đơn hàng';
    
    return $fieldset;
}
add_filter('woocommerce_checkout_fields', 'test');


function test2($field, $key, $args, $value){
    
    $args['class'][0] = 'form-row-wide';
 
    return $args;
}
add_filter('woocommerce_form_field_text', 'test2', 10, 4 );
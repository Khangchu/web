<?php
function load_Css_Bootstrap(){
    wp_enqueue_style( "css_bootstrap", get_template_directory_uri(). '/css/bootstrap.min.css',array(),"1.0.3", "all" );
}
function load_Js_Bootstrap () {
wp_enqueue_script( "js_bootstrap", get_template_directory_uri().'/js/bootstrap.min.js',"jquery", '1.0.1', true );
}
function customCss () {
    wp_enqueue_style( "custom_css",  get_template_directory_uri(). '/css/custom.css', array(),"1.0.0", "all" );
}
function header_css () {
    wp_enqueue_style( "header_css",  get_template_directory_uri(). '/css/header.css', array(),"1.0.0", "all" );
}
function animate_css () {
    wp_enqueue_style( "animate_css",  get_template_directory_uri(). '/css/animate.min.css', array(),"1.0.0", "all" );
}
function style_css () {
    wp_enqueue_style( "style_css",  get_template_directory_uri(). '/style.css', array(),"1.0.0", "all" );
}
function responsiv_css () {
    wp_enqueue_style( "responsiv_css",  get_template_directory_uri(). '/css/style.responsiv.css', array(),"1.0.0", "all" );
}
function show_js () {
    wp_enqueue_script( "show_js",  get_template_directory_uri(). '/js/show.js', "jquery", '1.0.1', true );
}
function trangchu_css () {
    wp_enqueue_style( "trangchu_css",  get_template_directory_uri(). '/css/trangchu.css', array(),"1.0.0", "all" );
}
function gioithieu_css () {
    wp_enqueue_style( "gioithieu_css",  get_template_directory_uri(). '/css/gioithieu.css', array(),"1.0.0", "all" );
}
function tintuc_css () {
    wp_enqueue_style( "tintuc_css",  get_template_directory_uri(). '/css/tintuc.css', array(),"1.0.0", "all" );
}
function daotao_css () {
    wp_enqueue_style( "daotao_css",  get_template_directory_uri(). '/css/daotao.css', array(),"1.0.0", "all" );
}
function tuyensinh_css () {
    wp_enqueue_style( "tuyensinh_css",  get_template_directory_uri(). '/css/tuyensinh.css', array(),"1.0.0", "all" );
}
function nghiencuu_css () {
    wp_enqueue_style( "nghiencuu_css",  get_template_directory_uri(). '/css/nghiencuu.css', array(),"1.0.0", "all" );
}
function lichcongtac_css () {
    wp_enqueue_style( "lichcongtac_css",  get_template_directory_uri(). '/css/lichcongtac.css', array(),"1.0.0", "all" );
}
function enqueue_slick_slider() {
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, true);
}
function register_navwalker(){
    register_nav_menus( array(
        'primary' => __( 'Primary Menu' ),
        'mobile' => __( 'mobile Menu' ),
    ) );
}
function show_all_terms_in_menu($args, $taxonomy) {
    if (is_admin() && isset($args['name']) && $taxonomy === 'nghiencuu') {
        $args['hide_empty'] = false;
    }
    return $args;
}
add_filter('get_terms_args', 'show_all_terms_in_menu', 10, 2);

function enqueue_slimmenu_slider() {
    wp_enqueue_script('jquery.slimmenu.js', get_template_directory_uri() . '/js/jquery.slimmenu.js', array('jquery'), null, true);
    wp_enqueue_style('slimmenu-css', get_template_directory_uri() . '/css/slimmenu.css');

}
register_taxonomy('tintuc', 'post', [
    'label' => 'Tin tức',
    'hierarchical' => true,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true, // <<< BẮT BUỘC PHẢI CÓ
    'rewrite' => ['slug' => 'tintuc'],
]);
function my_custom_term_redirect() {
    $term = get_queried_object();

    if ($term && isset($term->slug) && $term->slug === 'chuong-trinh-dao-tao-dh-truong-dien-dien-tu') {
        $redirect_post_id = 183;
        $redirect_url = get_permalink($redirect_post_id);

        if ($redirect_url) {
            wp_redirect($redirect_url);
            exit;
        }
    }
}
// Thêm vào functions.php
function show_posts_by_tuyensinh_term($atts) {
    $atts = shortcode_atts([
        'slug' => '',
    ], $atts, 'list_tuyensinh');

    if (!$atts['slug']) return '';

    $args = [
        'post_type' => 'admissions',
        'posts_per_page' => -1,
        'tax_query' => [
            [
                'taxonomy' => 'tuyensinh',
                'field' => 'slug',
                'terms' => $atts['slug'],
            ],
        ],
    ];

    $query = new WP_Query($args);

    ob_start(); // để capture nội dung

    if ($query->have_posts()) {
        echo '<ul>';
        while ($query->have_posts()) {
            $query->the_post();
            echo '<li class="custom-metis-sub-item">';
            ?>
                <a id="height-a" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="sf-with-ul">
                    <?php the_title(); ?>
                </a>
            <?php
            echo '</li>';
        }
        echo '</ul>';
    }

    wp_reset_postdata();
    return ob_get_clean(); // trả về nội dung
}
add_shortcode('list_tuyensinh', 'show_posts_by_tuyensinh_term');
add_action('template_redirect', 'my_custom_term_redirect');
add_action( 'after_setup_theme', 'register_navwalker' );
add_action('wp_enqueue_scripts', 'enqueue_slick_slider');
add_action('wp_enqueue_scripts', 'enqueue_slimmenu_slider');
add_action("wp_enqueue_scripts","load_Js_Bootstrap");
add_action("wp_enqueue_scripts","load_Css_Bootstrap");
add_action( "wp_enqueue_scripts", "customCss" );
add_action( "wp_enqueue_scripts", "header_css" );
add_action( "wp_enqueue_scripts", "animate_css" );
add_action( "wp_enqueue_scripts", "style_css" );
add_action( "wp_enqueue_scripts", "responsiv_css" );
add_action( "wp_enqueue_scripts", "show_js" );
add_action( "wp_enqueue_scripts", "trangchu_css" );
add_action( "wp_enqueue_scripts", "gioithieu_css" );
add_action( "wp_enqueue_scripts", "tintuc_css" );
add_action( "wp_enqueue_scripts", "daotao_css" );
add_action( "wp_enqueue_scripts", "tuyensinh_css" );
add_action( "wp_enqueue_scripts", "nghiencuu_css" );
add_action( "wp_enqueue_scripts", "lichcongtac_css" );
add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
});
class Walker_Mobile_Menu extends Walker_Nav_Menu {
    // Bắt đầu <ul>
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul>\n";
    }

    // Kết thúc </ul>
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Bắt đầu <li>
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $has_children = in_array('menu-item-has-children', $item->classes);
        $indent = str_repeat("\t", $depth);
        $output .= "$indent<li>\n";

        // Bọc trong <div>
        $output .= "$indent\t<div>\n";

        $title = esc_html($item->title);
        $url = esc_url($item->url);
        $output .= "$indent\t\t<a title=\"$title\" href=\"$url\">$title</a>\n";

        // Thêm icon nếu có children
        if ($has_children) {
            $output .= "$indent\t\t<i class=\"fa fa-angle-down custom-fa\" aria-hidden=\"true\"></i>\n";
        }

        $output .= "$indent\t</div>\n";
    }

    // Kết thúc </li>
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "\t</li>\n";
    }
}
add_filter('nav_menu_css_class', 'remove_nav_menu_li_class', 10, 3);
function remove_nav_menu_li_class($classes, $item, $args) {
    if ($args->theme_location === 'primary') {
        return [];
    }
    return $classes;
}

add_filter('nav_menu_item_id', '__return_null');

function fix_search_pagination($redirect_url) {
    if (is_search()) {
        $redirect_url = remove_query_arg('page', $redirect_url);
    }
    return $redirect_url;
}
add_filter('redirect_canonical', 'fix_search_pagination');
function fix_search_url_parameters($url) {
    // Remove duplicate parameters
    $url = remove_query_arg(['#038;s', '#038;l'], $url);
    return $url;
}
add_filter('get_pagenum_link', 'fix_search_url_parameters');
function remove_editor_for_specific_page() {
    // ID của trang bạn muốn tắt trình soạn thảo
    $page_id = 562;

    // Lấy màn hình hiện tại
    $screen = get_current_screen();

    if ( $screen->post_type === 'page' && isset($_GET['post']) && intval($_GET['post']) === $page_id ) {
        remove_post_type_support('page', 'editor');
    }
}
add_action('admin_head', 'remove_editor_for_specific_page');
add_action('template_redirect', function () {
    if (is_tax('lichcongtac')) {
        $term = get_queried_object(); // lấy term hiện tại

        if (!$term || is_wp_error($term)) return;
        $now = new DateTime();
        $tuan = (int) $now->format('W');
        $nam  = (int) $now->format('o');

        $args = [
            'post_type'      => 'workcalendar',
            'posts_per_page' => 1,
            'meta_query'     => [
                [
                    'key'     => 'số_tuần',
                    'value'   => $tuan,
                    'compare' => '=',
                    'type'    => 'NUMERIC',
                ],
                [
                    'key'     => 'nam',
                    'value'   => $nam,
                    'compare' => '=',
                    'type'    => 'NUMERIC',
                ],
            ],
            'tax_query' => [
                [
                    'taxonomy' => 'lichcongtac',
                    'field'    => 'term_id',
                    'terms'    => $term->term_id,
                ],
            ],
        ];

        $query = new WP_Query($args);
        if ($query->have_posts()) {
            $query->the_post();
            wp_redirect(get_permalink());
            exit;
        } else {
            wp_redirect(home_url('/khong-tim-thay-lich-cong-tac/'));
            exit;
        }
    }
});


?>
<?php
add_filter('nav_menu_css_class', '__return_empty_array');
add_filter('nav_menu_item_id', '__return_false');
add_filter('nav_menu_attributes', function($atts, $item, $args, $depth) {
    if (isset($atts['id'])) {
        unset($atts['id']);
    }
    return $atts;
}, 10, 4);

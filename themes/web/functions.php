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
add_action('admin_init', 'remove_editor_for_specific_pages');

function remove_editor_for_specific_pages() {
    // Mảng các ID của các page muốn tắt trình soạn thảo
    $page_ids = [562,28,93,135,236,259,314,417,439,460,562,769,781,796,1056,1047,1088,10,1097]; // <-- Thay bằng ID thực tế của bạn

    // Kiểm tra xem có đang ở trang chỉnh sửa bài viết không
    if (isset($_GET['post'])) {
        $post_id = intval($_GET['post']);
        $post_type = get_post_type($post_id);

        // Nếu là loại 'page' và ID nằm trong danh sách
        if ($post_type === 'page' && in_array($post_id, $page_ids)) {
            remove_post_type_support('page', 'editor');
        }
    }
}

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
// Tăng lượt xem
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '1');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// Lấy lượt xem
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    return $count ? $count : '0';
}

function custom_enqueue_assets() {
    // Font Awesome CDN
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'custom_enqueue_assets');
add_action('wp_ajax_update_video_reaction', 'update_video_reaction');
add_action('wp_ajax_nopriv_update_video_reaction', 'update_video_reaction');

function update_video_reaction() {
    $post_id = intval($_POST['post_id']);
    $action  = sanitize_text_field($_POST['action']);

   $reaction = sanitize_text_field($_POST['reaction']); // đổi biến
if (!in_array($reaction, ['like', 'dislike']) || !$post_id) {
    wp_send_json_error('Dữ liệu không hợp lệ.');
}
$current = intval(get_field($reaction, $post_id));
$new_value = $current + 1;
update_field($reaction, $new_value, $post_id);


    $like_count = (int) get_field('like', $post_id);
    $dislike_count = (int) get_field('dislike', $post_id);
    $total = $like_count + $dislike_count;

    $plike = $total ? round(($like_count / $total) * 100) : 0;
    $pdislike = $total ? 100 - $plike : 0;

    wp_send_json_success([
        'count' => $new_value,
        'like' => $like_count,
        'dislike' => $dislike_count,
        'plike' => $plike,
        'pdislike' => $pdislike,
    ]);
}
add_action('wp_ajax_comment_like', 'handle_comment_like');
add_action('wp_ajax_nopriv_comment_like', 'handle_comment_like');

function handle_comment_like() {
    $comment_id = intval($_POST['comment_id']);
    $value = intval($_POST['value']); // 1 = like, -1 = dislike

    $likes = get_comment_meta($comment_id, 'likes', true) ?: 0;
    $dislikes = get_comment_meta($comment_id, 'dislikes', true) ?: 0;

    if ($value == 1) {
        $likes++;
        update_comment_meta($comment_id, 'likes', $likes);
    } elseif ($value == -1) {
        $dislikes++;
        update_comment_meta($comment_id, 'dislikes', $dislikes);
    }

    wp_send_json_success([
        'likes' => $likes,
        'dislikes' => $dislikes
    ]);
}
// AJAX xử lý like/dislike bình luận
add_action('wp_ajax_handle_comment_like_dislike', 'handle_comment_like_dislike');
add_action('wp_ajax_nopriv_handle_comment_like_dislike', 'handle_comment_like_dislike');

function handle_comment_like_dislike() {
    if (!isset($_POST['comment_id'], $_POST['value'])) {
        wp_send_json_error(['message' => 'Thiếu dữ liệu']);
    }

    $comment_id = intval($_POST['comment_id']);
    $value = $_POST['value'] === '1' ? 1 : -1; // 1 = like, -1 = dislike

    // Kiểm tra comment tồn tại
    $comment = get_comment($comment_id);
    if (!$comment) {
        wp_send_json_error(['message' => 'Bình luận không tồn tại']);
    }

    // Lấy meta hiện tại hoặc 0
    $like_count = (int) get_comment_meta($comment_id, 'like', true);
    $dislike_count = (int) get_comment_meta($comment_id, 'dislike', true);

    // Cập nhật số lượng tùy theo action
    if ($value === 1) {
        $like_count++;
        update_comment_meta($comment_id, 'like', $like_count);
    } else {
        $dislike_count++;
        update_comment_meta($comment_id, 'dislike', $dislike_count);
    }

    wp_send_json_success([
        'like' => $like_count,
        'dislike' => $dislike_count,
    ]);
}
function update_menu_order_manual() {
    $items = [
        'introduction' => 0,
        'doi-ngu-can-bo' => 1,
        'khoa-trung-tam' => 2,
        'dao-tao' => 3,
        'tuyen-sinh' => 4,
        'sinh-vien' => 5,
        'cuu-sinh-vien' => 6,
        'nghien-cuu' => 7,
        'hop-tac-va-ho-tro' => 8,
        'lich-cong-tac' => 9,
        'tin-tuc' => 10,
        'thu-vien-anh' => 11,
        'video' => 12
    ];

    foreach ($items as $slug => $order) {
        $page = get_page_by_path($slug);
        if ($page) {
            wp_update_post([
                'ID' => $page->ID,
                'menu_order' => $order
            ]);
        }
    }
}
// Chạy 1 lần thôi, sau đó nên xóa hoặc comment lại
add_action('init', 'update_menu_order_manual');


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

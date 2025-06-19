<?php get_header("v2")?>
<div class="section-body">
    <div>
        <search>
            <div class="container seek" id = "body">
                <nav class="third-nav wraper">
                    <div class="row">
                        <div class="bg">
                            <div class="clearfix">
                                <div class="col-xs-24 col-sm-18 col-md-18">
                                    <div class="breadcrumbs-wrap">
                                        <div class="display">
                                            <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                            <div class="display">
                                            <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                            <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php the_permalink()?>"><span>Tìm kiếm<i class="fa fa-lg fa-angle-right"></i></span></a></li></ul>
                                        </div>
                                        </div>
                                        <ul class="subs-breadcrumbs"></ul>
                                        <ul class="temp-breadcrumbs hidden" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="/index.php" itemprop="item" title="Trang chủ"><span itemprop="name">Trang chủ</span></a><i class="hidden" itemprop="position" content="1"></i></li>
                                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="<?php the_permalink()?>" itemprop="item" title="Tìm kiếm"><span class="txt" itemprop="name">Tìm kiếm</span></a><i class="hidden" itemprop="position" content="2"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="headerSearch hidden col-xs-24 col-sm-6 col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" maxlength="60" placeholder="Tìm kiếm..."><span class="input-group-btn"><button type="button" class="btn btn-info" data-url="/vi/seek/?q=" data-minlength="3" data-click="y"><em class="fa fa-search fa-lg"></em></button></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="row"></div>
                <div class="row wraper">
                    <div class="page panel panel-default">
                        <div class="panel-body">
                            <h3 class="text-center margin-bottom-lg">Tìm và lấy những gì bạn muốn!</h3>
                            <div id="search-form" class="text-center">
            <form action="<?php bloginfo('url'); ?>" name="form_search" method="get" id="form_search" role="form">
                    <input type="hidden" name="post_type" value="<?php echo get_post_type(); ?>">
                <div class="m-bottom">
                    <div class="form-group">
                        <label class="sr-only" for="search_query">Từ tìm kiếm</label>
                        <input class="form-control" id="search_query" name="s" value="<?php echo get_search_query(); ?>" maxlength="60" placeholder="Từ tìm kiếm">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="search_query_mod">Tìm kiếm tại</label>
                                    <?php
                        $current_post_type = isset($_GET['post_type']) ? $_GET['post_type'] : 'any';
                        ?>

                     <select name="post_type" id="search_query_mod" class="form-control">
    <option value="any" <?php selected($current_post_type, 'any'); ?>>Tìm kiếm trên site</option>

    <?php
    // Lấy post types custom (public và không phải built-in)
    $post_types = get_post_types([
        'public'   => true,
        '_builtin' => false
    ], 'objects');

    // In các post type custom
    foreach ($post_types as $post_type) {
        printf(
            '<option value="%s" %s>%s</option>',
            esc_attr($post_type->name),
            selected($current_post_type, $post_type->name, false),
            esc_html($post_type->labels->name)
        );
    }
    ?>
</select>

                    </div>
                    <div class="form-group">
                        <input type="submit" id="search_submit" value="Tìm kiếm" class="btn btn-primary">
                         <?php
                            $advanced_search_url = function_exists('trp_get_url_for_language') 
                            ? trp_get_url_for_language(null, get_permalink(1097)) 
                            : get_permalink(1097);
                            ?>
                            <a href="<?php echo esc_url($advanced_search_url); ?>" class="advSearch" id="advanced-search-link">Nâng cao</a>
                    </div>
                </div>
                <div class="radio">
                   <?php
$l_value = isset($_GET['l']) ? $_GET['l'] : '1';
?>
<label class="radio-inline">
    <input name="l" id="search_logic_and" type="radio" value="1" <?php checked($l_value, '1'); ?>>
    Cả cụm từ
</label>
<label class="radio-inline">
    <input name="l" id="search_logic_or" type="radio" value="0" <?php checked($l_value, '0'); ?>>
    Tối thiểu 1 từ
</label>

                </div>
                <input type="hidden">
            </form>
        </div>
                            <div id="search_result">
                                <hr>
<?php
$search_keyword = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
$search_logic = isset($_GET['l']) && $_GET['l'] == '0' ? 'OR' : 'AND';
$current_post_type = isset($_GET['post_type']) ? sanitize_text_field($_GET['post_type']) : 'any';
$limit = ($current_post_type === 'any') ? 4 : -1;
$paged = 1;
if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
} elseif (isset($_GET['paged'])) {
    $paged = intval($_GET['paged']);
}


if (mb_strlen($search_keyword) >= 3) {
    $post_types_to_search = [];
 if ($current_post_type === 'any') {
    $post_types_to_search = get_post_types([
        'public' => true,
        '_builtin' => false 
    ], 'names');
} else {
    $post_types_to_search[] = $current_post_type;
}
    foreach ($post_types_to_search as $pt_name) {
          $pt_obj = get_post_type_object($pt_name);
        if (!$pt_obj) continue;
       $keywords = explode(' ', $search_keyword);
$args = [
    'post_type' => $pt_name,
    'posts_per_page' =>$limit,
    'post_status' => 'publish',
    's' => $search_logic === 'AND' ? $search_keyword : '',
    'paged' => $paged
];

if ($search_logic === 'OR') {
    add_filter('posts_search', function($search, \WP_Query $wp_query) use ($keywords) {
        global $wpdb;

        if (!empty($keywords)) {
            $search = " AND (";
            $search_parts = [];
            foreach ($keywords as $word) {
                $word = esc_sql(like_escape($word));
                $search_parts[] = $wpdb->prepare("{$wpdb->posts}.post_title LIKE %s", '%' . $word . '%');
                $search_parts[] = $wpdb->prepare("{$wpdb->posts}.post_content LIKE %s", '%' . $word . '%');
            }
            $search .= implode(" OR ", $search_parts);
            $search .= ")";
        }

        return $search;
    }, 10, 2);
}


        $query = new WP_Query($args);

        if ($query->have_posts()) {
            ?>
              <input type="hidden" name="hidden_key" value="<?php echo get_search_query(); ?>">
     <ul class="nav nav-tabs m-bottom"> 
    <li class="active">
        <a>
            Kết quả tìm kiếm trên "<?php echo esc_html($pt_obj->labels->name) ?>" 
             <span class="label label-info"><?php echo intval($query->found_posts) ?></span>  
        </a>
    </li>

    <?php if ($query->found_posts > 4 && $current_post_type === 'any'): ?>

    <li class="pull-right">
        <a href="<?php echo esc_url( add_query_arg([
            's' => $search_keyword,
            'post_type' => $pt_name,
            'l' => $search_logic === 'OR' ? '0' : '1',
        ]) ); ?>">
            <em class="fa fa-thumb-tack">&nbsp;</em> Xem tất cả
        </a>
    </li>
    <?php endif; ?>
</ul>

                <?php
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <h3 class="margin-bottom-sm">
                    <a href="<?php the_permalink(); ?>">
                      <?php
                        $search_keyword = get_search_query();
                        $title = get_the_title();
                        if ($search_keyword && strlen($search_keyword) >= 3) {
                         $highlighted = $title;
if ($search_logic === 'OR') {
    foreach ($keywords as $word) {
        $highlighted = preg_replace(
            '/' . preg_quote($word, '/') . '/iu',
            '<span class="keyword">$0</span>',
            $highlighted
        );
    }
} else {
    $highlighted = preg_replace(
        '/' . preg_quote($search_keyword, '/') . '/iu',
        '<span class="keyword">$0</span>',
        $highlighted
    );
}

                            echo $highlighted;
                        } else {
                            echo esc_html($title);
                        }
                        ?>
                    </a>
                </h3>
<div class="margin-bottom-lg">
<?php
$content = get_the_content();
$content = strip_tags($content);
$content = preg_replace('/\s+/', ' ', $content);
if (!empty($search_keyword) && mb_strlen($search_keyword) >= 3) {
    $pos = mb_stripos($content, $search_keyword, 0, 'UTF-8');

    if ($pos !== false) {
        $start = max(0, $pos - 80);
        $excerpt = mb_substr($content, $start, 200, 'UTF-8');

        if ($search_logic === 'OR') {
    foreach ($keywords as $word) {
        $highlighted = preg_replace(
            '/' . preg_quote($word, '/') . '/iu',
            '<span class="keyword">$0</span>',
            $excerpt
        );
    }
} else {
    $highlighted = preg_replace(
        '/' . preg_quote($search_keyword, '/') . '/iu',
        '<span class="keyword">$0</span>',
        $excerpt
    );
}


        if ($start > 0) {
            $highlighted = '... ' . ltrim($highlighted);
        }
    } else {
        $highlighted = mb_substr($content, 0, 200, 'UTF-8') . '...';
    }
} else {
    $highlighted = get_the_excerpt();
}

echo $highlighted;
?>
</div>



<?php
            }
            ?>

                <?php if ($current_post_type !== 'any'): ?>
                    <?php endif; ?>
                    <?php
         
        }
        
        wp_reset_postdata();
    }
} else {
    echo '<span class="red">Bạn cần nhập từ khóa tìm kiếm có số ký tự tối thiểu là 3</span>';
}

?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </search>
    </div>
</div>
<?php get_footer('footer') ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("search_query");
    const submit = document.getElementById("search_submit");
    const select = document.getElementById("search_query_mod");
    const advancedSearch = document.querySelector(".advSearch");
    const advancedSearchLink = document.getElementById("advanced-search-link");
    // Ban đầu disable nếu input rỗng
    submit.disabled = input.value.length < 3;

    input.addEventListener("input", function () {
        if (input.value.trim().length >= 3) {
            submit.disabled = false;
        } else {
            submit.disabled = true;
        }
    });
     // Ẩn/hiển thị liên kết "Nâng cao" dựa trên giá trị select
    function toggleAdvancedSearch() {
        if (select.value === 'any' || select.value === 'page') {
            if (advancedSearch) {
                advancedSearch.style.display = 'none';
            }
        } else {
            if (advancedSearch) {
                advancedSearch.style.display = 'inline-block';
            }
        }
          if (advancedSearchLink) {
            let baseUrl = '<?php echo esc_url(get_permalink(1097)); ?>';
            <?php if (function_exists('trp_get_url_for_language')): ?>
                baseUrl = '<?php echo esc_url(trp_get_url_for_language(null, get_permalink(1097))); ?>';
            <?php endif; ?>
            advancedSearchLink.href = baseUrl + (select.value ? '?search_post_type=' + encodeURIComponent(select.value) : '');
        }
    }

    // Gọi khi tải trang
    toggleAdvancedSearch();

    // Gọi khi thay đổi select
    select.addEventListener("change", toggleAdvancedSearch);
    // Optional: chặn form nếu bấm submit khi < 3 ký tự
    const form = document.getElementById("form_search");
    form.addEventListener("submit", function (e) {
        if (input.value.trim().length < 3) {
            e.preventDefault();
            alert("Vui lòng nhập ít nhất 3 ký tự để tìm kiếm.");
        }
    });
});
</script>

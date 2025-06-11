<?php get_header("v2"); ?>
<div class="section-body">
    <div>
        <section>
            <div class="container news" id="body">
                <nav class="third-nav wraper">
                    <div class="row">
                        <div class="bg">
                            <div class="clearfix">
                                <div class="col-xs-24 col-sm-18 col-md-18">
                                    <div class="breadcrumbs-wrap">
                                        <div class="display">
                                            <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                            <ul class="breadcrumbs list-none">
                                                <li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li>
                                                <li id="brcr_1"><a href="<?php the_permalink(439); ?>"><span>Sinh viên<i class="fa fa-lg fa-angle-right"></i></span></a></li>
                                                <li id="brcr_2">
                                                  <?php
                                                        $term = get_queried_object();

                                                        if (!empty($term) && !is_wp_error($term)) {
                                                            $term_link = get_term_link($term);
                                                            ?>
                                                            <a href="<?php echo esc_url($term_link); ?>">
                                                                <span><?php echo esc_html($term->name); ?><i class="fa fa-lg fa-angle-right"></i></span>
                                                            </a>
                                                            <?php
                                                        } else {
                                                            echo '<span>Không có chuyên mục nào.</span>';
                                                        }
                                                        ?>

                                                </li>
                                            </ul>
                                        </div>
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
                <div class="row wraper">
                    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
                        <div class="news_column">
                            <?php
                             $paged = (isset($_GET['trang']) && is_numeric($_GET['trang'])) ? (int) $_GET['trang'] : 1;
                            $term = get_queried_object();
                            $args = array(
                                'post_type' => 'student',
                                'posts_per_page' => 5,
                                'paged' => $paged,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'sinhvien',
                                        'field' => 'slug',
                                        'terms' => $term->slug,
                                    ),
                                ),
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                echo '<ul>';
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail pull-left imghome')); ?>
                                            </a>
                                            <h3>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <div class="text-muted">
                                                <ul class="list-unstyled list-inline">
                                                    <li><em class="fa fa-clock-o">&nbsp;</em> <?php echo get_the_date('d/m/Y H:i:s'); ?></li>
                                                    <li><em class="fa fa-eye">&nbsp;</em> Đã xem: <?php echo function_exists('getPostViews') ? getPostViews(get_the_ID()) : '0'; ?></li>
                                                </ul>
                                            </div>
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                echo '</ul>';
                            } else {
                                echo 'Không có bài viết nào trong chuyên mục này.';
                            }
                            ?>
                           <div class="clearfix"></div>
  <?php
        $pagination_links = paginate_links([
            'base' => add_query_arg('trang', '%#%'),
            'format' => '',
            'current' => $paged,
            'total' => $query->max_num_pages,
            'type' => 'array',
            'prev_text' => '«',
            'next_text' => '»',
        ]);

        if (!empty($pagination_links)) {
            echo '<div class="text-center"><ul class="pagination">';
            foreach ($pagination_links as $link) {
                if (strpos($link, 'current') !== false) {
                    echo '<li class="active">' . str_replace('page-numbers', '', $link) . '</li>';
                } elseif (strpos($link, 'dots') !== false) {
                    echo '<li class="disabled">' . str_replace('page-numbers dots', '', $link) . '</li>';
                } elseif (strpos($link, '«') !== false || strpos($link, '»') !== false) {
                    if (strpos($link, 'href') !== false) {
                        echo '<li>' . str_replace('page-numbers', '', $link) . '</li>';
                    } else {
                        echo '<li class="disabled"><a href="javascript:void(0)">' . strip_tags($link) . '</a></li>';
                    }
                } else {
                    echo '<li>' . str_replace('page-numbers', '', $link) . '</li>';
                }
            }
            echo '</ul></div>';
        }

        wp_reset_postdata();?>

                        </div>
                    </div>
<div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left">
    <div class="clearfix metismenu custom-metis">
        <aside class="sidebar">
            <nav class="sidebar-nav">
                <ul id="menu_65">
                    <li class="active">
                        <a title="Hợp tác và hỗ trợ" href="/vi/khoa-trung-tam/">Hợp tác và hỗ trợ</a>
                        <span class="fa arrow expand" style="margin-top: -36px;"></span>
                        <ul class="collapse in">
                            <?php
$current_term_id = 0;
$current_term_ids = [];
if (is_tax('sinhvien')) {
    $current_term = get_queried_object();
    if ($current_term instanceof WP_Term) {
        $current_term_id = $current_term->term_id;
    }
}
if (is_singular('student')) {
    $terms_of_post = get_the_terms(get_the_ID(), 'sinhvien');
    if (!empty($terms_of_post) && !is_wp_error($terms_of_post)) {
        $current_term_ids = wp_list_pluck($terms_of_post, 'term_id');
        foreach ($terms_of_post as $post_term) {
            if ($post_term->parent && !in_array($post_term->parent, $current_term_ids)) {
                $current_term_ids[] = $post_term->parent;
            }
        }
    }
}
?>

<?php
$terms = get_terms([
    'taxonomy' => 'sinhvien',
    'hide_empty' => false,
    'parent' => 0,
]);
if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $term_link = get_term_link($term);
        $child_terms = get_terms([
            'taxonomy' => 'sinhvien',
            'hide_empty' => false,
            'parent' => $term->term_id
        ]);
        $li_class = 'custom-metis-sub-item';
        if (!empty($child_terms)) {
            $li_class .= ' active_sub';
        }

        // Đánh dấu active nếu:
        // - Là term archive
        // - Hoặc là term của bài viết
        if ($term->term_id === $current_term_id || in_array($term->term_id, $current_term_ids)) {
            $li_class .= ' active2';
        }
        ?>
        <li class="<?php echo esc_attr($li_class); ?>">
            <a id="height-a" title="<?php echo esc_attr($term->name); ?>" href="<?php echo esc_url($term_link); ?>" class="sf-with-ul">
                <?php echo esc_html($term->name); ?>
            </a>
            <?php if (!empty($child_terms)) { ?>
                <span id="span-id" class="fa arrow expand" style="margin-top: -36px;"></span>
                <ul class="collapse">
                    <?php foreach ($child_terms as $child) {
                        $child_link = get_term_link($child);
                        $child_li_class = 'custom-metis-sub-item';

                        if ($child->term_id === $current_term_id || in_array($child->term_id, $current_term_ids)) {
                            $child_li_class .= ' active2';
                        }
                        ?>
                        <li class="<?php echo esc_attr($child_li_class); ?>">
                            <a id="height-a" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>" class="sf-with-ul">
                                <?php echo esc_html($child->name); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
        <?php
    }
} else {
    echo '<li>Không có chuyên mục nào trong taxonomy này.</li>';
}
?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
    </div>
</div>
                </div>
            </section>
        </div>
    </div>
    <?php get_footer('footer'); ?>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const arrows = document.querySelectorAll(".arrow.expand");

    arrows.forEach(arrow => {
        arrow.addEventListener("click", function (e) {
            e.preventDefault();
            const parentLi = this.closest("li");
            const submenu = parentLi.querySelector("ul.collapse");
            if (!submenu) return;
            parentLi.classList.toggle("active");
            submenu.classList.toggle("in");
            const isExpanded = submenu.classList.contains("in");
            submenu.setAttribute("aria-expanded", isExpanded);
            submenu.style.height = isExpanded ? submenu.scrollHeight + "px" : "0px";
        });
    });
});

</script>
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
                                                <li id="brcr_1"><a href="<?php the_permalink(314); ?>"><span>Khoa-Trung tâm<i class="fa fa-lg fa-angle-right"></i></span></a></li>
                                             <?php
$term = get_queried_object();

if (!empty($term) && !is_wp_error($term)) {
    // Nếu term hiện tại có term cha
    if ($term->parent != 0) {
        $parent_term = get_term($term->parent, 'khoatrungtam');
        if (!is_wp_error($parent_term)) {
            $parent_link = get_term_link($parent_term);
            ?>
            <li id="brcr_2">
                <a href="<?php echo esc_url($parent_link); ?>">
                    <span><?php echo esc_html($parent_term->name); ?><i class="fa fa-lg fa-angle-right"></i></span>
                </a>
            </li>
            <li id="brcr_3">
                <a href="<?php echo esc_url(get_term_link($term)); ?>">
                    <span><?php echo esc_html($term->name); ?><i class="fa fa-lg fa-angle-right"></i></span>
                </a>
            </li>
            <?php
        }
    } else {
        // Nếu là term cha
        ?>
        <li id="brcr_2">
            <a href="<?php echo esc_url(get_term_link($term)); ?>">
                <span><?php echo esc_html($term->name); ?><i class="fa fa-lg fa-angle-right"></i></span>
            </a>
        </li>
        <?php
    }
} else {
    echo '<li><span>Không có chuyên mục nào.</span></li>';
}
?>

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
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $term = get_queried_object();
                            $args = array(
                                'post_type' => 'center-department',
                                'posts_per_page' => 5,
                                'paged' => $paged,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'khoatrungtam',
                                        'field' => 'slug',
                                        'terms' => $term->slug,
                                        'include_children' => false,
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

                            wp_reset_postdata();
                            ?>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <div class="pagination">
                                    <?php
                                    echo paginate_links();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
      <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left">
    <div class="clearfix metismenu custom-metis">
        <aside class="sidebar">
            <nav class="sidebar-nav">
                <ul id="menu_65">
                    <li class="active">
                        <a title="Khoa - Trung tâm" href="/vi/khoa-trung-tam/">Khoa - Trung tâm</a>
                        <span class="fa arrow expand" style="margin-top: -36px;"></span>
                        <ul class="collapse in" aria-expanded='false'>
    <?php
    $terms = get_terms([
        'taxonomy' => 'khoatrungtam',
        'hide_empty' => false,
        'parent' => 0 
    ]);

    if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            $term_link = get_term_link($term);
            $child_terms = get_terms([
                'taxonomy' => 'khoatrungtam',
                'hide_empty' => false,
                'parent' => $term->term_id
            ]);

            $check_args = [
                'post_type' => 'center-department',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'ASC',
                'tax_query' => [
                    [
                        'taxonomy' => 'khoatrungtam',
                        'field' => 'term_id',
                        'terms' => $term->term_id,
                        'include_children' => false,
                    ],
                ],
            ];
            $query = new WP_Query($check_args);
            $has_posts = $query->have_posts();
            $li_class = 'custom-metis-sub-item';
            ?>
            <li class="<?php echo esc_attr($li_class); ?>">
                <a id="height-a" title="<?php echo esc_attr($term->name); ?>" href="<?php echo esc_url($term_link); ?>" class="sf-with-ul">
                            <?php 
                    if ($term->name === 'Trung tâm Đào tạo thực hành Điện – Điện tử') {
                        echo 'TTĐTTH Điện – Điện tử';
                    } else {
                        echo esc_html($term->name);
                    }
                    ?>
                </a>
                <?php if (!empty($child_terms) || $has_posts) { ?>
                    <span id="span-id" class="fa arrow expand" style="margin-top: -36px;"></span>
                    <ul class="collapse">
                        <?php
                        while ($query->have_posts()) {
                            $query->the_post(); ?>
                            <li class="custom-metis-sub-item">
                                <a id="height-a" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="sf-with-ul">
                                    <?php the_title(); ?>
                                </a>
                            </li>
                        <?php }
                        wp_reset_postdata(); ?>

                        <?php foreach ($child_terms as $child) {
                            $child_link = get_term_link($child); ?>
                            <li class="custom-metis-sub-item">
                                <a id="height-a" title="Nhóm Chuyên môn" href="<?php echo esc_url($child_link); ?>" class="sf-with-ul">
                                    Nhóm Chuyên môn
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <?php
        }
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
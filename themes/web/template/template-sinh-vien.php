<?php
/*
Template Name: Sinh viên
*/
?>
<?php get_header("v2") ?>
<div class="section-body">
    <div>
        <section>
            <div class="container sinh-vien" id="body">
                <nav class="third-nav wraper">
                    <div class="row">
                        <div class="bg">
                            <div class="clearfix">
                                <div class="col-xs-24 col-sm-18 col-md-18">
                                    <div class="breadcrumbs-wrap">
                                        <div class="display">
                                            <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);">
                                                <em class="fa fa-lg fa-angle-right"></em>
                                            </a>
                                            <ul class="breadcrumbs list-none">
                                                <li id="brcr_0">
                                                    <a href="/index.php">
                                                        <span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span>
                                                    </a>
                                                </li>
                                                <li id="brcr_1">
                                                    <a href="<?php the_permalink(91) ?>">
                                                        <span>Sinh viên<i class="fa fa-lg fa-angle-right"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="headerSearch hidden col-xs-24 col-sm-6 col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" maxlength="60" placeholder="Tìm kiếm...">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info" data-url="/vi/seek/?q=" data-minlength="3" data-click="y">
                                                <em class="fa fa-search fa-lg"></em>
                                            </button>
                                        </span>
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
                            $term = get_queried_object();

                            $args = [
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'tuyensinh',
                                        'field' => 'slug',
                                        'terms' => $term->slug,
                                    ],
                                ],
                            ];

                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                echo '<ul>';
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <?php the_post_thumbnail('thumbnail', ['class' => 'img-thumbnail pull-left imghome']); ?>
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
                                echo '<p class="alert alert-info">Không có bài viết nào trong chuyên mục này.</p>';
                            }

                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left">
                        <div class="clearfix metismenu custom-metis">
                            <aside class="sidebar">
                                <nav class="sidebar-nav">
                                    <ul id="menu_65">
                                        <li class="active">
                                            <ul class="collapse in">
                                            <?php
                                                    $terms = get_terms([
                                                        'taxonomy' => 'sinhvien',
                                                        'hide_empty' => false 
                                                    ]);

                                                    if (!empty($terms) && !is_wp_error($terms)) {
                                                        foreach ($terms as $term) {
                                                            $check_args = [
                                                                'post_type' => 'post',
                                                                'posts_per_page' => 1,
                                                                'tax_query' => [
                                                                    [
                                                                        'taxonomy' => 'sinhvien',
                                                                        'field' => 'term_id',
                                                                        'terms' => $term->term_id,
                                                                    ],
                                                                ],
                                                            ];
                                                            $query = new WP_Query($check_args);

                                                            if (!$query->have_posts()) {
                                                                $term_link = get_term_link($term);
                                                                ?>
                                                                <li class="custom-metis-sub-item no-post">
                                                                    <a id="height-a" title="<?php echo esc_attr($term->name); ?>" href="<?php echo esc_url($term_link); ?>" class="sf-with-ul">
                                                                        <?php echo esc_html($term->name); ?>
                                                                    </a>
                                                                </li>
                                                                <?php
                                                            }

                                                            wp_reset_postdata();
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
            </div>
        </section>
    </div>
</div>
<?php get_footer('footer') ?>
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

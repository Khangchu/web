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
                                                <li id="brcr_1"><a href="<?php the_permalink(93); ?>"><span>Tin Tức<i class="fa fa-lg fa-angle-right"></i></span></a></li>
                                                <li id="brcr_2">
                                                    <?php
                                                    $post_id = get_the_ID();
                                                    $terms = get_the_terms($post_id, 'tintuc');
                                                    
                                                    if (!empty($terms) && !is_wp_error($terms)) {
                                                        foreach ($terms as $term) {
                                                            $term_link = get_term_link($term);
                                                            ?>
                                                            <a href="<?php echo esc_url($term_link); ?>"><span><?php echo $term->name; ?><i class="fa fa-lg fa-angle-right"></i></span></a>
                                                            <?php
                                                        }
                                                    } else {
                                                        echo 'Bài viết này không có tag nào trong taxonomy này.';
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
                            // Lấy giá trị của trang hiện tại
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                            // Thêm tham số phân trang vào truy vấn
                            $args = array(
                                'post_type' => 'tin',
                                'posts_per_page' => 5,
                                'paged' => $paged,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'tintuc',
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

                            wp_reset_postdata();
                            ?>

                        </div>
                        <hr>
                        <h4>Các tin khác</h4>
                        <ul class="related list-items">
                            <?php
                            // Thêm truy vấn cho các bài viết khác ngoài bài viết hiện tại
                            $args = array(
                                'post_type' => 'tin',
                                'posts_per_page' => 5,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'tintuc',
                                        'field'    => 'term_id',
                                        'terms'    => array($term->term_id),
                                        'operator' => 'NOT IN', 
                                    ),
                                ),
                            );

                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>
                                    <li>
                                        <em class="fa fa-angle-right">&nbsp;</em>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        <em>(<?php echo get_the_date('d/m/Y'); ?>)</em>
                                    </li>
                                    <?php
                                }
                            } else {
                                echo '<li>Không có bài viết nào trong chuyên mục khác.</li>';
                            }
                            wp_reset_postdata();
                            ?>
                        </ul>

                        <div class="clearfix"></div>
                        <div class="text-center">
                            <div class="pagination">
                                <?php
                                echo paginate_links();
                                ?>
                            </div>
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
                                                $terms = get_terms('tintuc');
                                                
                                                if (!empty($terms) && !is_wp_error($terms)) {
                                                    foreach ($terms as $term) {
                                                        $term_link = get_term_link($term);
                                                        ?>
                                                        <li class="custom-metis-sub-item active_sub ">
                                                            <a id="height-a" title="<?php echo $term->name; ?>" href="<?php echo esc_url($term_link); ?>" class="sf-with-ul"><?php echo $term->name; ?></a>
                                                        </li>
                                                        <?php
                                                    }
                                                } else {
                                                    echo 'Bài viết này không có tag nào trong taxonomy này.';
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

<?php
/*
Template Name: Tìm kiếm cán bộ
*/
get_header("v2");
?>
<div class="section-body">
    <div>
        <section>
            <div class="container suborgans" id="body">
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
                                                    <a href="<?php the_permalink(1026) ?>">
                                                        <span>Danh sách cán bộ<i class="fa fa-lg fa-angle-right"></i></span>
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
                <div class="row"></div>
                <div class="row wraper">
                    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
                        <h2>Kết quả tìm kiếm</h2>
                        <?php
                         $paged = (isset($_GET['trang']) && is_numeric($_GET['trang'])) ? (int) $_GET['trang'] : 1;
                            $q = isset($_GET['q']) ? sanitize_text_field($_GET['q']) : '';
                            $p = isset($_GET['p']) ? sanitize_text_field($_GET['p']) : '';
                            $oid = isset($_GET['oid']) ? sanitize_text_field($_GET['oid']) : 'any';

                            $args = [
                                'post_type' => 'teamofofficials',
                                'posts_per_page' => 12,
                                'meta_query' => [],
                                'tax_query' => [],
                                'paged' => $paged,
                            ];

                            if (!empty($q)) {
                                $args['meta_query'][] = [
                                    'key' => 'họ_va_ten',
                                    'value' => $q,
                                    'compare' => 'LIKE',
                                ];
                            }

                            if (!empty($p)) {
                                $args['meta_query'][] = [
                                    'key' => 'chức_vụ',
                                    'value' => $p,
                                    'compare' => 'LIKE',
                                ];
                            }

                            if ($oid != 'any') {
                                $args['tax_query'][] = [
                                    'taxonomy' => 'doingucanbo',
                                    'field' => 'term_id',
                                    'terms' => $oid,
                                ];
                            }
                            $query = new WP_Query($args);
                            ?>
                             <div class="row">
                    <?php
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $avatar = get_field('anh_giang_vien');
                            $position = get_field('chức_vụ');
                            $name = get_field('họ_va_ten');
                            $email = get_field('dịa_chỉ_email');
                            ?>
                            <div class="col-sm-8 col-md-6 height-col" style="height: 352.94px;">
                                <div class="thumbnail" style="height: 334.943px;">
                                    <div style="height: 180px">
                                        <a href="<?php the_permalink() ?>" title="<?php echo esc_html($name); ?>">
                                            <img class="imgthumbnail" src="<?php echo esc_url($avatar['url']) ?>" style="max-height: 180px" alt="<?php echo esc_html($name); ?>">
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h3><a href="<?php the_permalink() ?>" title="<?php echo esc_html($name); ?>"><?php echo esc_html($name); ?></a></h3>
                                        <p style="word-wrap: break-word">
                                            <?php echo esc_html($position); ?>
                                            <?php if ($email): ?>
                                                <br><?php echo esc_html($email); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-info">Không tìm thấy nội dung nào theo yêu cầu!</div>
                        <?php
                    }
                    ?>
                </div>
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
                       <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tìm kiếm
                            </div>
                            <div class="panel-body">
                                <form action="<?php echo get_permalink(get_page_by_path('tim-kiem-can-bo')); ?>" method="get" role="form">
                                <div class="form-group">
                                <label>Họ tên:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" value="" name="q" class="form-control" placeholder="Họ tên">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Chức vụ:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                                    <input type="text" value="" name="p" class="form-control" placeholder="Chức vụ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Thuộc đơn vị:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <select name="oid" class="form-control">
                                         <option value="any">-- Tất cả --</option>
                                         <?php
                                            $terms1 = get_terms([
                                                'taxonomy' => 'doingucanbo',
                                                'hide_empty' => false,
                                                'exclude' => [78],
                                            ]);
                                            if (!empty($terms1) && !is_wp_error($terms1)) {
                                                ?>
                                                <?php
                                                foreach ($terms1 as $term) {
                                                    ?>
                                                    <option value="<?php echo esc_attr($term->term_id); ?>"><?php echo esc_html($term->name); ?></option>
                                                  <?php
                                              }
                                              ?>
                                          <?php
                                          }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" value="Tìm kiếm" class="btn btn-primary">
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </section>
    </div>
</div>

<?php get_footer("footer"); ?>

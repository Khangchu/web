<?php
/*
Template Name: Sơ đồ trang
*/
get_header("v2");
?>
<div class="section-body">
    <div>
        <section>
            <div class="container feeds" id="body">
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
                                                    <a href="<?php the_permalink()?>">
                                                        <span>RSS-feeds<i class="fa fa-lg fa-angle-right"></i></span>
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
                        <div class="tree well">
                            <ul>
                                <li><span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Giới thiệu" href="<?php the_permalink(28)?>"><strong> Giới thiệu</strong></a></span></li>
                                <li>
                                    <span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Tin Tức" href="<?php the_permalink(93)?>"><strong> Tin Tức</strong></a></span>
                                  <ul>
                                    <?php
                                    $parent_terms_tintuc = get_terms([
                                        'taxonomy' => 'tintuc',
                                        'hide_empty' => false,
                                        'parent' => 0
                                    ]);

                                    if (!empty($parent_terms_tintuc) && !is_wp_error($parent_terms_tintuc)) {
                                        foreach ($parent_terms_tintuc as $parent) {
                                            $parent_link = get_term_link($parent);
                                            ?>
                                            <li>
                                                <span>
                                                    <i class="fa fa-rss text-warning"></i>
                                                    <a rel="nofollow" title="<?php echo esc_attr($parent->name); ?>" href="<?php echo esc_url($parent_link); ?>">
                                                        <?php echo esc_html($parent->name); ?>
                                                    </a>
                                                </span>

                                                <?php
                                                // Lấy các term con
                                                $child_terms = get_terms([
                                                    'taxonomy' => 'tintuc',
                                                    'hide_empty' => false,
                                                    'parent' => $parent->term_id
                                                ]);

                                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                                    echo '<ul>';
                                                    foreach ($child_terms as $child) {
                                                        $child_link = get_term_link($child);
                                                        ?>
                                                        <li>
                                                            <a rel="nofollow" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>">
                                                                <?php echo esc_html($child->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </ul>
                                </li>
                                  <li>
                                    <span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Tin Tức" href="<?php the_permalink(135)?>"><strong>Đào tạo</strong></a></span>
                                  <ul>
                                    <?php
                                    $parent_terms_daotao = get_terms([
                                        'taxonomy' => 'daotao',
                                        'hide_empty' => false,
                                        'parent' => 0
                                    ]);

                                    if (!empty($parent_terms_daotao) && !is_wp_error($parent_terms_daotao)) {
                                        foreach ($parent_terms_daotao as $parent) {
                                            $parent_link = get_term_link($parent);
                                            ?>
                                            <li>
                                                <span>
                                                    <i class="fa fa-rss text-warning"></i>
                                                    <a rel="nofollow" title="<?php echo esc_attr($parent->name); ?>" href="<?php echo esc_url($parent_link); ?>">
                                                        <?php echo esc_html($parent->name); ?>
                                                    </a>
                                                </span>

                                                <?php
                                                // Lấy các term con
                                                $child_terms = get_terms([
                                                    'taxonomy' => 'daotao',
                                                    'hide_empty' => false,
                                                    'parent' => $parent->term_id
                                                ]);

                                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                                    echo '<ul>';
                                                    foreach ($child_terms as $child) {
                                                        $child_link = get_term_link($child);
                                                        ?>
                                                        <li>
                                                            <i class="fa fa-rss text-warning"></i>
                                                            <a rel="nofollow" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>">
                                                                <?php echo esc_html($child->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </ul>
                                </li>
                                 <li>
                                    <span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Tin Tức" href="<?php the_permalink(236)?>"><strong>Tuyển sinh</strong></a></span>
                                  <ul>
                                    <?php
                                    $parent_terms_tuyensinh = get_terms([
                                        'taxonomy' => 'tuyensinh',
                                        'hide_empty' => false,
                                        'parent' => 0
                                    ]);

                                    if (!empty($parent_terms_tuyensinh) && !is_wp_error($parent_terms_tuyensinh)) {
                                        foreach ($parent_terms_tuyensinh as $parent) {
                                            $parent_link = get_term_link($parent);
                                            ?>
                                            <li>
                                                <span>
                                                    <i class="fa fa-rss text-warning"></i>
                                                    <a rel="nofollow" title="<?php echo esc_attr($parent->name); ?>" href="<?php echo esc_url($parent_link); ?>">
                                                        <?php echo esc_html($parent->name); ?>
                                                    </a>
                                                </span>

                                                <?php
                                                // Lấy các term con
                                                $child_terms = get_terms([
                                                    'taxonomy' => 'tuyensinh',
                                                    'hide_empty' => false,
                                                    'parent' => $parent->term_id
                                                ]);

                                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                                    echo '<ul>';
                                                    foreach ($child_terms as $child) {
                                                        $child_link = get_term_link($child);
                                                        ?>
                                                        <li>
                                                            <i class="fa fa-rss text-warning"></i>
                                                            <a rel="nofollow" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>">
                                                                <?php echo esc_html($child->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </ul>
                                </li>
                                  <li>
                                    <span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Tin Tức" href="<?php the_permalink(259)?>"><strong>Nghiên cứu</strong></a></span>
                                  <ul>
                                    <?php
                                    $parent_terms_nghiencuu = get_terms([
                                        'taxonomy' => 'nghiencuu',
                                        'hide_empty' => false,
                                        'parent' => 0
                                    ]);

                                    if (!empty($parent_terms_nghiencuu) && !is_wp_error($parent_terms_nghiencuu)) {
                                        foreach ($parent_terms_nghiencuu as $parent) {
                                            $parent_link = get_term_link($parent);
                                            ?>
                                            <li>
                                                <span>
                                                    <i class="fa fa-rss text-warning"></i>
                                                    <a rel="nofollow" title="<?php echo esc_attr($parent->name); ?>" href="<?php echo esc_url($parent_link); ?>">
                                                        <?php echo esc_html($parent->name); ?>
                                                    </a>
                                                </span>

                                                <?php
                                                // Lấy các term con
                                                $child_terms = get_terms([
                                                    'taxonomy' => 'nghiencuu',
                                                    'hide_empty' => false,
                                                    'parent' => $parent->term_id
                                                ]);

                                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                                    echo '<ul>';
                                                    foreach ($child_terms as $child) {
                                                        $child_link = get_term_link($child);
                                                        ?>
                                                        <li>
                                                            <i class="fa fa-rss text-warning"></i>
                                                            <a rel="nofollow" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>">
                                                                <?php echo esc_html($child->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </ul>
                                </li>
                                <li>
                                    <span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Tin Tức" href="<?php the_permalink(314)?>"><strong>Khoa-Trung tâm</strong></a></span>
                                  <ul>
                                    <?php
                                    $parent_terms_khoatrungtam= get_terms([
                                        'taxonomy' => 'khoatrungtam',
                                        'hide_empty' => false,
                                        'parent' => 0
                                    ]);

                                    if (!empty($parent_terms_khoatrungtam) && !is_wp_error($parent_terms_khoatrungtam)) {
                                        foreach ($parent_terms_khoatrungtam as $parent) {
                                            $parent_link = get_term_link($parent);
                                            ?>
                                            <li>
                                                <span>
                                                    <i class="fa fa-rss text-warning"></i>
                                                    <a rel="nofollow" title="<?php echo esc_attr($parent->name); ?>" href="<?php echo esc_url($parent_link); ?>">
                                                        <?php echo esc_html($parent->name); ?>
                                                    </a>
                                                </span>

                                                <?php
                                                // Lấy các term con
                                                $child_terms = get_terms([
                                                    'taxonomy' => 'khoatrungtam',
                                                    'hide_empty' => false,
                                                    'parent' => $parent->term_id
                                                ]);

                                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                                    echo '<ul>';
                                                    foreach ($child_terms as $child) {
                                                        $child_link = get_term_link($child);
                                                        ?>
                                                        <li>
                                                            <i class="fa fa-rss text-warning"></i>
                                                            <a rel="nofollow" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>">
                                                                <?php echo esc_html($child->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </ul>
                                </li>
                                  <li>
                                    <span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Tin Tức" href="<?php the_permalink(417)?>"><strong>Hợp tác và hỗ trợ</strong></a></span>
                                  <ul>
                                    <?php
                                    $parent_terms_hoptacvahotro = get_terms([
                                        'taxonomy' => 'hoptacvahotro',
                                        'hide_empty' => false,
                                        'parent' => 0
                                    ]);

                                    if (!empty($parent_terms_hoptacvahotro) && !is_wp_error($parent_terms_hoptacvahotro)) {
                                        foreach ($parent_terms_hoptacvahotro as $parent) {
                                            $parent_link = get_term_link($parent);
                                            ?>
                                            <li>
                                                <span>
                                                    <i class="fa fa-rss text-warning"></i>
                                                    <a rel="nofollow" title="<?php echo esc_attr($parent->name); ?>" href="<?php echo esc_url($parent_link); ?>">
                                                        <?php echo esc_html($parent->name); ?>
                                                    </a>
                                                </span>

                                                <?php
                                                // Lấy các term con
                                                $child_terms = get_terms([
                                                    'taxonomy' => 'hoptacvahotro',
                                                    'hide_empty' => false,
                                                    'parent' => $parent->term_id
                                                ]);

                                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                                    echo '<ul>';
                                                    foreach ($child_terms as $child) {
                                                        $child_link = get_term_link($child);
                                                        ?>
                                                        <li>
                                                            <i class="fa fa-rss text-warning"></i>
                                                            <a rel="nofollow" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>">
                                                                <?php echo esc_html($child->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </ul>
                                </li>
                                  <li>
                                    <span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Tin Tức" href="<?php the_permalink(439)?>"><strong>Sinh viên</strong></a></span>
                                  <ul>
                                    <?php
                                    $parent_terms_sinhvien = get_terms([
                                        'taxonomy' => 'sinhvien',
                                        'hide_empty' => false,
                                        'parent' => 0
                                    ]);

                                    if (!empty($parent_terms_sinhvien) && !is_wp_error($parent_terms_sinhvien)) {
                                        foreach ($parent_terms_sinhvien as $parent) {
                                            $parent_link = get_term_link($parent);
                                            ?>
                                            <li>
                                                <span>
                                                    <i class="fa fa-rss text-warning"></i>
                                                    <a rel="nofollow" title="<?php echo esc_attr($parent->name); ?>" href="<?php echo esc_url($parent_link); ?>">
                                                        <?php echo esc_html($parent->name); ?>
                                                    </a>
                                                </span>

                                                <?php
                                                // Lấy các term con
                                                $child_terms = get_terms([
                                                    'taxonomy' => 'sinhvien',
                                                    'hide_empty' => false,
                                                    'parent' => $parent->term_id
                                                ]);

                                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                                    echo '<ul>';
                                                    foreach ($child_terms as $child) {
                                                        $child_link = get_term_link($child);
                                                        ?>
                                                        <li>
                                                            <i class="fa fa-rss text-warning"></i>
                                                            <a rel="nofollow" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>">
                                                                <?php echo esc_html($child->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </ul>
                                </li>
                                 <li>
                                    <span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Tin Tức" href="<?php the_permalink(460)?>"><strong>Cựu Sinh viên</strong></a></span>
                                  <ul>
                                    <?php
                                    $parent_terms_cuusinhvien = get_terms([
                                        'taxonomy' => 'cuusinhvien',
                                        'hide_empty' => false,
                                        'parent' => 0
                                    ]);

                                    if (!empty($parent_terms_cuusinhvien) && !is_wp_error($parent_terms_cuusinhvien)) {
                                        foreach ($parent_terms_cuusinhvien as $parent) {
                                            $parent_link = get_term_link($parent);
                                            ?>
                                            <li>
                                                <span>
                                                    <i class="fa fa-rss text-warning"></i>
                                                    <a rel="nofollow" title="<?php echo esc_attr($parent->name); ?>" href="<?php echo esc_url($parent_link); ?>">
                                                        <?php echo esc_html($parent->name); ?>
                                                    </a>
                                                </span>

                                                <?php
                                                // Lấy các term con
                                                $child_terms = get_terms([
                                                    'taxonomy' => 'cuusinhvien',
                                                    'hide_empty' => false,
                                                    'parent' => $parent->term_id
                                                ]);

                                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                                    echo '<ul>';
                                                    foreach ($child_terms as $child) {
                                                        $child_link = get_term_link($child);
                                                        ?>
                                                        <li>
                                                            <i class="fa fa-rss text-warning"></i>
                                                            <a rel="nofollow" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>">
                                                                <?php echo esc_html($child->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </ul>
                                </li>
                                         <li>
                                    <span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Tin Tức" href="<?php the_permalink(562)?>"><strong>Lịch công tác</strong></a></span>
                                  <ul>
                                    <?php
                                    $parent_terms_lichcongtac = get_terms([
                                        'taxonomy' => 'lichcongtac',
                                        'hide_empty' => false,
                                        'parent' => 0
                                    ]);

                                    if (!empty($parent_terms_lichcongtac) && !is_wp_error($parent_terms_lichcongtac)) {
                                        foreach ($parent_terms_lichcongtac as $parent) {
                                            $parent_link = get_term_link($parent);
                                            ?>
                                            <li>
                                                <span>
                                                    <i class="fa fa-rss text-warning"></i>
                                                    <a rel="nofollow" title="<?php echo esc_attr($parent->name); ?>" href="<?php echo esc_url($parent_link); ?>">
                                                        <?php echo esc_html($parent->name); ?>
                                                    </a>
                                                </span>

                                                <?php
                                                // Lấy các term con
                                                $child_terms = get_terms([
                                                    'taxonomy' => 'lichcongtac',
                                                    'hide_empty' => false,
                                                    'parent' => $parent->term_id
                                                ]);

                                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                                    echo '<ul>';
                                                    foreach ($child_terms as $child) {
                                                        $child_link = get_term_link($child);
                                                        ?>
                                                        <li>
                                                            <i class="fa fa-rss text-warning"></i>
                                                            <a rel="nofollow" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>">
                                                                <?php echo esc_html($child->name); ?>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </ul>
                                </li>
                                <li><span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Giới thiệu" href="<?php the_permalink(769)?>"><strong> Video</strong></a></span></li>
                                <li><span><i class="fa fa-rss text-warning"></i> <a rel="nofollow" title="Giới thiệu" href="<?php the_permalink(781)?>"><strong>Thư viện ảnh</strong></a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </section>
    </div>
</div>
<?php get_footer("footer"); ?>
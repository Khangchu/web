<?php
/*
Template Name: Khoa-Trung tâm
*/
?>
<?php
$term = get_term_by('id', 43, 'khoatrungtam');
 wp_redirect(get_term_link($term));
 exit;
?>
<?php get_header("v2")?>
<div class="section-banner">
    </div>
    <div class="section-banner wraper">
    </div>
<div class="section-body">
<div>
    <section>
        <div class="container khoa-trung-tam" id="body">
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
                                                    <a href="<?php the_permalink() ?>">
                                                        <span>Khoa-Trung tâm<i class="fa fa-lg fa-angle-right"></i></span>
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
        <div class="red-menu">
            <div class="bg-content bg-content-daotao">
                <div class="bg-wraper wraper">
                     <?php
                    $term = get_term_by('id', 43, 'khoatrungtam');
                    $child_terms = get_term_by( 'id', 50, 'khoatrungtam' );
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div>
                        <div class="ds-grid pd-bottom">
                            <div class="imgae-flex">
                            <?php if( get_field('khoa_diện') ) { ?> 
                            <img src="<?php  echo get_field('khoa_diện')['url']  ?>">
                            <?php } ?>
                            </div>
                            <div class="content_flex content-flex-white">
                                <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                                <div class="js-content">
                            <span class="hidden-h2-mobile">
                                <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                            </span>
                            <div style="margin-top: 20px;">
                                <div style="text-align: justify;"><a href="<?php the_permalink(300)?>">Giới thiệu chung</a><br>
                                <a href="<?php the_permalink(303)?>">Ban Chủ nhiệm Khoa</a><br>
                                <a href="<?php the_permalink(305)?>">Giám đốc Chương trình đào tạo</a>
                                <br>
                                <a href="<?php  echo get_term_link($child_terms);?>">Nhóm Chuyên môn</a><br>
                                &nbsp;</div>
                            </div>
                            <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-wraper wraper">
                      <?php
                    $term = get_term_by('id', 44, 'khoatrungtam');
                    $child_terms = get_term_by( 'id', 51, 'khoatrungtam' );
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div class="bg-content-wraper">
                        <div>
                            <div class="ds-grid ds-flex-mobile pd-bottom">
                                <div class="content_flex content-mobile">
                                    <div class="js-animate js-scroll-left2right animate__animated animate__slow animate__fadeOutRight js-animate-bg"></div>
                                    <div class="js-content">
                                        <span class="hidden-h2-mobile">
                                        <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                                        </span>
                                        <div style="margin-top: 20px;">
                                            <p style="text-align: justify;"><a href="<?php the_permalink(326)?>">Giới thiệu chung</a><br>
                                            <a href="<?php the_permalink(328)?>">Ban Chủ nhiệm Khoa</a><br>
                                            <a href="<?php the_permalink(330)?>">Giám đốc Chương trình đào tạo</a><br>
                                            <a href="<?php  echo get_term_link($child_terms);?>">Nhóm Chuyên môn</a><br>
                                            &nbsp;</p>
                                        </div>
                                    <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                                    </div>
                                </div>
                                 <div class="imgae-flex">
                            <?php if( get_field('khoa_tự_dộng_hoa') ) { ?> 
                            <img src="<?php  echo get_field('khoa_tự_dộng_hoa')['url']  ?>">
                            <?php } ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-wraper wraper">
                         <?php
                    $term = get_term_by('id', 45, 'khoatrungtam' );
                       $child_terms = get_term_by( 'id', 52, 'khoatrungtam');
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div>
                        <div class="ds-grid pd-bottom">
                            <div class="imgae-flex">
                            <?php if( get_field('khoa_kỹ_thuật_truyền_thong') ) { ?> 
                            <img src="<?php  echo get_field('khoa_kỹ_thuật_truyền_thong')['url']  ?>">
                            <?php } ?>
                            </div>
                            <div class="content_flex content-flex-white">
                                <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                                <div class="js-content">
                            <span class="hidden-h2-mobile">
                                <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                            </span>
                            <div style="margin-top: 20px;"><p style="text-align: justify;"><a href="<?php the_permalink(334)?>">Giới thiệu chung</a><br>
                                            <a href="<?php the_permalink(336)?>">Ban Chủ nhiệm Khoa</a><br>
                                            <a href="<?php the_permalink(338)?>">Giám đốc Chương trình đào tạo</a><br>
                                            <a href="<?php  echo get_term_link($child_terms);?>">Nhóm Chuyên môn</a><br>
                                            &nbsp;</p></div>
                            <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-wraper wraper">
                     <?php
                    $term = get_term_by('id', 46, 'khoatrungtam');
                      $child_terms = get_term_by( 'id', 53, 'khoatrungtam');
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div class="bg-content-wraper">
                        <div>
                            <div class="ds-grid ds-flex-mobile pd-bottom">
                                <div class="content_flex content-mobile">
                                    <div class="js-animate js-scroll-left2right animate__animated animate__slow animate__fadeOutRight js-animate-bg"></div>
                                    <div class="js-content">
                                        <span class="hidden-h2-mobile">
                                        <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                                        </span>
                                        <div style="margin-top: 20px;"><p style="text-align: justify;"><a href="<?php the_permalink(342)?>">Giới thiệu chung</a><br>
                                            <a href="<?php the_permalink(344)?>">Ban Chủ nhiệm Khoa</a><br>
                                            <a href="<?php the_permalink(346)?>">Giám đốc Chương trình đào tạo</a><br>
                                            <a href="<?php  echo get_term_link($child_terms);?>">Nhóm Chuyên môn</a><br>
                                            &nbsp;</p></div>
                                    <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                                    </div>
                                </div>
                                 <div class="imgae-flex">
                            <?php if( get_field('khoa_diện_tử') ) { ?> 
                            <img src="<?php  echo get_field('khoa_diện_tử')['url']  ?>">
                            <?php } ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-wraper wraper">
                            <?php
                    $term = get_term_by('id', 47, 'khoatrungtam');
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div>
                        <div class="ds-grid pd-bottom">
                            <div class="imgae-flex">
                            <?php if( get_field('trung_tam_dao_tạo_thực_hanh_diện_–_diện_tử') ) { ?> 
                            <img src="<?php  echo get_field('trung_tam_dao_tạo_thực_hanh_diện_–_diện_tử')['url']  ?>">
                            <?php } ?>
                            </div>
                            <div class="content_flex content-flex-white">
                                <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                                <div class="js-content">
                            <span class="hidden-h2-mobile">
                                <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                            </span>
                            <div style="margin-top: 20px;"><p style="text-align: justify;"><a href="<?php the_permalink(350)?>">Giới thiệu chung</a><br>
                                            <a href="<?php the_permalink(352)?>">Ban giám đốc</a><br>
                                            <a href="<?php the_permalink(354)?>">Các PTN </a><br>
                                            &nbsp;</p></div>
                            <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="bg-wraper wraper">
                     <?php
                    $term = get_term_by('id', 48, 'khoatrungtam');
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div class="bg-content-wraper">
                        <div>
                            <div class="ds-grid ds-flex-mobile pd-bottom">
                                <div class="content_flex content-mobile">
                                    <div class="js-animate js-scroll-left2right animate__animated animate__slow animate__fadeOutRight js-animate-bg"></div>
                                    <div class="js-content">
                                        <span class="hidden-h2-mobile">
                                        <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                                        </span>
                                        <div style="margin-top: 20px;"><p style="text-align: justify;"><a href="<?php the_permalink(358)?>">Giới thiệu chung</a><br>
                                            <a href="<?php the_permalink(360)?>">Ban Giám đốc Trung tâm</a><br>
                                            <a href="<?php the_permalink(362)?>">Nhóm nghiên cứu</a><br>
                                            &nbsp;</p></div>
                                    <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                                    </div>
                                </div>
                                 <div class="imgae-flex">
                            <?php if( get_field('trung_tam_mica') ) { ?> 
                            <img src="<?php  echo get_field('trung_tam_mica')['url']  ?>">
                            <?php } ?>
                            </div>
                            </div>
                        </div>
                    </div>
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
                        <ul class="collapse in" aria-expanded='false'style="height: 0px;">
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

            <div class="row">
                <div class="row"></div><div class="row">
                <div class="row"></div> </div>
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
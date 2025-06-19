<?php
/*
Template Name: Sinh viên
*/
?>
<?php
$term = get_term_by('id', 62, 'sinhvien');
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
            <div class="row"></div>
            <div class="row wraper">
    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
        <div class="red-menu">
            <div class="bg-content bg-content-daotao">
                <div class="bg-wraper wraper">
                     <?php
                    $term = get_term_by('id', 62, 'sinhvien');
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div>
                        <div class="ds-grid pd-bottom">
                            <div class="imgae-flex">
                            <?php if( get_field('quy_dịnh_va_biểu_mẫu') ) { ?> 
                            <img src="<?php  echo get_field('quy_dịnh_va_biểu_mẫu')['url']  ?>">
                            <?php } ?>
                            </div>
                            <div class="content_flex content-flex-white">
                                <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                                <div class="js-content">
                            <span class="hidden-h2-mobile">
                                <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                            </span>
                            <div style="margin-top: 20px;"></div>
                            <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-wraper wraper">
                      <?php
                    $term = get_term_by('id', 60, 'sinhvien');
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
                                        </div>
                                    <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                                    </div>
                                </div>
                                 <div class="imgae-flex">
                            <?php if( get_field('cố_vấn_học_tập') ) { ?> 
                            <img src="<?php  echo get_field('cố_vấn_học_tập')['url']  ?>">
                            <?php } ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-wraper wraper">
                         <?php
                    $term = get_term_by('id', 59, 'sinhvien');
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div>
                        <div class="ds-grid pd-bottom">
                            <div class="imgae-flex">
                            <?php if( get_field('co_hội_học_bổng_&_việc_lam') ) { ?> 
                            <img src="<?php  echo get_field('co_hội_học_bổng_&_việc_lam')['url']  ?>">
                            <?php } ?>
                            </div>
                            <div class="content_flex content-flex-white">
                                <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                                <div class="js-content">
                            <span class="hidden-h2-mobile">
                                <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                            </span>
                            <div style="margin-top: 20px;"></div>
                            <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="bg-wraper wraper">
                      <?php
                    $term = get_term_by('id', 58, 'sinhvien');
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
                                        </div>
                                    <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                                    </div>
                                </div>
                                 <div class="imgae-flex">
                            <?php if( get_field('doan_thanh_nien_&_hội_sinh_vien_&_clb') ) { ?> 
                            <img src="<?php  echo get_field('doan_thanh_nien_&_hội_sinh_vien_&_clb')['url']  ?>">
                            <?php } ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="bg-wraper wraper">
                         <?php
                    $term = get_term_by('id', 61, 'sinhvien');
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div>
                        <div class="ds-grid pd-bottom">
                            <div class="imgae-flex">
                            <?php if( get_field('_thực_tập_doanh_nghiệp') ) { ?> 
                            <img src="<?php  echo get_field('_thực_tập_doanh_nghiệp')['url']  ?>">
                            <?php } ?>
                            </div>
                            <div class="content_flex content-flex-white">
                                <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                                <div class="js-content">
                            <span class="hidden-h2-mobile">
                                <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                            </span>
                            <div style="margin-top: 20px;"></div>
                            <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                   <div class="bg-wraper wraper">
                      <?php
                    $term = get_term_by('id', 63, 'sinhvien');
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
                                        </div>
                                    <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                                    </div>
                                </div>
                                 <div class="imgae-flex">
                            <?php if( get_field('sinh_vien_sang_tạo_&_khởi_nghiệp') ) { ?> 
                            <img src="<?php  echo get_field('sinh_vien_sang_tạo_&_khởi_nghiệp')['url']  ?>">
                            <?php } ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="bg-wraper wraper">
                         <?php
                    $term = get_term_by('id', 57, 'sinhvien');
                    ?>
                    <div class="content_flex hidden-desktop-h2">
                    <h2 class="text-center">
                    <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                    </h2>
                    </div>
                    <div>
                        <div class="ds-grid pd-bottom">
                            <div class="imgae-flex">
                            <?php if( get_field('cau_hỏi_thuờng_gặp') ) { ?> 
                            <img src="<?php  echo get_field('cau_hỏi_thuờng_gặp')['url']  ?>">
                            <?php } ?>
                            </div>
                            <div class="content_flex content-flex-white">
                                <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                                <div class="js-content">
                            <span class="hidden-h2-mobile">
                                <a title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>"><?php echo esc_html($term->name)?></a>
                            </span>
                            <div style="margin-top: 20px;"></div>
                            <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                        </div>
                            </div>
                        </div>
                    </div>
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
                                        </div>
                                    <div style="margin-top: 20px;"><a class="button-css" title="<?php echo esc_html($term->name)?>" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                                    </div>
                                </div>
                                 <div class="imgae-flex">
                            <?php if( get_field('cựu_sinh_vien') ) { ?> 
                            <img src="<?php  echo get_field('cựu_sinh_vien')['url']  ?>">
                            <?php } ?>
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
                        <a title="sinh viên" href="/vi/khoa-trung-tam/">sinh viên</a>
                        <span class="fa arrow expand" style="margin-top: -36px;"></span>
                        <ul class="collapse in" aria-expanded='false'style="height: 0px;">
    <?php
    $terms = get_terms([
        'taxonomy' => 'sinhvien',
        'hide_empty' => false,
        'parent' => 0 
    ]);

    if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            $term_link = get_term_link($term);
            $li_class = 'custom-metis-sub-item';
            ?>
            <li class="<?php echo esc_attr($li_class); ?>">
                <a id="height-a" title="<?php echo esc_attr($term->name); ?>" href="<?php echo esc_url($term_link); ?>" class="sf-with-ul">
                    <?php echo esc_html($term->name); ?>
                </a>
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
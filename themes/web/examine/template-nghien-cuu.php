<?php
/*
Template Name: Nghiên cứu
*/
?>
<?php
$term = get_term_by('id', 24, 'nghiencuu');
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
        <div class="container dao-tao" id="body">
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
                                                        <span>nghiên cứu<i class="fa fa-lg fa-angle-right"></i></span>
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
        <div class="bg-content bg-content-daotao">
            <div class="bg-wraper wraper">
                 <?php
                $term = get_term_by('id', 25, 'nghiencuu');
                ?>
                <div class="content_flex hidden-desktop-h2">
                <h2 class="text-center">
                <a title="Nghiên cứu & Đào tạo tinh hoa" href="<?php  echo get_term_link($term);?>">Nghiên cứu & Đào tạo tinh hoa</a>
                </h2>
                </div>
                <div>
                    <div class="ds-grid pd-bottom">
                        <div class="imgae-flex">
					    <?php if( get_field('nghien_cứu_&_dao_tạo_tinh_hoa') ) { ?> 
                        <img src="<?php  echo get_field('nghien_cứu_&_dao_tạo_tinh_hoa')['url']  ?>">
                        <?php } ?>
				        </div>
                        <div class="content_flex content-flex-white">
                            <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                            <div class="js-content">
                        <span class="hidden-h2-mobile">
                            <a title="Nghiên cứu &amp; Đào tạo tinh hoa" href="<?php  echo get_term_link($term);?>">Nghiên cứu &amp; Đào tạo tinh hoa</a>
                        </span>
                        <div style="margin-top: 20px;"></div>
                        <div style="margin-top: 20px;"><a class="button-css" title="Nghiên cứu &amp; Đào tạo tinh hoa" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-wraper wraper">
                  <?php
                $term = get_term_by('id', 26, 'nghiencuu');
                ?>
                <div class="content_flex hidden-desktop-h2">
                <h2 class="text-center">
                <a title="Phòng Thí nghiệm Nghiên cứu" href="<?php  echo get_term_link($term);?>">Phòng Thí nghiệm Nghiên cứu</a>
                </h2>
                </div>
                <div class="bg-content-wraper">
                    <div>
                        <div class="ds-grid ds-flex-mobile pd-bottom">
                            <div class="content_flex content-mobile">
                                <div class="js-animate js-scroll-left2right animate__animated animate__slow animate__fadeOutRight js-animate-bg"></div>
                                <div class="js-content">
                                    <span class="hidden-h2-mobile">
    							    <a title="Phòng Thí nghiệm Nghiên cứu" href="<?php  echo get_term_link($term);?>">Phòng Thí nghiệm Nghiên cứu</a>
    						        </span>
                                    <div style="margin-top: 20px;"><table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <td style="width:65%">- Giới thiệu<br>
                                                - DS Phòng thí nghiệm nghiên cứu</td>
                                                <td>
                                                <ul>
                                                </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="margin-top: 20px;"><a class="button-css" title="Phòng Thí nghiệm Nghiên cứu" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                                </div>
                            </div>
                             <div class="imgae-flex">
					    <?php if( get_field('phong_thi_nghiệm_nghien_cứu') ) { ?> 
                        <img src="<?php  echo get_field('phong_thi_nghiệm_nghien_cứu')['url']  ?>">
                        <?php } ?>
				        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-wraper wraper">
                     <?php
                $term = get_term_by('id', 40, 'nghiencuu');
                ?>
                <div class="content_flex hidden-desktop-h2">
                <h2 class="text-center">
                <a title="Đề tài – Dự án – Chuyển giao công nghệ" href="<?php  echo get_term_link($term);?>">Đề tài – Dự án – Chuyển giao công nghệ</a>
                </h2>
                </div>
                <div>
                    <div class="ds-grid pd-bottom">
                        <div class="imgae-flex">
					    <?php if( get_field('dề_tai_-_dự_an_-_chuyển_giao_cong_nghệ') ) { ?> 
                        <img src="<?php  echo get_field('dề_tai_-_dự_an_-_chuyển_giao_cong_nghệ')['url']  ?>">
                        <?php } ?>
				        </div>
                        <div class="content_flex content-flex-white">
                            <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                            <div class="js-content">
                        <span class="hidden-h2-mobile">
                            <a title="Đề tài – Dự án – Chuyển giao công nghệ" href="<?php  echo get_term_link($term);?>">Đề tài – Dự án – Chuyển giao công nghệ</a>
                        </span>
                        <div style="margin-top: 20px;"></div>
                        <div style="margin-top: 20px;"><a class="button-css" title="Đề tài – Dự án – Chuyển giao công nghệ" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-wraper wraper">
                 <?php
                $term = get_term_by('id', 41, 'nghiencuu');
                ?>
                <div class="content_flex hidden-desktop-h2">
                <h2 class="text-center">
                <a title="Công bố khoa học & Sáng chế" href="<?php  echo get_term_link($term);?>">Công bố khoa học & Sáng chế</a>
                </h2>
                </div>
                <div class="bg-content-wraper">
                    <div>
                        <div class="ds-grid ds-flex-mobile pd-bottom">
                            <div class="content_flex content-mobile">
                                <div class="js-animate js-scroll-left2right animate__animated animate__slow animate__fadeOutRight js-animate-bg"></div>
                                <div class="js-content">
                                    <span class="hidden-h2-mobile">
    							    <a title="Công bố khoa học & Sáng chế" href="<?php  echo get_term_link($term);?>">Công bố khoa học & Sáng chế</a>
    						        </span>
                                    <div style="margin-top: 20px;"></div>
                                <div style="margin-top: 20px;"><a class="button-css" title="Công bố khoa học & Sáng chế" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
                                </div>
                            </div>
                             <div class="imgae-flex">
					    <?php if( get_field('cong_bố_khoa_học_&_sang_chế') ) { ?> 
                        <img src="<?php  echo get_field('cong_bố_khoa_học_&_sang_chế')['url']  ?>">
                        <?php } ?>
				        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-wraper wraper">
                        <?php
                $term = get_term_by('id', 24, 'nghiencuu');
                ?>
                <div class="content_flex hidden-desktop-h2">
                <h2 class="text-center">
                <a title="Đổi mới sáng tạo" href="<?php  echo get_term_link($term);?>">Đổi mới sáng tạo</a>
                </h2>
                </div>
                <div>
                    <div class="ds-grid pd-bottom">
                        <div class="imgae-flex">
					    <?php if( get_field('dổi_mới_sang_tạo') ) { ?> 
                        <img src="<?php  echo get_field('dổi_mới_sang_tạo')['url']  ?>">
                        <?php } ?>
				        </div>
                        <div class="content_flex content-flex-white">
                            <div class="js-animate js-scroll-right2left animate__animated animate__slow animate__fadeOutLeft js-animate-bg"></div>
                            <div class="js-content">
                        <span class="hidden-h2-mobile">
                            <a title="Đổi mới sáng tạo" href="<?php  echo get_term_link($term);?>">Đổi mới sáng tạo</a>
                        </span>
                        <div style="margin-top: 20px;"></div>
                        <div style="margin-top: 20px;"><a class="button-css" title="Đổi mới sáng tạo" href="<?php  echo get_term_link($term);?>">Xem thêm</a></div>
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
                        <ul class="collapse in">
                            <?php
                            $terms = get_terms([
                                'taxonomy' => 'nghiencuu',
                                'hide_empty' => false,
                                'parent' => 0 ,
                            ]);
                            $terms = array_slice(array_reverse($terms), 0, 6);
                            if (!empty($terms) && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    $term_link = get_term_link($term);
                                    $child_terms = get_terms([
                                        'taxonomy' => 'nghiencuu',
                                        'hide_empty' => false,
                                        'parent' => $term->term_id
                                    ]);

                                    $li_class = 'custom-metis-sub-item';
                                    if (!empty($child_terms)) {
                                        $li_class .= ' active_sub';
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
                                                    $child_link = get_term_link($child); ?>
                                                    <li class="custom-metis-sub-item">
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
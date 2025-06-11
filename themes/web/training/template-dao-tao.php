<?php
/*
Template Name: Đào Tạo
*/
?>
<?php
 wp_redirect(get_permalink(153));
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
                                                        <span>Đào tạo<i class="fa fa-lg fa-angle-right"></i></span>
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
                    <div class="bg-content bg-content-tuyen-sinh">
                        <div class="bg-wraper">
                            <?php
                            $term = get_term_by('id', 16, 'daotao');
                                ?>
                                <div class="content_flex hidden-desktop-h2">
            <h2 class="text-center">
                <a title="Đào tạo đại học" href="<?php  echo get_term_link($term);?>">Đào tạo đại học</a>
            </h2>
        </div>
        <div class="wraper">
            <div class="ds-grid pd-bottom">
                <div class="imgae-flex img-hover-zoom">
                    <a title="Đào tạo đại học" href="<?php echo get_term_link($term);?>">
                               <?php if( get_field('dao_tạo_dại_học') ) { 
                        ?> 
            <img src="<?php  echo get_field('dao_tạo_dại_học')['url']  ?>">
            <?php } ?>
                    </a>
                </div>
                <div class="content_flex content-flex-white js-scroll-fadein animate__animated animate__fadeIn animate__slow">
                    <span class="hidden-h2-mobile">
                                        <a title="Đào tạo đại học" href="<?php  echo get_term_link($term);?>">Đào tạo đại học</a>
                    </span>
                   <div style="margin-top: 20px;"><p>Chương trình đào tạo trường Điện - Điện tử</p>
                        <ul>
                            <li>Chương trình Đào tạo ET</li>
                            <li>Chương trình Đào tạo EE</li>
                        </ul></div>
                </div>
            </div>
        </div>
                           
                        </div>
                         <div class="bg-wraper">
                            <?php
                            $term = get_term_by('id', 17, 'daotao');
                                ?>
                                <div class="content_flex hidden-desktop-h2">
            <h2 class="text-center">
                <a title="Đào tạo sau đại học" href="<?php echo get_term_link($term);?>">Đào tạo đại học</a>
            </h2>
        </div>
        <div class="bg-content-wraper">
            <div class="wraper">
            <div class="ds-grid ds-flex-mobile pd-bottom">
                <div class="content_flex content-mobile js-scroll-fadein animate__animated animate__fadeIn animate__slow">
                    <span class="hidden-h2-mobile">
                        <a title="Đào tạo sau đại học" href="<?php   echo get_term_link($term);?>">Đào tạo sau đại học</a>
                    </span>
                    <div style="margin-top: 20px;"><p>Chương trình đào tạo sau đại học Trường Điện - Điện tử - Đại học Bách Khoa Hà Nội bao gồm</p><ul><li>Đào tạo thạc sĩ</li><li>Đào tạo tiến sĩ</li><li>Kỹ sư chuyên sâu</li></ul></div>
                </div>
                <div class="imgae-flex img-hover-zoom">
                    <a title="Đào tạo sau đại học" href="<?php   echo get_term_link($term);?>">
                               <?php if( get_field('dao_tạo_sau_dại_học') ) { 
                        ?> 
            <img src="<?php  echo get_field('dao_tạo_sau_dại_học')['url']  ?>">
            <?php } ?>
                    </a>
                    </div>
            </div>
        </div>
        </div>

                        </div>

                                      <div class="bg-wraper">
                            <?php
                                ?>
                                <div class="content_flex hidden-desktop-h2">
            <h2 class="text-center">
                <a title="Đào tạo đại học" href="<?php the_permalink(178); ?>">Ngắn hạn & Nâng cao</a>
            </h2>
        </div>
        <div class="wraper">
            <div class="ds-grid pd-bottom">
                <div class="imgae-flex img-hover-zoom">
                    <a title="Đào tạo đại học" href="<?php the_permalink(178); ?>">
                               <?php if( get_field('ngắn_hạn_&_nang_cao') ) { 
                        ?> 
            <img src="<?php  echo get_field('ngắn_hạn_&_nang_cao')['url']  ?>">
            <?php } ?>
                    </a>
                </div>
                <div class="content_flex content-flex-white js-scroll-fadein animate__animated animate__fadeIn animate__slow">
                    <span class="hidden-h2-mobile">
                                        <a title="Ngắn hạn & Nâng cao" href="<?php the_permalink(178); ?>">Ngắn hạn & Nâng cao</a>
                    </span>
                   <div style="margin-top: 20px;"></div>
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

                                                  $args = [
                                                        'post_type' => 'training',
                                                         'post__in' => [153,167,169,171,173,178],
                                                           'orderby' => 'post__in',
                                                    ];
                                                     $query = new WP_Query($args);
                                                        if ($query->have_posts()) {
                                                            while ($query->have_posts()) {
                                                                $query->the_post();
                                                                ?>
                                                                <li class="custom-metis-sub-item ">
                                                                <a id="height-a" title="<?php echo get_the_title() ?>" href="<?php echo get_permalink()?>" class="sf-with-ul"><?php echo get_the_title() ?></a>
                                                                </li>
                                                            <?php
                                                            }
                                                            wp_reset_postdata();
                                                        } else {
                                                            echo 'Không có trang nào dùng template này.';
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
            <div class="row">
                <div class="row"></div><div class="row">
                <div class="row"></div> </div>
            </div>
        </div>
    </section>
</div>
</div>
<?php get_footer('footer') ?>
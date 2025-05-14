<?php get_header("v2")?>

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
                                        <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                        <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php the_permalink(135)?>"><span>Đào tạo<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_2">
                                            <?php
                                            if(have_posts( )){
                                                while(have_posts()) {
                                                    the_post();
                                                    ?>
                                                    <a href="<?php the_permalink()?>"><span>
                                                        <?php echo the_title()?>
                                                    </span>
                                                </a>
                                                    <?php
                                                }
                                            } else {
                                                echo 'Bài viết này không có tag nào trong taxonomy này.';
                                            }
                                            ?>
                                        </li></ul>
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
                <div class="row"></div>
                <div class="row wraper">
                    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
                        <div class="news_column">
                            <div class="alert alert-info clearfix">
                                <?php
                                    if(have_posts(  )){
                                        while(have_posts()) {
                                            the_post();
                                            the_content();
                                        }
                                    }
                                    ?>
                            </div>
                        </div>
                        <div class="news_column"></div>
                    </div>
            <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left">
                        <div class="clearfix metismenu custom-metis">
                            <aside class="sidebar">
                                <nav class="sidebar-nav">
                                    <ul id="menu_65">
                                        <li class="active">
                                            <ul class="collapse in">
                                                <?php
                                                $template_name = 'template/template-dao-tao.php';
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
                </div>
                <div class="row"></div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
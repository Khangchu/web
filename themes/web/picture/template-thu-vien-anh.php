<?php
/*
Template Name: Thư viện ảnh
*/
?>
<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container nvalbums" id ="body">
                 <nav class="third-nav wraper">
                <div class="row">
                  <div class="bg">
                  <div class="clearfix">
                    <div class="col-xs-24 col-sm-18 col-md-18">
                        <div class="breadcrumbs-wrap">
                            <div class="display">
                                <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                    <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php get_permalink()?>"><span>Thư viện ảnh<i class="fa fa-lg fa-angle-right"></i></span></a></li></ul>
                            </div>
                                    <ul class="sub-breadcrumbs"></ul>
                                </div>
                            </div>
                        <div class="headerSearch hiden col-sx-24 col-sm-6 col-md-6"></div>
                    </div>
                  </div>  
                </div>
            </nav>
            <div class="row"></div>
            <div class="row wraper">
                <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
                    <h2 class="margin-bottom-lg ab-main-album-title">Danh sách album</h2>
                    <div class="panel panel-default">
                        <div class="panel-body pb-0">
                            <div class="ab-gird-box">
                                <?php
                                  $args = [
                                        'post_type'      => 'anh',
                                    ];
                                    $album_query = new WP_Query($args);
                                if ( $album_query->have_posts() ) { 
                                        while ( $album_query->have_posts() ) {
                                            $album_query->the_post(); ?>
                                            <div class="ab-gird-item margin-bottom-lg" style="width: 20%;">
                                                <div class="ab-thumb-wrap margin-bottom">
                                                    <div class="thumb-inner">
                                                        <a href="<?php the_permalink()?>" title="<?php the_title()?>" class="thumb-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url()?>'); padding-bottom: 80%; width: 200px;">
                                                            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="hidden">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <h3><a href="<?php the_permalink()?>" title="Ảnh sinh viên"><?php the_title()?></a></h3>
                                                </div>
                                            </div>
                                        <?php
                                        } 
                                    } 
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left"></div>
            </div>
            <div class="row"></div>
            </div>
        </section>
    </div>
</div>
<?php get_footer('footer') ?>
<?php
/*
Template Name: Video
*/
?>
<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container videoclips" id = "body">
                <nav class="third-nav wraper">
                    <div class="row">
                        <div class="bg">
                            <div class="clearfix">
                                <div class="col-xs-24 col-sm-18 col-md-18">
                                    <div class="breadcrumbs-wrap">
                                        <div class="display">
                                            <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                            <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php get_permalink()?>"><span>Thư viện video<i class="fa fa-lg fa-angle-right"></i></span></a></li></ul>
                                        </div>
                                        <ul class="sub-breadcrumbs"></ul>
                                    </div>
                                </div>
                                <div class="headerSearch hidden col-sx-24 col-sm-6 col-md-6"><div class="input-group">
                                        <input type="text" class="form-control" maxlength="60" placeholder="Tìm kiếm..."><span class="input-group-btn"><button type="button" class="btn btn-info" data-url="/vi/seek/?q=" data-minlength="3" data-click="y"><em class="fa fa-search fa-lg"></em></button></span>
                                    </div></div>
                            </div>
                        </div>  
                    </div>
                </nav>
                <div class="row"></div>
                <div class="row wraper">
                    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
                        <div class="viewgrid">
                            <div class="row">
                                <?php
                                    $args = [
                                        'post_type'      => 'video',
                                    ];
                                    $video_query = new WP_Query($args);
                                    if ($video_query->have_posts()) {
                                        while ($video_query->have_posts()) {
                                            $video_query->the_post();
                                            ?>
                                            <div class="col-xs-24 col-sm-8 col-md-8">
                                                <div class="panel panel-default panel-item-clip">
                                                <div class="panel-body text-center">
                                                    <a href="<?php the_permalink()?>" class="clip-thumb" title ="<?php the_title()?>" style="background-image: url(' <?php echo get_the_post_thumbnail_url()?>');">
                                                        <img src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="img-thumbnail imghome">
                                                    </a>
                                                    <h3>
                                                        <a href="<?php the_permalink(); ?>" title ="<?php the_title()?>"><?php the_title()?></a>
                                                    </h3>
                                                     <div class="text-muted">
                                                            <ul class="list-unstyled list-inline">
                                                                <li><em class="fa fa-eye">&nbsp;</em> Đã xem: <?php echo getPostViews(get_the_ID()); ?></li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
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
                <div class="row"></div>
            </div>
        </section>
    </div>
</div>
<?php get_footer('footer') ?>
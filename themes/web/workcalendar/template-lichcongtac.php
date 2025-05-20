<?php
/*
Template Name: Lịch công tác
*/
?>
<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container workcalendar" id= "body">
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
                                                        <span>Lịch làm việc<i class="fa fa-lg fa-angle-right"></i></span>
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
                <div class="wraper"><div class="row css-description-new"><div class="col-md-24"></div></div></div>
                <div class="row header-css"></div>
                <div class="row"></div>
                <div class="wraper">
                    <div class="row">
                        <div class="col-md-24">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php
                                     $terms = get_terms([
                                        'taxonomy' => 'lichcongtac',
                                        'hide_empty' => false,
                                    ]);
                                    foreach ($terms as $term) {
                                         $term_link = get_term_link($term);
                                ?>
                                <div class="pull-left"><em class="fa fa-calendar fa-4x">&nbsp;</em></div>
                                <div>
                                 <h3><a title="Trường Điện Điện tử - Đại học BKHN" href="<?php echo esc_url($term_link);?>"><strong><?php echo $term->name; ?></strong></a></h3></div>
                                <?php
                                    }
                                    ?>
                                </div>
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
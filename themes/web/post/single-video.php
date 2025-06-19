<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container videoclips" id= "body">
                      <nav class="third-nav wraper">
                    <div class="row">
                        <div class="bg">
                        <div class="clearfix">
                            <div class="col-xs-24 col-sm-18 col-md-18">
                                                                    <div class="breadcrumbs-wrap">
                                    <div class="display">
                                        <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                        <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php the_permalink(769)?>"><span>Thư viện video<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_2">
                                        <a href="<?php the_permalink( )?>"><span><?php the_title()?><i class="fa fa-lg fa-angle-right"></i></span></a>
                                        </li></ul>
                                        </li></ul>
                                    </div>
                                    <ul class="subs-breadcrumbs"></ul>
                                    <ul class="temp-breadcrumbs hidden" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/" itemprop="item" title="Trang chủ"><span itemprop="name">Trang chủ</span></a><i class="hidden" itemprop="position" content="1"></i></li>
                                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/news/" itemprop="item" title="Tin Tức"><span class="txt" itemprop="name">Tin Tức</span></a><i class="hidden" itemprop="position" content="2"></i></li><li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/news/dao-tao/" itemprop="item" title="Đào tạo"><span class="txt" itemprop="name">Đào tạo</span></a><i class="hidden" itemprop="position" content="3"></i></li>
                                    </ul>
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
                        <div id="videoDetail">
                            <div class="detailContent clearfix">
                                <h1><?php the_title()?></h1>
                                <div class="message" id="mesHide"></div>
                                <div class="videoplayer">
                                    <div class="clearfix" style="height: 465px;width:829.25px;margin:0 auto;">
                                        <?php
$video_field = get_field('link_video'); 
if (is_array($video_field) && !empty($video_field['url'])) {
    $video_url = $video_field['url'];
} elseif (is_string($video_field)) {
    $video_url = $video_field;
} else {
    $video_url = '';
}

if (filter_var($video_url, FILTER_VALIDATE_URL)) {
    $embed_code = wp_oembed_get($video_url);
    if ($embed_code) {
        echo $embed_code;
    } else {
        echo '<p>Không thể hiển thị video. Định dạng không được hỗ trợ.</p>';
    }
} else {
    echo '<p>URL không hợp lệ hoặc chưa được nhập.</p>';
}



                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div id="otherClipsAj"></div>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </section>
    </div>
</div>
<?php get_footer('footer') ?>
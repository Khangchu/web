<?php
/*
Template Name: Tin Tức
*/
?>
<?php
$term = get_term_by('id', 4, 'tintuc');
 wp_redirect(get_term_link($term));
 exit;
?>
<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container news" id= "body">
            <div class="row header-css"></div>
            <div class="row"></div>
            <div class="wraper"><div class="row"><div class="col-md-24"></div></div></div>
            <div class="row"></div>
            <nav class="third-nav wraper">
                <div class="row">
                  <div class="bg">
                  <div class="clearfix">
                    <div class="col-xs-24 col-sm-18 col-md-18">
                        <div class="breadcrumbs-wrap">
                            <div class="display">
                                <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                    <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php get_permalink(93)?>"><span>Tin Tức<i class="fa fa-lg fa-angle-right"></i></span></a></li></ul>
                            </div>
                                    <ul class="sub-breadcrumbs"></ul>
                                </div>
                            </div>
                        <div class="headerSearch hiden col-sx-24 col-sm-6 col-md-6"></div>
                    </div>
                  </div>  
                </div>
            </nav>
            <div class="wraper">
    <div class="row css-description-new">
        <div class="col-md-24">
            <div class="newstab-slide">
                <div class="box-icon-title box-icon-titles" id="style-3">
                    <ul class="mtab">
                        <?php
                        $terms = get_terms('tintuc');
                        $index = 1;
                        foreach ($terms as $term) {
                            $active_class = ($index === 1) ? 'active' : '';
                            ?>
                            <li class="item-nav">
                                <a href="#newstabhomejcarousel-<?= $index; ?>" class="<?= $active_class; ?>" data-toggle="newtabslide">
                                    <span><?= esc_html($term->name); ?></span>
                                </a>
                            </li>
                            <?php
                            $index++;
                        }
                        ?>
                    </ul>
                </div>

                <div class="newstabhomejcarousel-wraper">
                    <?php
                    $terms = get_terms([
                        'taxonomy'   => 'tintuc',
                        'hide_empty' => true,
                        'fields'     => 'all',
                    ]);
                    $index = 1;

                    foreach ($terms as $term) {
                                            $args = [
                                'post_type'      => 'tin',
                                'posts_per_page' => -1,
                                'tax_query'      => [
                                    [
                                        'taxonomy' => 'tintuc',
                                        'field'    => 'term_id',
                                        'terms'    => $term->term_id,
                                    ],
                                ],
                            ];

                        $query = new WP_Query($args);
                        $active_class = ($index === 1) ? 'active' : '';
                        ?>
                        <div class="newstabhomejcarousel-ctn <?= $active_class; ?>" id="newstabhomejcarousel-<?= $index; ?>">
                            <div class="newstabhomejcarousel-items">
                                <div class="container newstabhomejcarousel">
                                    <!-- Desktop Slider -->
                                    <ul class="news-slider show-slider">
                                        <?php
                                        $posts = [];
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                            $posts[] = [
                                                'title' => get_the_title(),
                                                'link'  => get_permalink(),
                                                'date'  => get_the_date('d/m/Y'),
                                                'img'   => get_the_post_thumbnail_url(),
                                            ];
                                        }

                                        $total = count($posts);
                                        for ($i = 0; $i < $total; $i += 2) {
                                            echo '<li style= "width: 100%; display: inline-block;">';
                                            for ($j = 0; $j < 2 && ($i + $j) < $total; $j++) {
                                                $p = $posts[$i + $j];
                                                ?>
                                                <div class="ibg-item">
                                                    <div class="ibg">
                                                        <div class="height-tabs">
                                                            <?php
                                                            if(esc_url($p['img'])) {
                                                                ?>
                                                                <div class="img">
                                                                    <a href="<?= esc_url($p['link']); ?>" title="<?= esc_attr($p['title']); ?>">
                                                                        <img src="<?= esc_url($p['img']); ?>" alt="<?= esc_attr($p['title']); ?>">
                                                                    </a>
                                                                </div>
                                                                <?php
                                                            }
                                                            ?>
                                                            <div class="ct">
                                                          <h3>
                                                                <a class="show" href="<?= esc_url($p['link']); ?>"
                                                                data-content="<?= esc_attr($p['title']); ?>"
                                                                data-img="<?= esc_url($p['img']); ?>"
                                                                data-rel="cattitlebox">
                                                                    <?= esc_html($p['title']); ?>
                                                                </a>
                                                            </h3>
                                                                <div class="text-muted"><?= esc_html($p['date']); ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            echo '</li>';
                                        }
                                        ?>
                                    </ul>
                                    <!-- Mobile Slider -->
                                    <ul class="news-slider show-slider-mobile">
                                        <?php
                                        for ($i = 0; $i < $total; $i++) {
                                            $p = $posts[$i];
                                            ?>
                                            <li>
                                                <div class="ibg-item">
                                                    <div class="ibg">
                                                        <div class="height-tabs">
                                                            <div class="img">
                                                                <a href="<?= esc_url($p['link']); ?>" title="<?= esc_attr($p['title']); ?>">
                                                                    <img src="<?= esc_url($p['img']); ?>" alt="<?= esc_attr($p['title']); ?>">
                                                                </a>
                                                            </div>
                                                            <div class="ct">
                                                                <h3>
                                                                    <a class="show" href="<?= esc_url($p['link']); ?>" data-content="<?= esc_attr($p['title']); ?>" data-img="<?= esc_url($p['img']); ?>" data-rel="cattitlebox">
                                                                        <?= esc_html($p['title']); ?>
                                                                    </a>
                                                                </h3>
                                                                <div class="text-muted"><?= esc_html($p['date']); ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                        $index++;
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </section>
    </div>
</div>
<?php get_footer('footer') ?>
<script>
jQuery(document).ready(function($) {
function initSlickSlider($context) {
    $context.find('.show-slider').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        rows: 1,
        slidesPerRow: 3,
        arrows: true,
    });

    $context.find('.show-slider-mobile').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
    });
}
initSlickSlider($('.newstabhomejcarousel-ctn.active'));
$('[data-toggle="newtabslide"]').on('click', function(e) {
    e.preventDefault();
    var target = $(this).attr('href');
    $('.newstabhomejcarousel-ctn').removeClass('active');
    $(target).addClass('active');
    $('.mtab a').removeClass('active');
    $(this).addClass('active');
    initSlickSlider($(target));
});
});
</script>

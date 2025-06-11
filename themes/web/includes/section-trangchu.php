<div class="section-body home-body">
    <div class="container">
        <div class="row">
            <div class="head-section">
<div class="lazy slider" id="homeBannerSlider">
    <?php
    $slides = get_field('anh_trang_chu');
    if (!empty($slides) && is_array($slides)) {
        foreach ($slides as $index => $item) {
            if (!empty($item['url'])):
    ?>
        <div>
            <div style="width: 100%; display: inline-block;">
                <div class="div-position">
                    <img alt="" src="<?php echo esc_url($item['url']); ?>">
                    <div>
                        <h1 data-toggle="animatedItem" data-slideuq1="<?php echo esc_attr($index); ?>" class="hidden"></h1>
                        <p data-toggle="animatedItem" data-slideuq1="<?php echo esc_attr($index); ?>" data-delay="1" class="hidden"></p>
                    </div>
                    <div class="slide-text custom-gradient-rtl animate__animated animate__slow"></div>
                </div>
            </div>
        </div>
    <?php
            endif;
        }
    }
    ?>
</div>

<div class="im-flex-section-row">
    <div class="wraper">
        <div class="text-center block-title">
            <h2>Tin tức</h2>
        </div>
        <div class="im-flex-main-news custom-block-news">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-post">
                        <div class="item">
<?php
$link_field = get_field('main-featured-slide'); 
$slug = basename(parse_url($link_field, PHP_URL_PATH));
$query = new WP_Query([
    'name' => $slug,
    'post_type' => ['tin','training','admissions','examine','center-department','support','student','alumni','workcalendar','teamofofficials','anh','video','introduction'],
    'posts_per_page' => 1,
]);

if ($query->have_posts()) {
    $query->the_post();
    $post_id = get_the_ID();
    $permalink = get_permalink($post_id);
    $title = get_the_title($post_id);
    $thumbnail = get_the_post_thumbnail_url($post_id);

    if (!$thumbnail) {
        $thumbnail = get_template_directory_uri() . '/img/temp.jpg'; 
    }

    ?>
    <div class="item-content">
        <div class="height-news img-hover-zoom">
            <a href="<?php echo esc_url($permalink); ?>" class="img" style="background-image: url('<?php echo esc_url($thumbnail); ?>');">
                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
            </a>
        </div>
        <div class="item-inner css-items">
            <h3>
                <a href="<?php echo esc_url($permalink); ?>" title="<?php echo esc_attr($title); ?>">
                    <?php echo esc_html($title); ?>
                </a>
            </h3>
        </div>
    </div>
    <?php
    wp_reset_postdata();
} else {
    echo '<p>⚠️ Không tìm thấy bài viết từ slug hoặc URL. Kiểm tra lại dữ liệu trong ACF.</p>';
}
?>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="slider-post">
                        <div class="row">
<div class="col-md-12">
  <div class="double-slider">
 <?php
$group1 = get_field('secondary-featured-list');
if (!empty($group1) && is_array($group1)) :
    $chunks = array_chunk($group1, 2);
    foreach ($chunks as $chunk) :
?>
    <div class="slider-item">
        <?php foreach ($chunk as $url) :
            $parsed_url = parse_url($url, PHP_URL_PATH);
            $slug = basename($parsed_url);
            $query_args = [
                'name' => $slug,
                'post_type' =>  ['tin','training','admissions','examine','center-department','support','student','alumni','workcalendar','teamofofficials','anh','video','introduction'],
                'posts_per_page' => 1,
                'post_status' => 'publish',
            ];

            $query = new WP_Query($query_args);

            if ($query->have_posts()) :
                $query->the_post();
                $post_id = get_the_ID();
                $title = get_the_title($post_id);
                $permalink = get_permalink($post_id); 
                $thumbnail = get_the_post_thumbnail_url($post_id, 'medium_large');

                if (!$thumbnail) {
                    $thumbnail = get_template_directory_uri() . '/img/temp.jpg';
                }
        ?>
                <div class="item-content">
                    <a href="<?php echo esc_url($permalink); ?>" class="img" style="background-image: url('<?php echo esc_url($thumbnail); ?>');">
                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
                    </a>
                    <div class="item-inner custom-gradient-bt">
                        <h3>
                            <a href="<?php echo esc_url($permalink); ?>" title="<?php echo esc_attr($title); ?>">
                                <?php echo esc_html($title); ?>
                            </a>
                        </h3>
                    </div>
                </div>
        <?php
                wp_reset_postdata();
            else :
                echo '<p>⚠️ Không tìm thấy bài viết từ URL: ' . esc_url($url) . '</p>';
            endif;
        endforeach; ?>
    </div>
<?php endforeach; endif; ?>
  </div>
</div>



                            <div class="col-md-12">
                                <div class="non-slider">
<?php
$group = get_field('recent-news-list'); // Lấy danh sách URL từ ACF

if ($group && is_array($group)) {
    foreach ($group as $key => $link) {
        if ($link) {
            // Debug: xem URL
            // var_dump($link);

            // Lấy slug từ URL
            $parsed_url = parse_url($link, PHP_URL_PATH);
            $slug = basename($parsed_url);

            // Tìm post ID từ slug với nhiều post type
            $query_args = [
                'name' => $slug, // Tìm bài viết theo slug
                'post_type' =>  ['tin','training','admissions','examine','center-department','support','student','alumni','workcalendar','teamofofficials','anh','video','introduction'], // Thay bằng danh sách post type của bạn
                'posts_per_page' => 1,
                'post_status' => 'publish',
            ];

            $query = new WP_Query($query_args);

            if ($query->have_posts()) {
                $query->the_post();
                $post_id = get_the_ID();
                $title = get_the_title($post_id);
                $permalink = get_permalink($post_id); // TranslatePress sẽ xử lý URL đa ngôn ngữ
                ?>
                <div class="item">
                    <div class="item-content">
                        <div class="item-inner">
                            <h3>
                                <a href="<?php echo esc_url($permalink); ?>" title="<?php echo esc_attr($title); ?>">
                                    <?php echo esc_html($title); ?>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php
                wp_reset_postdata();
            } else {
                echo '<p>⚠️ Không tìm thấy bài viết từ URL: ' . esc_url($link) . '</p>';
            }
        }
    }
} else {
    echo '<p>⚠️ Không tìm thấy nhóm field recent-news-list hoặc dữ liệu không hợp lệ.</p>';
}
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="im-flex-main-news-btn text-center">
            <a href="<?php echo get_permalink(93)?>" class="btn btn-lg btn-custom-red">Xem tất cả</a>
        </div>
    </div>
</div>
                <div class="fixed_social">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section>
            <div id="body">
<div class="wraper">
<div class="row">
	<div class="col-md-12 col-xs-24 col-sm-12">
	</div>
	<div class="col-md-12 col-xs-24 col-sm-12">
	</div>
</div>
<div class="row">
	<div class="col-md-24">
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-xs-24 col-sm-8"></div>
	<div class="col-md-8 col-xs-24 col-sm-8"></div>
	<div class="col-md-8 col-xs-24 col-sm-8"></div>
</div>
<div class="row">
</div>
</div>
                </div>
            </section>
        </div>
    </div>

<script>
jQuery(document).ready(function($) {
  function initSlickSlider($context) {
    $context.find('.double-slider').not('.slick-initialized').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
        arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

    $context.find('.show-slider-mobile').not('.slick-initialized').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
        arrows: false,
    });
  }

  // KHỞI TẠO CHO SLIDER ĐANG HIỂN THỊ
  initSlickSlider($(document));

  // Nếu bạn có cơ chế tab khác dùng slick
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

jQuery(document).ready(function($) {
  function initSlickSlider($context) {
    $context.find('.lazy.slider').not('.slick-initialized').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    })
    .on('init', function(event, slick){
      // Thêm hiệu ứng animate__fadeInRight cho slide đầu tiên
      var currentSlide = slick.$slides.eq(0);
      currentSlide.find('.slide-text')
                  .addClass('animate__fadeInRight');
    })
    .on('beforeChange', function(event, slick, currentSlide, nextSlide){
      // Xóa hiệu ứng animate__fadeInRight khỏi tất cả các slide trước khi chuyển
      slick.$slides.find('.slide-text')
                   .removeClass('animate__fadeInRight');
    })
    .on('afterChange', function(event, slick, currentSlide){
      // Thêm hiệu ứng animate__fadeInRight cho slide hiện tại
      slick.$slides.eq(currentSlide)
                   .find('.slide-text')
                   .addClass('animate__fadeInRight');
    });

    $context.find('.show-slider-mobile').not('.slick-initialized').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
    });
  }

  // Khởi tạo slider cho tài liệu
  initSlickSlider($(document));

  // Xử lý chuyển đổi tab
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

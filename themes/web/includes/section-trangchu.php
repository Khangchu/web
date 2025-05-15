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
$url = get_field('main-featured-slide');

if ($url) {
    $post_id = url_to_postid($url);

    if ($post_id) {
        $title = get_the_title($post_id);
        $permalink = get_permalink($post_id);
        $thumbnail = get_the_post_thumbnail_url($post_id);

        if (!$thumbnail) {
            $thumbnail = get_template_directory_uri() . '/img/temp.jpg'; // fallback ảnh mặc định
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
    } else {
        echo '<p>Không tìm thấy bài viết tương ứng với URL này.</p>';
    }
} else {
    echo '<p>Chưa có URL được nhập.</p>';
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
        $chunks = array_chunk($group1, 2); // Gộp mỗi 2 bài
        foreach ($chunks as $chunk) :
    ?>
      <div class="slider-item"> <!-- Mỗi slider-item chứa 2 bài -->
        <?php foreach ($chunk as $url) :
            $post_id = url_to_postid($url);
            if ($post_id && get_post_status($post_id)) :
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
        <?php endif; endforeach; ?>
      </div>
    <?php endforeach; endif; ?>
  </div>
</div>



                            <div class="col-md-12">
                                <div class="non-slider">
<?php
$group = get_field('recent-news-list');

if ($group && is_array($group)) {
    foreach ($group as $key => $link) {
        if ($link) {

            $post_id = url_to_postid($link);
            if ($post_id) {
                $post = get_post($post_id);
                if ($post) {
                    ?>
                    <div class="item">
                        <div class="item-content">
                            <div class="item-inner">
                                <h3><a href="<?php echo esc_url($link); ?>" title="<?php echo esc_attr(get_the_title($post)); ?>">
                                    <?php echo esc_html(get_the_title($post)); ?>
                                </a></h3>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    }
} else {
    echo 'Không tìm thấy nhóm field.';
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
</script>

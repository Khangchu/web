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
$query = new WP_Query([
    'post_type' => 'tin',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
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
    echo '<p>⚠️ Không tìm thấy bài viết mới nhất.</p>';
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
    $query = new WP_Query([
        'post_type' => 'tin',
        'posts_per_page' => 6,
        'offset' => 1, // Bỏ qua bài mới nhất
        'post_status' => 'publish',
    ]);

    if ($query->have_posts()) :
        $count = 0;
        echo '<div class="slider-item">';
        while ($query->have_posts()) :
            $query->the_post();
            $post_id = get_the_ID();
            $title = get_the_title();
            $permalink = get_permalink();
            $thumbnail = get_the_post_thumbnail_url($post_id, 'medium_large') ?: get_template_directory_uri() . '/img/temp.jpg';

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
            $count++;
            if ($count % 2 == 0 && $count < 6) {
                echo '</div><div class="slider-item">';
            }
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>⚠️ Không tìm thấy bài viết.</p>';
    endif;
    ?>
  </div>
</div>




<div class="col-md-12">
<div class="non-slider">
<?php
$query = new WP_Query([
    'post_type' => ['tin'],
    'posts_per_page' => 6,
    'post_status' => 'publish',
    'orderby' => 'date',
    'offset' => 7,
    'order' => 'DESC',
]);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
        $title = get_the_title();
        $permalink = get_permalink();
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
    }
    wp_reset_postdata();
} else {
    echo '<p>⚠️ Không tìm thấy bài viết.</p>';
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

 <!------------------------Đào tạo------------------------------>

<div class="im-flex-section-row">
    <div class="wraper">
        <div class="text-center block-title">
            <h2>Đào tạo</h2>
        </div>
        <div class="im-flex-main-news custom-block-news">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-post">
                        <div class="item">
<?php
$query = new WP_Query([
    'post_type' => 'training',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
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
    echo '<p>⚠️ Không tìm thấy bài viết mới nhất.</p>';
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
    $query = new WP_Query([
        'post_type' => 'training',
        'posts_per_page' => 6,
        'offset' => 1, // Bỏ qua bài mới nhất
        'post_status' => 'publish',
    ]);

    if ($query->have_posts()) :
        $count = 0;
        echo '<div class="slider-item">';
        while ($query->have_posts()) :
            $query->the_post();
            $post_id = get_the_ID();
            $title = get_the_title();
            $permalink = get_permalink();
            $thumbnail = get_the_post_thumbnail_url($post_id, 'medium_large') ?: get_template_directory_uri() . '/img/temp.jpg';

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
            $count++;
            if ($count % 2 == 0 && $count < 6) {
                echo '</div><div class="slider-item">';
            }
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>⚠️ Không tìm thấy bài viết.</p>';
    endif;
    ?>
  </div>
</div>



                            <div class="col-md-12">
                                <div class="non-slider">
<?php
$query = new WP_Query([
    'post_type' => ['training'],
    'posts_per_page' => 6,
    'post_status' => 'publish',
    'orderby' => 'date',
    'offset' => 7,
    'order' => 'DESC',
]);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
        $title = get_the_title();
        $permalink = get_permalink();
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
    }
    wp_reset_postdata();
} else {
    echo '<p>⚠️ Không tìm thấy bài viết.</p>';
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
            <a href="<?php the_permalink(135)?>" class="btn btn-lg btn-custom-red">Xem tất cả</a>
        </div>
    </div>
</div>

 <!------------------------Tuyển sinh------------------------------>

<div class="im-flex-section-row">
    <div class="wraper">
        <div class="text-center block-title">
            <h2>Tuyển sinh</h2>
        </div>
        <div class="im-flex-main-news custom-block-news">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-post">
                        <div class="item">
<?php
$query = new WP_Query([
    'post_type' => 'admissions',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
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
    echo '<p>⚠️ Không tìm thấy bài viết mới nhất.</p>';
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
    $query = new WP_Query([
        'post_type' => 'admissions',
        'posts_per_page' => 6,
        'offset' => 1, // Bỏ qua bài mới nhất
        'post_status' => 'publish',
    ]);

    if ($query->have_posts()) :
        $count = 0;
        echo '<div class="slider-item">';
        while ($query->have_posts()) :
            $query->the_post();
            $post_id = get_the_ID();
            $title = get_the_title();
            $permalink = get_permalink();
            $thumbnail = get_the_post_thumbnail_url($post_id, 'medium_large') ?: get_template_directory_uri() . '/img/temp.jpg';

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
            $count++;
            if ($count % 2 == 0 && $count < 6) {
                echo '</div><div class="slider-item">';
            }
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>⚠️ Không tìm thấy bài viết.</p>';
    endif;
    ?>
  </div>
</div>



                            <div class="col-md-12">
                                <div class="non-slider">
<?php
$query = new WP_Query([
    'post_type' => ['admissions'],
    'posts_per_page' => 6,
    'post_status' => 'publish',
    'orderby' => 'date',
    'offset' => 7,
    'order' => 'DESC',
]);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
        $title = get_the_title();
        $permalink = get_permalink();
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
    }
    wp_reset_postdata();
} else {
    echo '<p>⚠️ Không tìm thấy bài viết.</p>';
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
            <a href="<?php the_permalink(236)?>" class="btn btn-lg btn-custom-red">Xem tất cả</a>
        </div>
    </div>
</div>

 <!------------------------Nghiên cứu------------------------------>

<div class="im-flex-section-row">
    <div class="wraper">
        <div class="text-center block-title">
            <h2>Nghiên cứu</h2>
        </div>
        <div class="im-flex-main-news custom-block-news">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-post">
                        <div class="item">
<?php
$query = new WP_Query([
    'post_type' => 'examine',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
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
    echo '<p>⚠️ Không tìm thấy bài viết mới nhất.</p>';
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
    $query = new WP_Query([
        'post_type' => 'examine',
        'posts_per_page' => 6,
        'offset' => 1, 
        'post_status' => 'publish',
    ]);

    if ($query->have_posts()) :
        $count = 0;
        echo '<div class="slider-item">';
        while ($query->have_posts()) :
            $query->the_post();
            $post_id = get_the_ID();
            $title = get_the_title();
            $permalink = get_permalink();
            $thumbnail = get_the_post_thumbnail_url($post_id, 'medium_large') ?: get_template_directory_uri() . '/img/temp.jpg';

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
            $count++;
            if ($count % 2 == 0 && $count < 6) {
                echo '</div><div class="slider-item">';
            }
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>⚠️ Không tìm thấy bài viết.</p>';
    endif;
    ?>
  </div>
</div>



                            <div class="col-md-12">
                                <div class="non-slider">
<?php
$query = new WP_Query([
    'post_type' => ['examine'],
    'posts_per_page' => 6,
    'post_status' => 'publish',
    'orderby' => 'date',
    'offset' => 7,
    'order' => 'DESC',
]);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
        $title = get_the_title();
        $permalink = get_permalink();
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
    }
    wp_reset_postdata();
} else {
    echo '<p>⚠️ Không tìm thấy bài viết.</p>';
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
            <a href="<?php the_permalink(259)?>" class="btn btn-lg btn-custom-red">Xem tất cả</a>
        </div>
    </div>
</div>
<!------------------------Khoa-Trung tâm------------------------------>
<div class="im-flex-section-row">
    <div class="wraper">
        <div class="text-center block-title">
            <h2>Khoa-Trung tâm</h2>
        </div>
        <div class="im-flex-main-news custom-block-news">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-post">
                        <div class="item">
<?php
$query = new WP_Query([
    'post_type' => 'center-department',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
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
    echo '<p>⚠️ Không tìm thấy bài viết mới nhất.</p>';
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
    $query = new WP_Query([
        'post_type' => 'center-department',
        'posts_per_page' => 6,
        'offset' => 1, 
        'post_status' => 'publish',
    ]);

    if ($query->have_posts()) :
        $count = 0;
        echo '<div class="slider-item">';
        while ($query->have_posts()) :
            $query->the_post();
            $post_id = get_the_ID();
            $title = get_the_title();
            $permalink = get_permalink();
            $thumbnail = get_the_post_thumbnail_url($post_id, 'medium_large') ?: get_template_directory_uri() . '/img/temp.jpg';

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
            $count++;
            if ($count % 2 == 0 && $count < 6) {
                echo '</div><div class="slider-item">';
            }
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>⚠️ Không tìm thấy bài viết.</p>';
    endif;
    ?>
  </div>
</div>



                            <div class="col-md-12">
                                <div class="non-slider">
<?php
$query = new WP_Query([
    'post_type' => ['center-department'],
    'posts_per_page' => 6,
    'post_status' => 'publish',
    'orderby' => 'date',
    'offset' => 7,
    'order' => 'DESC',
]);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
        $title = get_the_title();
        $permalink = get_permalink();
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
    }
    wp_reset_postdata();
} else {
    echo '<p>⚠️ Không tìm thấy bài viết.</p>';
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
            <a href="<?php the_permalink(314)?>" class="btn btn-lg btn-custom-red">Xem tất cả</a>
        </div>
    </div>
</div>
<!------------------------Hợp tác - Đối Ngoại------------------------------>
<div class="im-flex-section-row">
    <div class="wraper">
        <div class="text-center block-title">
            <h2>Hợp tác - Đối Ngoại</h2>
        </div>
        <div class="im-flex-main-news custom-block-news">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-post">
                        <div class="item">
<?php
$query = new WP_Query([
    'post_type' => 'support',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
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
    echo '<p>⚠️ Không tìm thấy bài viết mới nhất.</p>';
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
    $query = new WP_Query([
        'post_type' => 'support',
        'posts_per_page' => 6,
        'offset' => 1, 
        'post_status' => 'publish',
    ]);

    if ($query->have_posts()) :
        $count = 0;
        echo '<div class="slider-item">';
        while ($query->have_posts()) :
            $query->the_post();
            $post_id = get_the_ID();
            $title = get_the_title();
            $permalink = get_permalink();
            $thumbnail = get_the_post_thumbnail_url($post_id, 'medium_large') ?: get_template_directory_uri() . '/img/temp.jpg';

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
            $count++;
            if ($count % 2 == 0 && $count < 6) {
                echo '</div><div class="slider-item">';
            }
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>⚠️ Không tìm thấy bài viết.</p>';
    endif;
    ?>
  </div>
</div>



                            <div class="col-md-12">
                                <div class="non-slider">
<?php
$query = new WP_Query([
    'post_type' => ['support'],
    'posts_per_page' => 6,
    'post_status' => 'publish',
    'orderby' => 'date',
    'offset' => 7,
    'order' => 'DESC',
]);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
        $title = get_the_title();
        $permalink = get_permalink();
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
    }
    wp_reset_postdata();
} else {
    echo '<p>⚠️ Không tìm thấy bài viết.</p>';
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
            <a href="<?php the_permalink(439)?>" class="btn btn-lg btn-custom-red">Xem tất cả</a>
        </div>
    </div>
</div>

<!------------------------Sinh Viên------------------------------>
<div class="im-flex-section-row">
    <div class="wraper">
        <div class="text-center block-title">
            <h2>Sinh Viên</h2>
        </div>
        <div class="im-flex-main-news custom-block-news">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured-post">
                        <div class="item">
<?php
$query = new WP_Query([
    'post_type' => 'student',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
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
    echo '<p>⚠️ Không tìm thấy bài viết mới nhất.</p>';
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
    $query = new WP_Query([
        'post_type' => 'student',
        'posts_per_page' => 6,
        'offset' => 1, 
        'post_status' => 'publish',
    ]);

    if ($query->have_posts()) :
        $count = 0;
        echo '<div class="slider-item">';
        while ($query->have_posts()) :
            $query->the_post();
            $post_id = get_the_ID();
            $title = get_the_title();
            $permalink = get_permalink();
            $thumbnail = get_the_post_thumbnail_url($post_id, 'medium_large') ?: get_template_directory_uri() . '/img/temp.jpg';

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
            $count++;
            if ($count % 2 == 0 && $count < 6) {
                echo '</div><div class="slider-item">';
            }
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>⚠️ Không tìm thấy bài viết.</p>';
    endif;
    ?>
  </div>
</div>



                            <div class="col-md-12">
                                <div class="non-slider">
<?php
$query = new WP_Query([
    'post_type' => ['student'],
    'posts_per_page' => 6,
    'post_status' => 'publish',
    'orderby' => 'date',
    'offset' => 7,
    'order' => 'DESC',
]);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $post_id = get_the_ID();
        $title = get_the_title();
        $permalink = get_permalink();
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
    }
    wp_reset_postdata();
} else {
    echo '<p>⚠️ Không tìm thấy bài viết.</p>';
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
            <a href="<?php the_permalink(439)?>" class="btn btn-lg btn-custom-red">Xem tất cả</a>
        </div>
    </div>
</div>

                <div class="fixed_social">
                </div>
            </div>
        </div>
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

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
$current_term_id = 0;
$current_term_ids = [];
if (is_tax('daotao')) {
    $current_term = get_queried_object();
    if ($current_term instanceof WP_Term) {
        $current_term_id = $current_term->term_id;
    }
}
if (is_singular('training')) {
    $terms_of_post = get_the_terms(get_the_ID(), 'daotao');
    if (!empty($terms_of_post) && !is_wp_error($terms_of_post)) {
        $current_term_ids = wp_list_pluck($terms_of_post, 'term_id');
        foreach ($terms_of_post as $post_term) {
            if ($post_term->parent && !in_array($post_term->parent, $current_term_ids)) {
                $current_term_ids[] = $post_term->parent;
            }
        }
    }
}
?>

<?php
$terms = get_terms([
    'taxonomy' => 'daotao',
    'hide_empty' => false,
    'parent' => 0,
]);
if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $term_link = get_term_link($term);
        $child_terms = get_terms([
            'taxonomy' => 'daotao',
            'hide_empty' => false,
            'parent' => $term->term_id
        ]);
        $li_class = 'custom-metis-sub-item';
        if (!empty($child_terms)) {
            $li_class .= ' active_sub';
        }

        // Đánh dấu active nếu:
        // - Là term archive
        // - Hoặc là term của bài viết
        if ($term->term_id === $current_term_id || in_array($term->term_id, $current_term_ids)) {
            $li_class .= ' active2';
        }
        ?>
        <li class="<?php echo esc_attr($li_class); ?>">
            <a id="height-a" title="<?php echo esc_attr($term->name); ?>" href="<?php echo esc_url($term_link); ?>" class="sf-with-ul">
                <?php echo esc_html($term->name); ?>
            </a>
            <?php if (!empty($child_terms)) { ?>
                <span id="span-id" class="fa arrow expand" style="margin-top: -36px;"></span>
                <ul class="collapse">
                    <?php foreach ($child_terms as $child) {
                        $child_link = get_term_link($child);
                        $child_li_class = 'custom-metis-sub-item';

                        if ($child->term_id === $current_term_id || in_array($child->term_id, $current_term_ids)) {
                            $child_li_class .= ' active2';
                        }
                        ?>
                        <li class="<?php echo esc_attr($child_li_class); ?>">
                            <a id="height-a" title="<?php echo esc_attr($child->name); ?>" href="<?php echo esc_url($child_link); ?>" class="sf-with-ul">
                                <?php echo esc_html($child->name); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
        <?php
    }
} else {
    echo '<li>Không có chuyên mục nào trong taxonomy này.</li>';
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
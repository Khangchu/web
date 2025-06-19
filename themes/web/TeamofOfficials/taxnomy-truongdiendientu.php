<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container suborgans" id="body">
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
                                                    <a href="<?php the_permalink(1026) ?>">
                                                        <span>Danh sách cán bộ<i class="fa fa-lg fa-angle-right"></i></span>
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
                <div class="row"></div>
                <div class="row wraper">
                    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Trường Điện - Điện tử
                            </div>
                            <div class="panel-body">
                                <ul style="padding: 0">
                                </ul>
                                <p class="text-center">
                                </p>
                            </div>
                        </div>
                        <strong>Danh sách các phòng ban trực thuộc :</strong>
                        <br>
                        <div class="suborg">
                            <ol>
                                    <?php
                                          $terms = get_terms([
                                            'taxonomy' => 'doingucanbo',
                                            'hide_empty' => false,
                                            'exclude' => [78],
                                        ]);
                                          if (!empty($terms) && !is_wp_error($terms)) {
                                            ?>
                                            <?php
                                              foreach ($terms as $term) {
                                                  ?>
                                                  <li><h3><a href="<?php echo get_term_link($term);?>"><?php echo esc_html($term->name); ?></a></h3></li>
                                                  <?php
                                              }
                                              ?>
                                          <?php
                                          }
                                        ?>
                            </ol>
                        </div>
                        <?php
                                    $term_A_id = 78;
                                    $args = [
                                         'post_type' => 'teamofofficials',
                                         'posts_per_page' => -1,
                                         'tax_query' => [
                                             [
                                                 'taxonomy' => 'doingucanbo',
                                                 'field' => 'term_id',
                                                 'terms' => $term_A_id
                                             ]
                                         ]
                                     ];
                                    $query = new WP_Query($args);
                                    $grouped_posts = [];
                                    foreach ($terms as $term) {
                                        $grouped_posts[$term->term_id] = [
                                            'term' => $term,
                                            'posts' => [],
                                        ];
                                    }
                                    if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $post_id = get_the_ID();

                                        $post_terms = get_the_terms($post_id, 'doingucanbo');

                                        if ($post_terms && !is_wp_error($post_terms)) {
                                            foreach ($post_terms as $term) {
                                                if ($term->term_id != $term_A_id && isset($grouped_posts[$term->term_id])) {
                                                    $grouped_posts[$term->term_id]['posts'][] = get_post();
                                                }
                                            }
                                        }
                                    }
                                    wp_reset_postdata();
                                }
                                foreach ($grouped_posts as $group) {
                                if (empty($group['posts'])) continue;
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <caption>
                                            <h2><a href="<?php echo get_term_link($group['term']); ?>"><?php echo esc_html($group['term']->name); ?></a></h2>
                                        </caption>
                                        <thead>
                                            <tr>
                                                <th class="text-center">STT</th>
                                                <th class="text-center">Họ tên</th>
                                                <th class="text-center">Chức vụ</th>
                                                <th class="text-center">Ảnh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $index = 1;
                                            foreach ($group['posts'] as $post) {
                                                setup_postdata($post);
                                                $name = get_field('họ_va_ten', $post->ID);
                                                $avatar = get_field('anh_giang_vien', $post->ID);
                                                $position = get_field('chức_vụ', $post->ID);
                                                $email = get_field('dịa_chỉ_email', $post->ID);
                                                $concurrent = get_field('chức_danh_kiem_nhiệm', $post->ID);
                                                $research = get_field('nhom_nghien_cuu', $post->ID);
                                                ?>
                                                 <tr>
                                                        <td class="text-center" style="text-align: center; vertical-align: middle"><?php echo $index?></td>
                                                        <td style="vertical-align: middle">
                                                                <h3 class="font-size-h3">
                                                                    <a href="<?php the_permalink()?>">
                                                                        <strong><?php echo esc_html($name); ?>
                                                                    </strong>
                                                                </a>
                                                            </h3>
                                                            <?php
                                                             if ($research) {
                                                                 ?>
                                                                 <br>
                                                                <strong>Nhóm nghiên cứu:</strong>
                                                                <?php echo esc_html($research); ?>
                                                                <?php
                                                              }
                                                              if ($email) {
                                                                ?>
                                                                <br>
                                                                <strong>Email:</strong>
                                                                <?php echo esc_html($email); ?>
                                                                <?php
                                                              }
                                                            ?>
                                                        </td>
                                                        <td class="text-center position" style="text-align: center; vertical-align: middle">
                                                            <strong><?php echo esc_html($position); ?>
                                                            <?php
                                                            if ($concurrent) {
                                                                ?>
                                                                <br>
                                                                <?php echo esc_html($concurrent); ?>
                                                                <?php
                                                            }
                                                            ?>
                                                            </strong>
                                                        </td>
                                                        <td style="text-align: center; vertical-align: middle">
                                                            <a href="<?php the_permalink()?>" title="<?php echo esc_html($name); ?>">
                                                                <img src="<?php echo  esc_url($avatar['url'])  ?>" class="img-thumbnail" style="max-width: 180px" alt="<?php echo esc_attr($name);?>">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php
                                            }
                                            wp_reset_postdata();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                            }
                                ?>
                    </div>
                    <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tìm kiếm
                            </div>
                            <div class="panel-body">
                                <form action="<?php echo get_permalink(get_page_by_path('tim-kiem-can-bo')); ?>" method="get" role="form">
                              <div class="form-group">
        <label>Họ tên:</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" value="" name="q" class="form-control" placeholder="Họ tên">
        </div>
    </div>
                            <div class="form-group">
                                <label>Chức vụ:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                                    <input type="text" value="" name="p" class="form-control" placeholder="Chức vụ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Thuộc đơn vị:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <select name="oid" class="form-control">
                                         <option value="any">-- Tất cả --</option>
                                         <?php
                                        if (!empty($terms) && !is_wp_error($terms)) {
                                            ?>
                                            <?php
                                              foreach ($terms as $term) {
                                                  ?>
                                                  <option value="<?php echo esc_attr($term->term_id); ?>"><?php echo esc_html($term->name); ?></option>
                                                  <?php
                                              }
                                              ?>
                                          <?php
                                          }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" value="Tìm kiếm" class="btn btn-primary">
                        </form>
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
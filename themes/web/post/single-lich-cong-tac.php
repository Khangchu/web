<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container workcalendar" id= 'body'>
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
                                                <li id="brcr_2">
                                                                     <?php
                                            $post_id = get_the_ID();
                                            $terms = get_the_terms($post_id, 'lichcongtac');                                            
                                            if (!empty($terms) && !is_wp_error($terms)) {

                                                foreach ($terms as $term) {
                                                    $term_link = get_term_link( $term )
                                                    
                                                    ?>
                                                    <a href="<?php echo esc_url( $term_link )?>"><span><?php echo $term->name?><i class="fa fa-lg fa-angle-right"></i></span></a>
                                                    <?php
                                                }
                                            } else {
                                                echo 'Bài viết này không có tag nào trong taxonomy này.';
                                            }
                                            ?>
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
                            <div id="contentwork">
                                <div class="panel panel-default">
                                   <div class="panel-body">
                                    <figure class="image" >
                                        <?php
                                         $post_id = get_the_ID();
                                        $terms = get_the_terms($post_id, 'lichcongtac'); 
                                         foreach ($terms as $term) {
                                            $image = get_field('ảnh_nen', $term);
                                            ?>
                                            <img src="<?php echo esc_url($image['url']) ?>" alt="" style="aspect-ratio:1900/634;" width="1900" height="634">
                                            <figcaption>&nbsp;</figcaption>
                                    </figure>
                                   </div> 
                                </div>
                                <h1 class="text-center"><?php echo esc_html($term->name) ?></h1>
                                <h3 class="text-center">
                                    <?php
                                        $week_number = get_field('số_tuần');
                                        $week_year = get_field('nam');
                                        $term_id = !empty($terms) ? $terms[0]->term_id : 0;
                                            if ($week_number == 1) {
                                                $tuan_truoc = 52;
                                                $nam_truoc = $week_year - 1;
                                            } else {
                                                $tuan_truoc = $week_number - 1;
                                                $nam_truoc = $week_year;
                                            }

                                            // Tuần sau
                                            if ($week_number == 52) {
                                                $tuan_sau = 1;
                                                $nam_sau = $week_year + 1;
                                            } else {
                                                $tuan_sau = $week_number + 1;
                                                $nam_sau = $week_year;
                                            }
                                                if ($week_number && $week_year) {
                                            // Lấy ngày đầu tuần (thứ Hai)
                                            $start_date = new DateTime();
                                            $start_date->setISODate($week_year, $week_number);
                                            $start_str = $start_date->format('d/m/Y');
                                            
                                            // Lấy ngày cuối tuần (chủ nhật)
                                            $end_date = clone $start_date;
                                            $end_date->modify('+6 days');
                                            $thu3 = clone $start_date; $thu3->modify('+1 day');
                                            $thu4 = clone $start_date; $thu4->modify('+2 days');
                                            $thu5 = clone $start_date; $thu5->modify('+3 days');
                                            $thu6 = clone $start_date; $thu6->modify('+4 days');
                                            $thu7 = clone $start_date; $thu7->modify('+5 days');
                                            $end_str = $end_date->format('d/m/Y');
                                            $args_prev = [
                                                'post_type'      => 'workcalendar',
                                                'posts_per_page' => 1,
                                                'meta_query'     => [
                                                    [
                                                        'key'     => 'số_tuần',
                                                        'value'   => $tuan_truoc,
                                                        'compare' => '=',
                                                        'type'    => 'NUMERIC'
                                                    ],
                                                    [
                                                        'key'     => 'nam',
                                                        'value'   => $nam_truoc,
                                                        'compare' => '=',
                                                        'type'    => 'NUMERIC'
                                                    ]
                                                    ],
                                                    'tax_query'      => [
                                                    [
                                                        'taxonomy' => 'lichcongtac',
                                                        'field'    => 'term_id',
                                                        'terms'    => $term_id
                                                    ]
                                                ]
                                            ];
                                            $prev_post = new WP_Query($args_prev);
                                            $args_next = [
                                            'post_type'      => 'workcalendar',
                                            
                                            'posts_per_page' => 1,
                                            'meta_query'     => [
                                                [
                                                    'key'     => 'số_tuần',
                                                    'value'   => $tuan_sau,
                                                    'compare' => '=',
                                                    'type'    => 'NUMERIC'
                                                ],
                                                [
                                                    'key'     => 'nam',
                                                    'value'   => $nam_sau,
                                                    'compare' => '=',
                                                    'type'    => 'NUMERIC'
                                                ]
                                                ],
                                            'tax_query'      => [
                                                [
                                                    'taxonomy' => 'lichcongtac',
                                                    'field'    => 'term_id',
                                                    'terms'    => $term_id
                                                ]
                                            ]
                                        ];
                                        $next_post = new WP_Query($args_next);
                                        if ($prev_post->have_posts()) {
                                                $prev_post->the_post();
                                                echo '<a id="prevmonth" href="' . get_permalink() . '" title="Tuần trước">Tuần trước</a>';
                                                wp_reset_postdata();
                                                echo ' - ';
                                            }
                                            ?>
                                           <span class="text-danger">
                                            Tuần <?php echo $week_number?> năm <?php echo $week_year?> từ <?php echo $start_str?> đến <?php echo $end_str?>
                                           </span>
                                           <?php
                                           echo ' - ';
                                        if ($next_post->have_posts()) {
                                            $next_post->the_post();
                                            echo '<a id="nextmonth" href="' . get_permalink() . '" title="Tuần sau">Tuần sau</a>';
                                            wp_reset_postdata();
                                        }
                                        }
                                           ?>
                                </h3>
                                <div class="text-center m-bottom week-des"></div>
                                <div class="table-responsive">
                                  <table class="table table-striped table-bordered table-hover">
                                    <colgroup><col width="100px"></colgroup>
                                    <thead>
                                    <tr>
                                        <th class="text-center">Thứ/Ngày</th>
                                        <th>Buổi</th>
                                        <th>Giờ</th>
                                        <th>Nội dung</th>
                                        <th class="nowrap">Thành phần/Mời dự</th>
                                        <th>Địa điểm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $thu_2 = get_field('thứ_hai');
                                    if ($thu_2) { 
                                        $sang = $thu_2['sang'];
                                        $chieu = $thu_2['chiều'];
                                        ?>
                                        <tr>
                                            <td class="active text-center" rowspan="2">Thứ hai<br><?php echo $start_str?></td>
                                            <td rowspan="1" valign="center">Sáng</td>
                                            <td><?php echo esc_html($sang['gio'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($sang['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($sang['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($sang['dịa_diểm'])?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">Chiều</td>
                                             <td><?php echo esc_html($chieu['giờ'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($chieu['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($chieu['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($chieu['dịa_diểm'])?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                     <?php
                                    $thu_3 = get_field('thứ_ba');
                                    if ($thu_3) { 
                                        $sang = $thu_3['sang'];
                                        $chieu = $thu_3['chiều'];
                                        ?>
                                        <tr>
                                            <td class="active text-center" rowspan="2">Thứ ba<br><?php echo $thu3->format('d/m/Y') ?></td>
                                            <td rowspan="1" valign="center">Sáng</td>
                                            <td><?php echo esc_html($sang['gio'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($sang['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($sang['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($sang['dịa_diểm'])?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">Chiều</td>
                                             <td><?php echo esc_html($chieu['giờ'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($chieu['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($chieu['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($chieu['dịa_diểm'])?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                     <?php
                                    $thu_4 = get_field('thứ_tu');
                                    if ($thu_4) { 
                                        $sang = $thu_4['sang'];
                                        $chieu = $thu_4['chiều'];
                                        ?>
                                        <tr>
                                            <td class="active text-center" rowspan="2">Thứ tư<br><?php echo $thu4->format('d/m/Y') ?></td>
                                            <td rowspan="1" valign="center">Sáng</td>
                                            <td><?php echo esc_html($sang['gio'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($sang['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($sang['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($sang['dịa_diểm'])?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">Chiều</td>
                                             <td><?php echo esc_html($chieu['giờ'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($chieu['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($chieu['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($chieu['dịa_diểm'])?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    $thu_5 = get_field('thứ_nam');
                                    if ($thu_5) { 
                                        $sang = $thu_5['sang'];
                                        $chieu = $thu_5['chiều'];
                                        ?>
                                        <tr>
                                            <td class="active text-center" rowspan="2">Thứ năm<br><?php echo $thu5->format('d/m/Y') ?></td>
                                            <td rowspan="1" valign="center">Sáng</td>
                                            <td><?php echo esc_html($sang['gio'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($sang['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($sang['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($sang['dịa_diểm'])?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">Chiều</td>
                                             <td><?php echo esc_html($chieu['giờ'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($chieu['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($chieu['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($chieu['dịa_diểm'])?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    $thu_6 = get_field('thứ_sau');
                                    if ($thu_6) { 
                                        $sang = $thu_6['sang'];
                                        $chieu = $thu_6['chiều'];
                                        ?>
                                        <tr>
                                            <td class="active text-center" rowspan="2">Thứ sáu<br> <?php echo $thu6->format('d/m/Y') ?></td>
                                            <td rowspan="1" valign="center">Sáng</td>
                                            <td><?php echo esc_html($sang['gio'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($sang['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($sang['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($sang['dịa_diểm'])?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">Chiều</td>
                                             <td><?php echo esc_html($chieu['giờ'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($chieu['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($chieu['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($chieu['dịa_diểm'])?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                      <?php
                                    $thu_7 = get_field('thứ_bay');
                                    if ($thu_7) { 
                                        $sang = $thu_7['sang'];
                                        $chieu = $thu_7['chiều'];
                                        ?>
                                        <tr>
                                            <td class="active text-center" rowspan="2">Thứ bảy<br><?php echo $thu7->format('d/m/Y') ?></td>
                                            <td rowspan="1" valign="center">Sáng</td>
                                            <td><?php echo esc_html($sang['gio'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($sang['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($sang['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($sang['dịa_diểm'])?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">Chiều</td>
                                             <td><?php echo esc_html($chieu['giờ'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($chieu['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($chieu['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($chieu['dịa_diểm'])?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    $thu_cn = get_field('chu_nhat');
                                    if ($thu_cn) { 
                                        $sang = $thu_cn['sang'];
                                        $chieu = $thu_cn['chiều'];
                                        ?>
                                        <tr>
                                            <td class="active text-center" rowspan="2">Chủ nhật<br><?php echo  $end_str ?></td>
                                            <td rowspan="1" valign="center">Sáng</td>
                                            <td><?php echo esc_html($sang['gio'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($sang['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($sang['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($sang['dịa_diểm'])?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="1">Chiều</td>
                                             <td><?php echo esc_html($chieu['giờ'])?></td>
                                            <td>
                                                <ul style="padding: 0">
                                                    <li>
                                                        <?php echo esc_html($chieu['nội_dung'])?>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><?php echo esc_html($chieu['thanh_phầnmời_dự'])?></td>
                                            <td><?php echo esc_html($chieu['dịa_diểm'])?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                             </table>  
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    Đính kèm: Tải về 
                                    <?php
                                    $file = get_field('dinh_kem');
                                    if ($file) {
                                    ?>
                                    <a href="<?php echo esc_url($file['url']) ?>" rel="nofollow"><?php echo esc_html($file['filename'])?></a>
                                     <?php
                                    }
                                    ?>
                                    </div>
                                </div>
                                <?php
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
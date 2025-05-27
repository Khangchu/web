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
                                                <li id="brcr_2">
                                                     <?php
                                                    $term = get_term_by('id', 78, 'doingucanbo');
                                                    ?>
                                                    <a href="<?php  echo get_term_link($term);?>">
                                                        <span><?php echo esc_html($term->name)?><i class="fa fa-lg fa-angle-right"></i></span>
                                                    </a>
                                                </li>
                                                <li id="brcr_3">
                                                     <?php
                                                    $post_id = get_the_ID();
                                                    $terms = get_the_terms($post_id, 'doingucanbo');
                                                     if (!empty($terms) && !is_wp_error($terms)) {
                                                         foreach ($terms as $term) {
                                                        if ($term->term_id == 78) {
                                                                  continue;
                                                              }
                                                    $term_link = get_term_link( $term );
                                                    ?>
                                                    <a href="<?php echo esc_url( $term_link )?>"><span><?php echo $term->name?><i class="fa fa-lg fa-angle-right"></i></span></a>
                                                    <?php
                                                    }
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
                <div class="row"></div>
                <div class="row wraper">
                    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Thông tin nhân sự
                            </div>
                            <div class="panel-body">
                                <?php
                                 if(have_posts()){
                                     while(have_posts()) { 
                                        the_post();
                                         $avatar = get_field('anh_giang_vien');
                                         $position = get_field('chức_vụ');
                                         $name = get_field('họ_va_ten');
                                         $concurrent = get_field('chức_danh_kiem_nhiệm');
                                         $researchgroup = get_field('nhom_nghien_cuu');
                                         $email = get_field('dịa_chỉ_email');
                                         $introduction = get_field('giới_thiệu');
                                         $typical = get_field('cac_cong_trinh_khoa_học_tieu_biểu');
                                         $teaching = get_field('giảng_dạy');
                                         $research = get_field('linh_vực_nghien_cứu');
                                         $specialized = get_field('nhom_chuyen_mon');
                                         $lab= get_field('lab_nghien_cứu');
                                         
                                     }
                                     ?>
                                     <div class="d-flex flex-dir">
                                    <div class="flex-avatar text-center">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo  esc_url($avatar['url'])  ?>" class="img-thumbnail" data-width="" data-src="<?php echo esc_url($avatar['url']) ?>" onclick="modalShow(&quot;&quot;, &quot;<img style=\&quot;max-width: 500px\&quot; src=&quot; + $(this).data(&quot;src&quot;) + &quot; width=&quot; + $(this).data(&quot;width&quot;) + &quot; />&quot; );" style="max-width: 180px"></a>
                                    </div>
                                    <div class="flex-des">
                                        <h2 class="font-size-h2 hidden">
                                            <span>Thông tin cơ bản</span>
                                        </h2>
                                        <p><b>Họ tên: </b><?php echo esc_html($name); ?></p>
                                        <p></p>
                                        <p><b>Chức vụ: </b><?php echo esc_html($position); ?></p>
                                        <p></p>
                                        <?php
                                         if ($concurrent) {
                                            ?>
                                            <p><b>Chức danh kiêm nhiệm: </b><?php echo esc_html($concurrent); ?></p>
                                            <p></p>
                                            <?php
                                            }
                                        ?>
                                        <?php
                                               foreach ($terms as $term) {
                                                        if ($term->term_id == 78) {
                                                                  continue;
                                                              }
                                                    $term_link = get_term_link( $term );
                                                    ?>
                                                    <p><b>Thuộc đơn vị: </b><a href="<?php echo esc_url( $term_link )?>" title="<?php echo $term->name?>"><?php echo $term->name?></a></p>
                                                    <?php
                                                    }
                                        ?>
                                        <p></p>
                                        <?php
                                         if ($researchgroup) {
                                            ?>
                                            <p><b>Nhóm nghiên cứu: </b><?php echo esc_html($researchgroup); ?></p>
                                            <p></p>
                                            <?php
                                            }
                                        ?>
                                        <?php
                                         if ($email) {
                                            ?>
                                            <p><b>Email: </b><?php echo esc_html($email); ?></p>
                                            <p></p>
                                            <?php
                                            }
                                        ?>
                                </div>
                                </div>
                                     <h2 class="font-size-h2"><span>Lý lịch khoa học</span></h2>
                                     <div class="text-break">
                                        <p>&nbsp;</p>
                                        <figure class='table' style="width:100%;">
                                            <table class="ck-table-resized" style="border-color:hsl(0, 0%, 100%);border-style:solid;">
                                                <colgroup><col style="width:100%;"></colgroup>
                                                <tbody>
                                                    <?php if ($introduction): ?>
                                                        <tr><td style="border-color:hsl(0, 0%, 100%);border-style:solid;height:60.0pt;text-align:justify;width:436pt;"><h1><span style="color:hsl( 216, 97%, 56% );">GIỚI THIỆU</span><br><span style="color:hsl( 216, 97%, 56% );">⸺</span></h1></td></tr>
                                                        <tr><td style="border-color:hsl(0, 0%, 100%);border-style:solid;text-align:justify;width:416pt;"> <?php echo str_replace(['<p>', '</p>'], '', $introduction); ?></td></tr>
                                                    <?php endif; ?>
                                                   <?php if ($typical): ?>
                                                            <tr>
                                                                <td style="border-color:hsl(0, 0%, 100%);border-style:solid;height:60.0pt;text-align:justify;width:436pt;">
                                                                    <h1>
                                                                        <span style="color:hsl(216, 97%, 56%);">CÁC CÔNG TRÌNH KHOA HỌC TIÊU BIỂU</span><br>
                                                                        <span style="color:hsl(216, 97%, 56%);">⸺</span>
                                                                    </h1>
                                                                </td>
                                                            </tr>

                                                            <?php
                                                            // Dùng DOMDocument để xử lý HTML an toàn hơn
                                                            libxml_use_internal_errors(true);
                                                            $dom = new DOMDocument();
                                                            $dom->loadHTML(mb_convert_encoding($typical, 'HTML-ENTITIES', 'UTF-8'));
                                                            libxml_clear_errors();

                                                            $body = $dom->getElementsByTagName('body')->item(0);

                                                            foreach ($body->childNodes as $node) {
                                                                // Lấy HTML của mỗi phần tử con
                                                                $html = $dom->saveHTML($node);

                                                                // Bỏ qua các thẻ rỗng, xuống dòng, khoảng trắng
                                                                if (trim(strip_tags($html)) === '') {
                                                                    continue;
                                                                }

                                                                echo '<tr><td style="border-color:hsl(0, 0%, 100%);border-style:solid;text-align:justify;width:416pt;">' . $html . '</td></tr>';
                                                            }
                                                            ?>
                                                        <?php endif; ?>
                                                           <?php if ($teaching): ?>
                                                            <tr>
                                                                <td style="border-color:hsl(0, 0%, 100%);border-style:solid;height:60.0pt;text-align:justify;width:436pt;">
                                                                    <h1>
                                                                        <span style="color:hsl(216, 97%, 56%);">GIẢNG DẠY</span><br>
                                                                        <span style="color:hsl(216, 97%, 56%);">⸺</span>
                                                                    </h1>
                                                                </td>
                                                            </tr>

                                                            <?php
                                                            // Dùng DOMDocument để xử lý HTML an toàn hơn
                                                            libxml_use_internal_errors(true);
                                                            $dom = new DOMDocument();
                                                            $dom->loadHTML(mb_convert_encoding($teaching, 'HTML-ENTITIES', 'UTF-8'));
                                                            libxml_clear_errors();

                                                            $body = $dom->getElementsByTagName('body')->item(0);

                                                            foreach ($body->childNodes as $node) {
                                                                // Lấy HTML của mỗi phần tử con
                                                                $html = $dom->saveHTML($node);

                                                                // Bỏ qua các thẻ rỗng, xuống dòng, khoảng trắng
                                                                if (trim(strip_tags($html)) === '') {
                                                                    continue;
                                                                }

                                                                echo '<tr><td style="border-color:hsl(0, 0%, 100%);border-style:solid;text-align:justify;width:416pt;">' . $html . '</td></tr>';
                                                            }
                                                            ?>
                                                        <?php endif; ?>
                                                            <?php if ($research): ?>
                                                            <tr>
                                                                <td style="border-color:hsl(0, 0%, 100%);border-style:solid;height:60.0pt;text-align:justify;width:436pt;">
                                                                    <h1>
                                                                        <span style="color:hsl(216, 97%, 56%);">LĨNH VỰC NGHIÊN CỨU</span><br>
                                                                        <span style="color:hsl(216, 97%, 56%);">⸺</span>
                                                                    </h1>
                                                                </td>
                                                            </tr>

                                                            <?php
                                                            // Dùng DOMDocument để xử lý HTML an toàn hơn
                                                            libxml_use_internal_errors(true);
                                                            $dom = new DOMDocument();
                                                            $dom->loadHTML(mb_convert_encoding($research, 'HTML-ENTITIES', 'UTF-8'));
                                                            libxml_clear_errors();

                                                            $body = $dom->getElementsByTagName('body')->item(0);

                                                            foreach ($body->childNodes as $node) {
                                                                // Lấy HTML của mỗi phần tử con
                                                                $html = $dom->saveHTML($node);

                                                                // Bỏ qua các thẻ rỗng, xuống dòng, khoảng trắng
                                                                if (trim(strip_tags($html)) === '') {
                                                                    continue;
                                                                }

                                                                echo '<tr><td style="border-color:hsl(0, 0%, 100%);border-style:solid;text-align:justify;width:416pt;">' . $html . '</td></tr>';
                                                            }
                                                            ?>
                                                        <?php endif; ?>
                                                            <?php if ($specialized): ?>
                                                            <tr>
                                                                <td style="border-color:hsl(0, 0%, 100%);border-style:solid;height:60.0pt;text-align:justify;width:436pt;">
                                                                    <h1>
                                                                        <span style="color:hsl(216, 97%, 56%);">NHÓM CHUYÊN MÔN</span><br>
                                                                        <span style="color:hsl(216, 97%, 56%);">⸺</span>
                                                                    </h1>
                                                                </td>
                                                            </tr>

                                                            <?php
                                                            // Dùng DOMDocument để xử lý HTML an toàn hơn
                                                            libxml_use_internal_errors(true);
                                                            $dom = new DOMDocument();
                                                            $dom->loadHTML(mb_convert_encoding($specialized, 'HTML-ENTITIES', 'UTF-8'));
                                                            libxml_clear_errors();

                                                            $body = $dom->getElementsByTagName('body')->item(0);

                                                            foreach ($body->childNodes as $node) {
                                                                // Lấy HTML của mỗi phần tử con
                                                                $html = $dom->saveHTML($node);

                                                                // Bỏ qua các thẻ rỗng, xuống dòng, khoảng trắng
                                                                if (trim(strip_tags($html)) === '') {
                                                                    continue;
                                                                }

                                                                echo '<tr><td style="border-color:hsl(0, 0%, 100%);border-style:solid;text-align:justify;width:416pt;">' . $html . '</td></tr>';
                                                            }
                                                            ?>
                                                        <?php endif; ?>
                                                              <?php if ($lab): ?>
                                                            <tr>
                                                                <td style="border-color:hsl(0, 0%, 100%);border-style:solid;height:60.0pt;text-align:justify;width:436pt;">
                                                                    <h1>
                                                                        <span style="color:hsl(216, 97%, 56%);">LAB NGHIÊN CỨU</span><br>
                                                                        <span style="color:hsl(216, 97%, 56%);">⸺</span>
                                                                    </h1>
                                                                </td>
                                                            </tr>

                                                            <?php
                                                            // Dùng DOMDocument để xử lý HTML an toàn hơn
                                                            libxml_use_internal_errors(true);
                                                            $dom = new DOMDocument();
                                                            $dom->loadHTML(mb_convert_encoding($lab, 'HTML-ENTITIES', 'UTF-8'));
                                                            libxml_clear_errors();

                                                            $body = $dom->getElementsByTagName('body')->item(0);

                                                            foreach ($body->childNodes as $node) {
                                                                // Lấy HTML của mỗi phần tử con
                                                                $html = $dom->saveHTML($node);

                                                                // Bỏ qua các thẻ rỗng, xuống dòng, khoảng trắng
                                                                if (trim(strip_tags($html)) === '') {
                                                                    continue;
                                                                }

                                                                echo '<tr><td style="border-color:hsl(0, 0%, 100%);border-style:solid;text-align:justify;width:416pt;">' . $html . '</td></tr>';
                                                            }
                                                            ?>
                                                        <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </figure>
                                     </div>
                                     <?php
                                 }
                                ?>
                            </div>
                        </div>
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
                                            $terms1 = get_terms([
                                                'taxonomy' => 'doingucanbo',
                                                'hide_empty' => false,
                                                'exclude' => [78],
                                            ]);
                                            if (!empty($terms1) && !is_wp_error($terms1)) {
                                                ?>
                                                <?php
                                                foreach ($terms1 as $term) {
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
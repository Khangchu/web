<?php
/*
Template Name: Tìm kiếm nâng cao
*/
get_header("v2");
?><div class="section-body">
    <div>
        <section>
            <div class="container" id="body">
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
                                                    <a href="/?post_type=any&s=">
                                                        <span>Tìm kiếm<i class="fa fa-lg fa-angle-right"></i></span>
                                                    </a>
                                                </li>
                                            <li id="brcr_2">
                                                    <?php
                                                    // Lấy post type từ query string
                                                    $selected_post_type = isset($_GET['search_post_type']) ? sanitize_text_field($_GET['search_post_type']) : '';
                                                    $post_type_name = 'Không xác định';

                                                    if ($selected_post_type) {
                                                        if ($selected_post_type === 'any') {
                                                            $post_type_name = 'Tìm kiếm trên site';
                                                        } elseif ($selected_post_type === 'page') {
                                                            $post_type_name = 'Giới thiệu';
                                                        } else {
                                                            $post_type_obj = get_post_type_object($selected_post_type);
                                                            $post_type_name = $post_type_obj ? esc_html($post_type_obj->labels->name) : 'Post type không hợp lệ';
                                                        }

                                                        // Lấy URL tìm kiếm với post_type
                                                        $post_type_search_url = function_exists('trp_get_url_for_language') 
                                                            ? trp_get_url_for_language(null, add_query_arg(['post_type' => $selected_post_type, 's' => ''], home_url('/')))
                                                            : add_query_arg(['post_type' => $selected_post_type, 's' => ''], home_url('/'));
                                                        ?>
                                                        <a href="<?php echo esc_url($post_type_search_url); ?>">
                                                            <span><?php echo esc_html($post_type_name); ?><i class="fa fa-lg fa-angle-right"></i></span>
                                                        </a>
                                                    <?php } else {
                                                        echo '<span>Không tìm thấy post type.</span>';
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
                <div class="row wraper ">
                    
                </div>
                <div class="row"></div>
            </div>
        </section>
    </div>
</div>
<?php get_footer("footer"); ?>
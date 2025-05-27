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
                                                    <a href="<?php the_permalink() ?>">
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
                                                  <li><h3><a href="<?php echo get_term_link($term); ?>"><?php echo esc_html($term->name); ?></a></h3></li>
                                                  <?php
                                              }
                                              ?>
                                          <?php
                                          }
                                        ?>
                            </ol>
                        </div>
                        <?php
                         if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        
                                    </table>
                                </div>
                                <?php
                             }
                          }
                        
                        ?>
                    </div>
                    <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tìm kiếm
                            </div>
                            <div class="panel-body">
                                <form action="/vi/suborgans/viewsearch/" method="get" role="form">
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
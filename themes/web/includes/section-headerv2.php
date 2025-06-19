<div class="menu-top-scroll menu-fixed">
    <header class="home-header">
        <div class="header-bar-search search-form" id= "flisearchform" style= "display:none">
            <div class="wraper">
                <div class="container">
                    <div class="search-form-inner">
                            <form action="<?php bloginfo('url'); ?>"  name="form_search" method="get" id="form_search" role="form">
                            <div class="form-group">
                                 <label>Nhập từ khóa tìm kiếm</label>
                                 <div class="input-group">
                                    <input type="hidden" name="post_type" value="any">
                                    <input type="text" class= "form-control" name="s" maxlength="60" placeholder="Tìm...">
                                    <div class="input-group-addon">
                                        <button class= "btn btn-primary">
                                            <i class="fa fa-search fa-flip-horizontal" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                 </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-header2 home-header">
            <div class="wraper">
                <div id="header">
                    <div class="logo">
                        <div class="test-site">
                            <?php
                                // Lấy URL trang chủ theo ngôn ngữ hiện tại
                                $home_url = function_exists('trp_get_translated_home_url') 
                                    ? trp_get_translated_home_url() // Hàm của TranslatePress
                                    : home_url('/'); // Fallback nếu không có TranslatePress
                                ?>
                            <a href="<?php echo esc_url($home_url); ?>" title ="Trường Điện - Điện tử">
                                  <?php
                                $header_page_id = 1047
                                ?>
                                <img src='<?php echo get_field('logo', $header_page_id)['url'] ?>' alt="Trường Điện - Điện tử"></a>
                                </a>
                            <ul class="text-sologan">
                                <li class="bo">
                                    <a href="<?php echo esc_url($home_url); ?>">Đại học Bách khoa Hà Nội</a>
                                </li>
                                <li class="cuc">
                                    <a href="<?php echo esc_url($home_url); ?>">Trường Điện - Điện tử</a>
                                </li>
                            </ul>
                            <ul class="text-modile">
                                <li class="dong">
                                <a href="<?php echo esc_url($home_url); ?>">Đại học</a>
                            </li>
                                <li class="dong">
                            <a href="<?php echo esc_url($home_url); ?>">Bách khoa Hà Nội</a>
                            </li>
                                <li class="line">
                            <a href="<?php echo esc_url($home_url); ?>">Trường Điện - Điện tử</a>
                            </li>
                        </ul>
                        </div>
                        
                    </div>
                    <div class="right-top">
                        <div class="menu_topright">
                          <ul>
                                <?php
                                $now = new DateTime();
                                $tuan = (int) $now->format('W');
                                $nam  = (int) $now->format('o');
                                $args = [
                                    'post_type'      => 'workcalendar',
                                    'posts_per_page' => 1,
                                    'meta_query'     => [
                                        [
                                            'key'     => 'số_tuần',
                                            'value'   => $tuan,
                                            'compare' => '=',
                                            'type'    => 'NUMERIC',
                                        ],
                                        [
                                            'key'     => 'nam',
                                            'value'   => $nam,
                                            'compare' => '=',
                                            'type'    => 'NUMERIC',
                                        ],
                                    ],
                                ];

                                $query = new WP_Query($args);
                                $link = '#'; // mặc định nếu không tìm thấy bài

                                if ($query->have_posts()) {
                                    $query->the_post();
                                    $link = get_permalink();
                                    wp_reset_postdata();
                                }
                                ?>
                                <li><a href="<?= esc_url($link); ?>">Lịch công tác</a></li>
                                <li><a href="<?php the_permalink(781)?>" title= "Thư viện ảnh" >Thư viện ảnh</a></li>
                                <li><a href="<?php the_permalink(769)?>" title= "Video">Video</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rsearch">
                        <a href="#flisearchform" class="searchbtn">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="languages">
                        <div class="language">
                        <a href="/index.php" class="active" title= "Tiếng việt" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/vi.png');"></a>
                           <?php
                        $current_url = home_url(add_query_arg([], $_SERVER['REQUEST_URI']));
                        $english_url = '';
                        if (function_exists('trp_get_url_for_language')) {
                            $english_url = trp_get_url_for_language('en_US', $current_url);
                        } else {
                            $english_url = str_replace('/vi/', '/en/', $current_url);
                            if ($current_url === home_url('/')) {
                                $english_url = home_url('/en/');
                            }
                        }
                        ?>

                        <a href="<?php echo esc_url($english_url); ?>" title="English" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/img/en.png'); ?>');"></a>


                        </div>
                    </div>
                    <button type= "button" class= "btn btn-toggle-mobile-menu" data-toggle="collapse" data-target=".fli-header-mobilecontent">
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span> 
                    </button>
                </div>
            </div>
        </div>
        <div class="mobile-menu-items">
    <div>
        <?php
        wp_nav_menu([
            'theme_location' => 'mobile',
            'menu_class' => 'menu-mobile',
            'container' => false,
            'walker' => new Walker_Mobile_Menu()
        ]);
        ?>
    </div>
    <div class="menu-mobile-bottom"></div>
</div>
    </header>
        <div class="section-nav" style="height: 45px;">
        <div class="wraper">
            <nav class=".section-nav" id="menusite">
                <div class="container">
                    <div class="row">
                        <div class="v2">
                        <?php
    wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,                     // Không có <div> bao quanh
        'menu_id'        => false,                     // Không tạo id cho <ul>
        'menu_class'     => '',                        // Bỏ qua class mặc định
        'items_wrap'     => '<ul class="slimmenu">%3$s</ul>', // Thêm class "khang" vào <ul>
    ]);
    ?>
                        </div>
                    </div>
                </div>
            </div>
            </nav>
    </div>
</div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const searchBtn = document.querySelector(".searchbtn");
    const searchForm = document.querySelector("#flisearchform");

    if (searchBtn && searchForm) {
        searchBtn.addEventListener("click", function (event) {
            event.preventDefault();
            searchForm.classList.toggle("show");
        });
    }
});
document.addEventListener("DOMContentLoaded", function () {
    const searchBtn = document.querySelector(".btn-toggle-mobile-menu");
    const searchForm = document.querySelector(".mobile-menu-items");

    if (searchBtn && searchForm) {
        searchBtn.addEventListener("click", function (event) {
            event.preventDefault();
            searchForm.classList.toggle("active");
        });
    }
});
jQuery(document).ready(function($) {
    $('.slimmenu').slimmenu({
        resizeWidth: '800',
        collapserTitle: 'Main Menu',
        animSpeed: 'medium',
        indentChildren: true,
        childrenIndenter: '&raquo;'
    });

    // Lấy URL từ breadcrumb tại li#brcr_1 a
    var breadcrumbUrl = $('#brcr_1 a').prop('href');
    breadcrumbUrl = breadcrumbUrl.replace(/\/$/, ''); // Bỏ dấu "/" cuối nếu có
    console.log('Breadcrumb URL:', breadcrumbUrl);

    // So sánh URL breadcrumb với từng menu item
    $('.slimmenu li a').each(function() {
        var menuUrl = $('<a>').prop('href', this.href).prop('href').replace(/\/$/, '');
        if (menuUrl === breadcrumbUrl) {
            $(this).parent().addClass('current');
            console.log('Menu URL:', menuUrl);
        }
    });
});


const header = document.querySelector('.menu-top-scroll');
const placeholder = document.createElement('div');
placeholder.style.height = header.offsetHeight + 'px';
placeholder.style.display = 'none';
header.parentNode.insertBefore(placeholder, header);

window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
        header.classList.add('sticky');
        placeholder.style.display = 'block';
    } else {
        header.classList.remove('sticky');
        placeholder.style.display = 'none';
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const arrows = document.querySelectorAll(".custom-fa.fa-angle-down, .custom-fa.fa-angle-up");

    arrows.forEach(arrow => {
        arrow.addEventListener("click", function (e) {
            e.preventDefault();

            const currentArrow = this;
            const currentLi = currentArrow.closest("li");
            const currentSubmenu = currentLi.querySelector("ul");

            if (!currentSubmenu) return;

            const siblingLis = Array.from(currentLi.parentElement.children).filter(li => li !== currentLi);

            // Đóng các submenu cùng cấp
            siblingLis.forEach(li => {
                const submenu = li.querySelector("ul");
                const icon = li.querySelector(".custom-fa.fa-angle-up");

                if (submenu) {
                    jQuery(submenu).slideUp(300);
                    li.classList.remove("active");
                }

                if (icon) {
                    icon.classList.remove("fa-angle-up");
                    icon.classList.add("fa-angle-down");
                }
            });

            // Toggle submenu hiện tại
            const isVisible = jQuery(currentSubmenu).is(":visible");
            if (isVisible) {
                jQuery(currentSubmenu).slideUp(300);
                currentArrow.classList.remove("fa-angle-up");
                currentArrow.classList.add("fa-angle-down");
                currentLi.classList.remove("active");
            } else {
                jQuery(currentSubmenu).slideDown(300);
                currentArrow.classList.remove("fa-angle-down");
                currentArrow.classList.add("fa-angle-up");
                currentLi.classList.add("active");
            }
        });
    });
});
</script>




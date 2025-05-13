<div class="main-header custom-gradient menu-fixe">
    <header class="home-header">
        <div class="header-bar-search search-form" id= "flisearchform" style= "display:none">
            <div class="wraper">
                <div class="container">
                    <div class="search-form-inner">
                        <form action="/seek/" method= "get">
                            <div class="form-group">
                                 <label>Nhập từ khóa tìm kiếm</label>
                                 <div class="input-group">
                                    <input type="text" class= "form-control" name="q" maxlength="60" placeholder="Tìm...">
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
        <!-- <div class="site-banner"></div>
        <div class="section-header-bar">
            <div class="wraper">
                <div class="header-bar">
                    <div class="header-nav-inner">
                        <div class= "contactDefault"></div>
                        <div class ="social-icons">
                         <div id="socialList" class="content">
                            <ul class="socialList">
                                <li><a href="http://www.facebook.com/nukeviet" target="_blank" rel="noopener noreferrer nofollow"><i class="fa fa-lg fa-facebook"></i></a></li>
                                <li><a href="https://www.youtube.com/user/nukeviet" target="_blank" rel="noopener noreferrer nofollow"><i class="fa fa-lg fa-youtube-play"></i></a></li>
                                <li><a href="https://twitter.com/nukeviet" target="_blank" rel="noopener noreferrer nofollow"><i class="fa fa-lg fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        </div>
                        <div class ="personalArea">
                            <span><a title="Đăng nhập - Đăng ký" class="pa pointer button" data-toggle="tip" data-target="#guestBlock_nv1" data-click="y" data-callback="loginFormLoad"><em class="fa fa-user fa-lg"></em><span class="hidden">Đăng nhập</span></a></span>
                        </div>
                    </div>
                    <div id="tip" data-content>
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="section-header home-header">
            <div class="wraper">
                <div id="header">
                    <div class="logo">
                        <div class="test-site">
                            <a href="/index.php" title ="Trường Điện - Điện tử">
                                <img src='<?php echo get_template_directory_uri(); ?>/img/logo-dhbk-1-02_130_191 (1).png' alt="Trường Điện - Điện tử"></a>
                            <ul class="text-sologan">
                                <li class="bo">
                                    <a href="/index.php">Đại học Bách khoa Hà Nội</a>
                                </li>
                                <li class="cuc">
                                    <a href="/index.php">Trường Điện - Điện tử</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="right-top">
                        <div class="menu_topright">
                            <ul>
                                <li><a href="">Lịch công tác</a></li>
                                <li><a href="" title= "Thư viện ảnh" >Thư viện ảnh</a></li>
                                <li><a href="" title= "Video">Video</a></li>
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
                            <a href="" class="active" title= "Tiếng việt" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/vi.png');"></a>
                            <a href=""  title= "English" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/en.png');"></a>

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
        <div class="mobile-menu-items"></div>
    </header>
    <div class="section-nav home-header-nav">
        <div class="wraper">
            <div class="container">
                <div class="row">
                    <div class="bg box-shadow">
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
jQuery(document).ready(function($) {
    $('.slimmenu').slimmenu({
        resizeWidth: '800',
        collapserTitle: 'Main Menu',
        animSpeed: 'medium',
        indentChildren: true,
        childrenIndenter: '&raquo;'
    });
});

</script>


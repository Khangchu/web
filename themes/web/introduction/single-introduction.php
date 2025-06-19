
<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container about" id="body">
                <nav class="third-nav wraper">
                    <div class="row">
                        <div class="bg">
                            <div class="clearfix">
                                <div class="col-xs-24 col-sm-18 col-md-18">
                                    <div class="breadcrumbs-wrap">
                                        <div class="display">
                                        <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                        <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php echo get_permalink()?>"><span>Giới thiệu<i class="fa fa-lg fa-angle-right"></i></span></a></li></ul>
                                        </div>
                                        <ul class="sub-breadcrumbs"></ul>
                                    </div>
                                </div>
                                <div class="headerSearch hiden col-sx-24 col-sm-6 col-md-6"></div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="row wraper">
                    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
                        <div class="page panel panel-default" itemtype="http://schema.org/Article" itemscope>

<div class="panel-body css-panel-body">
    	<h1 class="title margin-bottom-lg hidden-desktop color-h1-red" itemprop="headline"><?php the_title()?></h1>
        <div class="hidden hide d-none" itemprop="author" itemtype="http://schema.org/Organization" itemscope="">
            <span itemprop="name">Trường Điện - Điện tử</span>
        </div>
        <span class="hidden hide d-none" itemprop="datePublished"><?=get_the_date('d/m/Y h:i:s') ?></span>
        <span class="hidden hide d-none" itemprop="dateModified"><?=get_the_date('d/m/Y h:i:s') ?></span>
        <span class="hidden hide d-none" itemprop="mainEntityOfPage"><?php the_permalink()?></span>
        <span class="hidden hide d-none" itemprop="image">/themes/smse/images/no_image.gif</span>
        <div class="hidden hide d-none" itemprop="publisher" itemtype="http://schema.org/Organization" itemscope="">
            <span itemprop="name">Trường Điện - Điện tử</span>
            <span itemprop="logo" itemtype="http://schema.org/ImageObject" itemscope="">
                <span itemprop="url">https://seee.hust.edu.vn/uploads/seee/logo-dhbk-1-02_130_191.png</span>
            </span>
        </div>
		<div class="clear"></div>

        <?php
if(have_posts(  )){
    while(have_posts()) {
        the_post();
        ?>
		<div class="css-page">
			<div id="page-bodyhtml" class="bodytext margin-bottom-lg">
			 	<h1 class="title margin-bottom-lg hidden-mobile color-h1-red" itemprop="headline"><?php the_title()?></h1>
                 <?php
                    $noi_dung = get_the_content();
                    $noi_dung = preg_replace('/<p([^>]*)>/', '<p class="custom-class"$1 style="text-align: justify;">', $noi_dung);
                    echo $noi_dung;
                    ?>
		    	<p style="text-align: justify;"></p>
                <p>&nbsp;</p>
		 	</div>
	 	</div>
<?php 
    }
}
?>
    </div>
                        </div>
                        <div class="page panel panel-default">
                            <div class="panel-body">
                                <ul class="nv-list-item">
                                    <?php
                                    $args = [
                                        'post_type' => 'introduction',
                                        'post__not_in' => [517,507],
                                        'posts_per_page' => 5,
                                    ];
                                    
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                            ?>
                                            <li>
                                            <em class="fa fa-angle-double-right">&nbsp;</em>
                                            <h3><a title="<?php echo get_the_title() ?>" href="<?php echo get_permalink()?>"><?php echo get_the_title() ?></a></h3>
                                            </li>
                                        <?php
                                        }
                                        wp_reset_postdata();
                                    } else {
                                        echo 'Không có trang nào dùng template này.';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left">
                        <div class="clearfix metismenu custom-about-menu">
                            <aside class="sidebar">
                                <nav class="sidebar-nav">
                                    <ul class="menu_56">
                                <?php
// Lấy ID bài viết hiện tại
$current_id = get_the_ID();
?>

<li class="<?php echo ($current_id == 517) ? 'current' : ''; ?>">
    <a href="<?php the_permalink(517); ?>" title="<?php echo get_the_title(517); ?>"><?php echo get_the_title(517); ?></a>
    <span class="fa arrow expand" style="margin-top: -36px;"></span>
    <ul class="collapse" aria-expanded="false" style="height: 0px;">
        <?php
        $args = [
            'post_type' => 'introduction',
            'post__not_in' => [517,507],
            'post__in' => [529,531,505,513,501],
            'posts_per_page' => -1,
        ];

        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <li class="custom-metis-sub-item <?php echo ($current_id == get_the_ID()) ? 'current' : ''; ?>">
                    <a id="height-a" title="<?php echo get_the_title(); ?>" href="<?php the_permalink(); ?>" class="sf-with-ul"><?php the_title(); ?></a>
                </li>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo 'Không có trang nào dùng template này.';
        }
        ?>
    </ul>
</li>

<li class="<?php echo ($current_id == 507) ? 'current' : ''; ?>">
    <a href="<?php the_permalink(507); ?>" title="<?php echo get_the_title(507); ?>"><?php echo get_the_title(507); ?></a>
    <span class="fa arrow expand" style="margin-top: -36px;"></span>
    <ul class="collapse" aria-expanded="false" style="height: 0px;">
        <?php
        $args = [
            'post_type' => 'introduction',
            'post__not_in' => [517,507],
            'post__in' => [511,521,499,523,533,503],
            'posts_per_page' => -1,
        ];

        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <li class="custom-metis-sub-item <?php echo ($current_id == get_the_ID()) ? 'current' : ''; ?>">
                    <a id="height-a" title="<?php echo get_the_title(); ?>" href="<?php the_permalink(); ?>" class="sf-with-ul"><?php the_title(); ?></a>
                </li>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo 'Không có trang nào dùng template này.';
        }
        ?>
         <li class="custom-metis-sub-item">
                    <a id="height-a" title="<?php echo get_the_title(1026); ?>" href="<?php the_permalink(1026); ?>" class="sf-with-ul">Đội Ngũ Cán Bộ</a>
                </li>
    </ul>
</li>

                                    </ul>
                                </nav>
                            </aside>
                        </div>
                        <div class= 'panel panel-default'>
                        <div class="panel-heading">NHỮNG CON SỐ NỔI BẬT</div>
                        <div class="panel-body">
                            <div style="text-align: center;">
                                <span style="font-size:18px;">
                                    <span style="color:rgb(192, 57, 43);">
                                        <strong>THÀNH LẬP NĂM</strong>
                                    </span>
                                </span>
                                <br>
                                <strong>
                                    <span style="font-size:18px;">1956</span>
                                </strong>
                                <br>
                                <span style="text-align:center;">năm 
                                    <span style="color:rgb(192, 57, 43);">
                                        <strong>2021</strong>
                                    </span> tái cấu trúc thành Trường Điện - Điện tử
                                </span>
                                <br>
                                <br>
                                <span style="font-size:18px;">
                                    <span style="text-align:center;">
                                        <span style="color:rgb(192, 57, 43);">
                                            <strong>ĐÀO TẠO</strong>
                                        </span>
                                    </span>
                                </span>
                                <br>
                                <span style="text-align:center;">
                                    <strong>
                                        <span style="font-size:18px;">9.000 +</span>
                                    </strong>
                                </span>
                                <br>sinh viên, 
                                <span style="font-size:14px;">
                                    <strong>650 +</strong>
                                </span> học viên cao học và 
                                <span style="font-size:14px;">
                                    <strong>70 +</strong>
                                </span> nghiên cứu sinh
                                <br>
                                <br>
                                <span style="font-size:14px;">
                                    <strong>04</strong>
                                </span> Khoa,
                                <strong>
                                    <span style="font-size:14px;">02</span>
                                </strong> Trung tâm
                                <br>
                                <span style="color:rgb(192, 57, 43);">
                                    <strong>
                                        <span style="font-size:16px;">22</span>
                                    </strong>
                                </span>&nbsp;chương trình đào tạo
                                <br>
                                <strong>
                                    <span style="font-size:16px;">13</span>
                                </strong> chương trình cử nhân/kĩ sư (
                                    <strong>
                                        <span style="color:rgb(192, 57, 43);">
                                            <span style="font-size:16px;">09</span>
                                        </span>
                                    </strong> chương trình ELITECH), 
                                    <strong>
                                        <span style="font-size:16px;">05</span>
                                    </strong> chương trình thạc sĩ, <strong>
                                        <span style="font-size:16px;">04</span>
                                    </strong> chương trình tiến sĩ
                                    <br>
                                    <br>
                                    <span style="text-align:center;">
                                        <span style="font-size:18px;">
                                            <span style="color:rgb(192, 57, 43);">
                                                <strong>HỢP TÁC</strong>
                                            </span>
                                        </span>
                                    </span>
                                    <br>
                                    <span style="text-align:center;">
                                        <strong>
                                            <span style="font-size:16px;">&gt; 50</span>
                                        </strong>
                                    </span>
                                    <br>doanh nghiệp&nbsp;cơ sở giáo dục nghiên cứu trong và ngoài nước
                                    <br>
                                    <span style="text-align:center;">
                                        <strong>
                                            <span style="font-size:16px;">06 </span>
                                        </strong>
                                    </span>tháng thực tập doanh nghiệp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer('footer') ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const arrows = document.querySelectorAll(".arrow.expand");

    arrows.forEach(arrow => {
        arrow.addEventListener("click", function (e) {
            e.preventDefault();
            const parentLi = this.closest("li");
            const submenu = parentLi.querySelector("ul.collapse");
            if (!submenu) return;
            parentLi.classList.toggle("active");
            submenu.classList.toggle("in");
            const isExpanded = submenu.classList.contains("in");
            submenu.setAttribute("aria-expanded", isExpanded);
            submenu.style.height = isExpanded ? submenu.scrollHeight + "px" : "0px";
        });
    });
});

</script>


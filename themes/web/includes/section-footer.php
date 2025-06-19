<footer class="section-footer-top" id="footer" style= "
    padding-top: 50px;">
    <div class="wraper">
        <div class="container">
            <div class="row">
                <div class="col-xs-24 col-sm-24 col-md-7 padding-style">
                    <div class="panel panel-default">
                        <div class="panel-heading">Bản đồ chỉ dẫn</div>
                        <div class="panel-body">
                        <span style="font-size:16px;">Trường Điện - Điện tử ĐH Bách Khoa Hà Nội</span>
                        <br>
                        <iframe allow="autoplay" allowfullscreen="" frameborder="0" height="130" loading="lazy" referrerpolicy="no-referrer-when-downgrade" sandbox="allow-scripts allow-same-origin" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1809.3259883834749!2d105.84095104716604!3d21.005201460722592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad591575f7bb%3A0x28c483c5b1697381!2zxJDhuqFpIEjhu41jIELDoWNoIEtob2EgSMOgIE7hu5lpIEPhu5VuZyBQYXJhYm9s!5e0!3m2!1svi!2s!4v1666925153384!5m2!1svi!2s" style="border:0;" width="200"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xs-24 col-sm-8 col-md-7">
                    <div class="panel panel-default" style="margin-bottom: 0px">
                        <div class="panel-heading">
                        <a title="Đại học Bách khoa Hà Nội" href="https://hust.edu.vn" target="_blank" rel="noopener noreferrer nofollow">Đại học Bách khoa Hà Nội</a>
                        </div>
                    </div>
                    <div class="panel panel-default">
                    <div class="panel-heading">Mạng xã hội</div>
                    <div class="panel-body">
		            <div id="socialList" class="content">
                        <ul class="socialList">
                            <?php 
                            $footer_id_page = 1047;
                            $link_f = get_field('link_f', $footer_id_page)['url'];
                            $link_y = get_field('link_y', $footer_id_page)['url'];
                            $link_x = get_field('link_x', $footer_id_page)['url'];
                            $link_l = get_field('link_l', $footer_id_page)['url'];
                            $link_i = get_field('link_i', $footer_id_page)['url'];
                            $copyright = get_field('bản_quyền', $footer_id_page)
                            ?>
                            <li><a href="<?= esc_url($link_f) ?>" target="_blank" rel="noopener noreferrer nofollow" class="icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="<?= esc_url($link_y) ?>" target="_blank" rel="noopener noreferrer nofollow" class="icon"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="<?= esc_url($link_x) ?>" target="_blank" rel="noopener noreferrer nofollow" class="icon" ><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="<?= esc_url($link_l) ?>" target="_blank" rel="noopener noreferrer nofollow" class="icon"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="<?= esc_url($link_i) ?>" target="_blank" rel="noopener noreferrer nofollow" class="icon"><i class="fa-brands fa-linkedin"></i></a></li>
                         </ul>
                    </div>
	                </div>
                    </div>
                </div>
                <div class="col-xs-24 col-sm-8 col-md-6 css-block-footer">
                <div class="panel panel-default">
	             <div class="panel-heading" style="padding-left: 30px;">Đơn vị trực thuộc</div>
	                <div class="panel-body" style="padding-left: 30px;">
		                <div class="menu_footer">
	                        <ul>
	    	                    <li><a href="/vi/khoa-trung-tam/" title="Khoa - Trung tâm">Khoa - Trung tâm</a></li>
	                        </ul>
                    </div>
	                    </div>
                    </div>
                </div>
                <div class="col-xs-24 col-sm-8 col-md-4" style="padding-right: 0px;">
                <div class="panel panel-default">
	            <div class="panel-heading" style="white-space: nowrap;">Sơ đồ trang web</div>
	            <div class="panel-body">
		        <div class="content">
		        <div class="rss-footer">
		            <a href="<?php the_permalink(1088)?>">Xem sơ đồ trang</a>
	            </div>
                </div>
	            </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<nav class="footer-bttop">
        <div class="bttop">
            <a class="pointer"><em class="fa fa-angle-double-up fa-lg"></em></a>
        </div>
</nav>
<nav class="section-footer-botto, footerNav2">
<div class="wraper">
            <div class="container">
                <div class="col-md-5 col-sm-5 col-xs-24" style="padding-left: 0px"></div>
                <div class="col-md-19 col-sm-19 col-xs-24 css-banquyen"><?php echo $copyright?>
</div>
                <div class="bttop hidden">
                    <a class="pointer"><i class="fa fa-eject fa-lg"></i></a>
                </div>
            </div>
        </div>
</nav>

<nav class="footerNav3">
<div class="wraper">
            <div class="container">
                <!--<div class="col-md-5 col-sm-5 col-xs-24" style="padding-left: 0px"></div>-->
                <div style="text-align:center padding: 10px;" class=" css-banquyen"> <p style="
    text-align: center;
    font-weight: bold;
    margin: 5px 0;
">Copyright © 2025 SEEE. All rights reserved. Developed by <a style="color: #c02135" href="https://www.minastik.com/"  target="_blank">Minastik</a>.</p>

</div>
                <!--<div class="bttop hidden">-->
                <!--    <a class="pointer"><i class="fa fa-eject fa-lg"></i></a>-->
                <!--</div>-->
            </div>
        </div>
</nav>
<script>
jQuery(document).ready(function($) {
    $("#totop, #bttop, .bttop").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });
});
</script>

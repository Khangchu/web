<?php
/*
Template Name: Tuyển sinh 
*/
?>
<?php
$term = get_term_by('id', 21, 'tuyensinh');
 wp_redirect(get_term_link($term));
 exit;
?>
<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container tuyen-sinh" id= "body">
                <nav class="third-nav wraper">
                    <div class="row">
                        <div class="bg">
                            <div class="clearfix">
                                <div class="col-xs-24 col-sm-18 col-md-18">
                                    <div class="breadcrumbs-wrap">
                                        <div class="display">
                                            <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                            <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php get_permalink()?>"><span><?php echo get_the_title( )?><i class="fa fa-lg fa-angle-right"></i></span></a></li></ul>
                                        </div>
                                        <ul class="sub-breadcrumbs"></ul>
                                    </div>
                                </div>
                                <div class="headerSearch hidden col-sx-24 col-sm-6 col-md-6"><div class="input-group">
                                        <input type="text" class="form-control" maxlength="60" placeholder="Tìm kiếm..."><span class="input-group-btn"><button type="button" class="btn btn-info" data-url="/vi/seek/?q=" data-minlength="3" data-click="y"><em class="fa fa-search fa-lg"></em></button></span>
                                    </div></div>
                            </div>
                        </div>  
                    </div>
                </nav>
                <div class="wraper"><div class="row"><div class="col-md-24"></div></div></div>
                <div class="row header-css"></div>
            <div class="row"></div>
            <div class="wraper">
                <div class="row">
                    <div class="col-md-24">
                        <div class="section-home-intro">
                            <div class="text-center"><h2><a href="" title=""></a></h2></div>
                            <div class="ds-flex padding-ds">
                                <div class="height-home img-hover-zoom">
                                    <a href="">
                                    <?php if( get_field('logo') ) { ?> 
                                    <img alt="" src="<?php  echo get_field('logo')['url']  ?>">
                                    <?php } ?>
                                    </a>
                                </div>
                            <div class="content-block">
                                <h3>
                                    <div style="text-align: justify; font-weight:400">
                                        <table class="MsoTableGrid" style= "border-collapse:collapse; border:none">
                                            <tbody>
                                               <tr>
                                                    <td style="border-bottom:1px solid black; width:623px; padding:0cm 7px 0cm 7px; border-top:1px solid black; border-right:1px solid black; border-left:1px solid black">
                                                    <?php if( get_field('ảnh_bảng_1') ) { ?> 
                                                    <img alt="" src="<?php  echo get_field('ảnh_bảng_1')['url']  ?>" height="640" width="860">
                                                    <?php } ?> 
                                                    </td>
                                               </tr>
                                               <tr>
                                                <td style="border-bottom:1px solid black; width:623px; padding:0cm 7px 0cm 7px; border-top:none; border-right:1px solid black; border-left:1px solid black">
                                                    <span style="font-size:12pt">
                                                        <span style="line-height:115%">
                                                            <span style="font-family:Aptos,sans-serif">Được tổ chức xếp hạng các trường đại học thế giới World University Ranking xếp hạng TOP350 trên thế giới, Trường Điện – Điện tử là đơn vị đào tạo và nghiên cứu hàng đầu Việt Nam trong lĩnh vực Điện, Tự động hóa, Điện tử, Truyền thông, Kỹ thuật máy tính, Kỹ thuật Y sinh, Đa phương tiện.</span>
                                                        </span>
                                                    </span>
                                                    <br>
                                                    <span style="font-size:12pt">
                                                        <span style="line-height:115%">
                                                            <span style="font-family:Aptos,sans-serif">Trường Điện – Điện tử với truyền thống lịch sử hình thành phát triển gắn liền với sự phát triển của Đại học Bách Khoa Hà Nội, luôn tự hào đã có góp phần không nhỏ vào công cuộc xây dựng, bảo vệ đất nước cũng như quá trình công nghiệp hóa, hiện đại hóa đất nước.</span>
                                                        </span>
                                                    </span>
                                                    <br>
                                                    <span style="font-size:12pt">
                                                        <span style="line-height:115%">
                                                            <span style="font-family:Aptos,sans-serif">Trường Điện – Điện tử đào tạo nghiên cứu trong những lĩnh vực khoa học công nghệ cốt lõi của nền công nghiệp 4.0 như Chip bán dẫn; Năng lượng xanh; Tự động hóa và robotics; Mạng truyền thông thế hệ mới; Trí tuệ nhân tạo; Kỹ thuật Y sinh.</span>
                                                        </span>
                                                    </span>
                                                </td>
                                               </tr>
                                               <tr>
                                                <td style="border-bottom:1px solid black; width:623px; padding:0cm 7px 0cm 7px; border-top:none; border-right:1px solid black; border-left:1px solid black">
                                                    <span style="font-size:12pt">
                                                        <span style="line-height:115%">
                                                            <span style="font-family:Aptos,sans-serif">Trường Điện – Điện tự hào với những con số thông kê ấn tượng:</span>
                                                        </span>
                                                    </span>
                                                    <br>			
                                                    <span style="font-size:12pt">
                                                        <span style="line-height:115%">
                                                            <span style="font-family:Aptos,sans-serif">
                                                                <b>
                                                                    <span style="color:red">TOP 350</span>
                                                                </b> trong bảng xếp hạng thế giới QS World University Ranking</span>
                                                            </span>
                                                        </span>
                                                        <br>			
                                                        <span style="font-size:12pt">
                                                            <span style="line-height:115%">
                                                                <span style="font-family:Aptos,sans-serif">
                                                                    <b>
                                                                        <span style="color:red">TOP 1</span>
                                                                    </b> Việt Nam.
                                                                </span>
                                                                </span>
                                                            </span>
                                                            <br>			
                                                            <span style="font-size:12pt">
                                                                <span style="line-height:115%">
                                                                    <span style="font-family:Aptos,sans-serif">
                                                                        <b>
                                                                            <span style="color:red">187</span>
                                                                        </b> Giáo sư, Phó giáo sư, Tiến sĩ chiếm 80% cán bộ của trường hầu hết được đào tạo chuyên sâu tại các nước tiên tiến trên thế giới.</span>
                                                                    </span>
                                                                </span>
                                                                <br>			
                                                                <span style="font-size:12pt">
                                                                    <span style="line-height:115%">
                                                                        <span style="font-family:Aptos,sans-serif">
                                                                            <b><span style="color:red">16</span>
                                                                        </b> Phòng thí nghiệm nghiên cứu và
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <br>		
                                                            <span style="font-size:12pt">
                                                                <span style="line-height:115%">
                                                                    <span style="font-family:Aptos,sans-serif">
                                                                        <b>
                                                                            <span style="color:red">60</span>
                                                                        </b> phòng thí nghiệm đào tạo trên tổng diện tích hơn <b>
                                                                            <span style="color:red">6000m2</span>
                                                                        </b>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <br>			
                                                            <span style="font-size:12pt">
                                                                <span style="line-height:115%">
                                                                    <span style="font-family:Aptos,sans-serif">
                                                                        <b><span style="color:red">9621</span>
                                                                    </b> sinh viên được đào tạo trong
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <br>			
                                                        <span style="font-size:12pt">
                                                            <span style="line-height:115%">
                                                                <span style="font-family:Aptos,sans-serif">
                                                                    <b><span style="color:red">14</span>
                                                                </b> chương trình đào tạo đại học, <b>
                                                                    <span style="color:red">5</span>
                                                                </b> chương trình đào tạo thạc sĩ và <b>
                                                                    <span style="color:red">5</span>
                                                                </b> chương trình đào tạo tiến sĩ.
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <br>			
                                                    <span style="font-size:12pt">
                                                        <span style="line-height:115%">
                                                            <span style="font-family:Aptos,sans-serif">
                                                                <b><span style="color:red">4</span></b> Khoa, <b>
                                                                    <span style="color:red">2</span></b> Trung tâm</span>
                                                                </span>
                                                            </span>
                                                            <br>			
                                                            <br>			
                                                            <span style="font-size:12pt">
                                                                <span style="line-height:115%">
                                                                    <span style="font-family:Aptos,sans-serif">
                                                                        <b><span style="color:red">4</span>
                                                                    </b> ngành đào tạo:</span>
                                                                </span>
                                                            </span>			
                                                            <div style="text-align:justify; margin-left:8px">
                                                                <span style="font-size:11pt">
                                                                    <span style="line-height:107%">
                                                                        <span style="font-family:Aptos,sans-serif">- Kỹ thuật Điện 
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>			
                                                            <div style="text-align:justify; margin-left:8px">
                                                                <span style="font-size:11pt">
                                                                    <span style="line-height:107%">
                                                                        <span style="font-family:Aptos,sans-serif">- Kỹ thuật Điều khiển và tự động hóa</span>
                                                                    </span>
                                                                </span>
                                                            </div>			
                                                            <div style="text-align:justify; margin-left:8px">
                                                                <span style="font-size:11pt">
                                                                    <span style="line-height:107%">
                                                                        <span style="font-family:Aptos,sans-serif">- Điện tử - Viễn thông                                                                            
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>			
                                                            <div style="text-align:justify; margin-left:8px">
                                                                <span style="font-size:11pt">
                                                                    <span style="line-height:107%">
                                                                        <span style="font-family:Aptos,sans-serif">- Kỹ thuật Y sinh
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>			
                                                            <br>			
                                                            <span style="font-size:12pt">
                                                                <span style="line-height:115%">
                                                                    <span style="font-family:Aptos,sans-serif">
                                                                        <b><span style="color:red">12</span>
                                                                    </b> chuyên ngành:
                                                                </span>
                                                            </span>
                                                        </span>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Thiết bị điện</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Hệ thống điện</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Điện công nghiệp và dân dụng</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Tự động hóa công nghiệp</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Điều khiển tự động</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Đo lường và tin học công nghiệp</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Thiết kế vi mạch bán dẫn</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Kỹ thuật máy tính nhúng</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Thông tin vô tuyến</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Mạng thông tin</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Kỹ thuật Đa phương tiện</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                        <div style="text-align:justify; margin-left:8px">
                                                            <span style="font-size:11pt">
                                                                <span style="line-height:107%">
                                                                    <span style="font-family:Aptos,sans-serif">- Kỹ thuật Y sinh</span>
                                                                </span>
                                                            </span>
                                                        </div>			
                                                    </td>
                                               </tr>
                                               <tr>
                                                <td style="border-bottom:1px solid black; width:623px; padding:0cm 7px 0cm 7px; border-top:1px solid black; border-right:1px solid black; border-left:1px solid black">
                                                    <?php if( get_field('ảnh_bảng_2') ) { ?> 
                                                    <img alt="" src="<?php  echo get_field('ảnh_bảng_2')['url']  ?>" height="640" width="860">
                                                    <?php } ?> 
                                                    </td>
                                               </tr>
                                            </tbody>
                                        </table>
                                        <span style="color:rgb(192, 57, 43);"><strong>Chú ý:</strong> Nhấn vào Mã Tuyển sinh để xem thông tin chi tiết chương trình đào tạo và số hotline của các thầy cô phụ trách chương trình đào tạo</span>
                                    </div>
                                </h3>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"></div>
</div>
<?php get_footer('footer') ?>
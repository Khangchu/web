<?php
if(have_posts(  )){
    while(have_posts()) {
        the_post();
        ?>


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
		<div class="css-page">
			<div id="page-bodyhtml" class="bodytext margin-bottom-lg">
			 	<h1 class="title margin-bottom-lg hidden-mobile color-h1-red" itemprop="headline"><?php the_title()?></h1>
                 <?php
                    $noi_dung = get_field('noi_dung');
                    $noi_dung = preg_replace('/<p([^>]*)>/', '<p class="custom-class"$1 style="text-align: justify;">', $noi_dung);
                    echo $noi_dung;
                    ?>
		    	<p style="text-align: justify;"></p>
                <p>&nbsp;</p>
		 	</div>
	 	</div>
    </div>
<?php 
    }
}
?>

<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container nvalbums" id ="body">
                 <nav class="third-nav wraper">
                    <div class="row">
                        <div class="bg">
                        <div class="clearfix">
                            <div class="col-xs-24 col-sm-18 col-md-18">
                                <div class="breadcrumbs-wrap">
                                    <div class="display">
                                        <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                        <ul class="breadcrumbs list-none">
                                            <li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li>
                                            <li id="brcr_1"><a href="<?php the_permalink(781)?>"><span>Thư viện video<i class="fa fa-lg fa-angle-right"></i></span></a></li>
                                            <li id="brcr_2"><a href="<?php the_permalink()?>"><span><?php the_title()?><i class="fa fa-lg fa-angle-right"></i></span></a></li>
                                        </ul>
                                    </div>
                                    <ul class="subs-breadcrumbs"></ul>
                                    <ul class="temp-breadcrumbs hidden" itemscope itemtype="https://schema.org/BreadcrumbList">
                                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                            <a href="https://seee.hust.edu.vn/vi/" itemprop="item" title="Trang chủ"><span itemprop="name">Trang chủ</span></a>
                                            <i class="hidden" itemprop="position" content="1"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="headerSearch hidden col-xs-24 col-sm-6 col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" maxlength="60" placeholder="Tìm kiếm..."><span class="input-group-btn"><button type="button" class="btn btn-info" data-url="/vi/seek/?q=" data-minlength="3" data-click="y"><em class="fa fa-search fa-lg"></em></button></span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </nav>
                <div class="row"></div>
                <div class="row wraper">
                    <div class="col-sm-16 col-md-18 col-sm-push-8 col-md-push-6">
                        <h1 class="margin-bottom"><?php the_title()?></h1>
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container" style="transform: translate3d(0px, 0px, 0px);">
            <div class="pswp__item" style="display: block; transform: translate3d(-1198px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(185px, 233px, 0px) scale(0.654206);"><img class="pswp__img pswp__img--placeholder" src="/assets/seee/nvalbums/pic_cache/cover_a67436dea159a9903f4463e82495ab95.jpg" style="width: 1070px; height: 712px; display: none;"><img class="pswp__img" src="/uploads/seee/nvalbums/images/2024_08/cover.jpg" style="width: 1070px; height: 712px;"></div></div>
            <div class="pswp__item" style="transform: translate3d(0px, 0px, 0px);"><div class="pswp__zoom-wrap" style="transform: translate3d(0px, 0px, 0px) scale(0);"><img class="pswp__img pswp__img--placeholder" src="/assets/seee/nvalbums/pic_cache/cover-copy_e576666a427810ec235be06265306526.jpg" style="width: 1070px; height: 712px; display: none;"><img class="pswp__img" src="/uploads/seee/nvalbums/images/2024_08/cover-copy.jpg" style="display: block; width: 1070px; height: 712px;"></div></div>
            <div class="pswp__item" style="display: block; transform: translate3d(1198px, 0px, 0px);"></div>
        </div>
        <div class="pswp__ui pswp__ui--fit pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter">2 / 2</div>
                <button class="pswp__button pswp__button--close" title="Đóng (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Chia sẻ"></button>
                <button class="pswp__button pswp__button--fs" title="Bật chế độ toàn màn hình"></button>
                <button class="pswp__button pswp__button--zoom" title="Phóng to / thu nhỏ"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Trước">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Tiếp theo">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center">
                    <p>Cover 2</p>
                    <span class="text-primary"><span data-toggle="viewed2">20</span> lượt xem</span>
                </div>
            </div>
        </div>
    </div>
</div>
                        <!-- Image Grid -->
                        <div class="panel panel-default" id="view-slide">
                        <div class="panel-body pb-0">
                       <div class="ab-gird-box" id="gallery" data-pswp-uid="1">
<?php
$images = rwmb_meta('image_advanced_vj35qptz9x', ['size' => 'thumbnail']);
$total_images = count($images);
foreach ($images as $index => $image):
    $caption_id = 'viewed' . ($index + 1);
    $caption = "<p>{$image['title']}</p><span class='text-primary'><span data-toggle='{$caption_id}'>" . (function_exists('getPostViews') ? getPostViews(get_the_ID()) : '0') . "</span> lượt xem</span>";
?>
<figure class="ab-gird-item margin-bottom-lg" style="width: 20%;" onclick="nv_update_picture_views(<?php echo $index + 1 ?>, 'nvalbums');">
    <div class="ab-thumb-wrap margin-bottom">
        <div class="thumb-inner">
            <a href="<?php echo esc_url($image['full_url']) ?>"
               title="<?php echo esc_attr($image['title']) ?>"
               class="thumb-cover"
               style="background-image: url('<?php echo esc_url($image['url']) ?>'); padding-bottom: 80%; width: 200px;"
               data-size="700x466"
               data-caption='<?php echo esc_attr($caption) ?>'>
                <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['title']) ?>" class="hidden">
            </a>
        </div>
    </div>
    <figcaption class="text-center">
        <p><?php echo $image['title'] ?></p>
        <span class="text-primary">
            <span data-toggle="<?php echo $caption_id ?>">
                <?php echo function_exists('getPostViews') ? getPostViews(get_the_ID()) : '0'; ?>
            </span> lượt xem
        </span>
    </figcaption>
</figure>
<?php endforeach; ?>
</div>

                        </div>
                        <div class="panel-footer clearfix">
                            <div class="pull-left">
                                Hiển thị <?php echo $total_images ?> trong tổng số <?php echo $total_images ?> ảnh
                            </div>
                            <div class="pull-right">
                                <i class="fa fa-eye" aria-hidden="true"></i> 127 lượt xem
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="col-sm-8 col-md-6 col-sm-pull-16 col-md-pull-18 css-left"></div>
                </div>
                <div class="row"></div>
            </div>
        </section>
    </div>
</div>
<!-- PhotoSwipe CSS -->
<link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css" />

<!-- PhotoSwipe JS -->
<script src="https://unpkg.com/photoswipe@5/dist/photoswipe.umd.min.js"></script>
<script src="https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.umd.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const lightbox = new PhotoSwipeLightbox({
      gallery: '#gallery',
      children: 'a.thumb-cover',
      pswpModule: PhotoSwipe
    });

    lightbox.on('uiRegister', function () {
      lightbox.pswp.ui.registerElement({
        name: 'custom-caption',
        order: 9,
        isButton: false,
        appendTo: 'root',
        html: '',
        onInit: (el, pswp) => {
          pswp.on('change', () => {
            const currSlide = pswp.currSlide;
            el.innerHTML = currSlide.data.caption || '';
          });
        }
      });
    });

    lightbox.on('itemData', (itemData) => {
      if (!itemData.width || !itemData.height) {
        const size = itemData.element.getAttribute('data-size');
        if (size) {
          const [w, h] = size.split('x');
          itemData.width = parseInt(w);
          itemData.height = parseInt(h);
        }
      }
    });

    lightbox.init();
  });
</script>

<?php get_footer('footer') ?>

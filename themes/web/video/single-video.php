<?php get_header("v2")?>
<div class="section-body">
    <div>
        <section>
            <div class="container videoclips" id= "body">
                      <nav class="third-nav wraper">
                    <div class="row">
                        <div class="bg">
                        <div class="clearfix">
                            <div class="col-xs-24 col-sm-18 col-md-18">
                                                                    <div class="breadcrumbs-wrap">
                                    <div class="display">
                                        <a class="show-subs-breadcrumbs hidden" href="#" onclick="showSubBreadcrumbs(this, event);"><em class="fa fa-lg fa-angle-right"></em></a>
                                        <ul class="breadcrumbs list-none"><li id="brcr_0"><a href="/index.php"><span>Trang chủ<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_1"><a href="<?php the_permalink(769)?>"><span>Thư viện video<i class="fa fa-lg fa-angle-right"></i></span></a></li><li id="brcr_2">
                                        <a href="<?php the_permalink( )?>"><span><?php the_title()?><i class="fa fa-lg fa-angle-right"></i></span></a>
                                        </li></ul>
                                        </li></ul>
                                    </div>
                                    <ul class="subs-breadcrumbs"></ul>
                                    <ul class="temp-breadcrumbs hidden" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/" itemprop="item" title="Trang chủ"><span itemprop="name">Trang chủ</span></a><i class="hidden" itemprop="position" content="1"></i></li>
                                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/news/" itemprop="item" title="Tin Tức"><span class="txt" itemprop="name">Tin Tức</span></a><i class="hidden" itemprop="position" content="2"></i></li><li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="https://seee.hust.edu.vn/vi/news/dao-tao/" itemprop="item" title="Đào tạo"><span class="txt" itemprop="name">Đào tạo</span></a><i class="hidden" itemprop="position" content="3"></i></li>
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
                        <div id="videoDetail">
                            <div class="detailContent clearfix">
                                <h1><?php the_title()?></h1>
                                <div class="message" id="mesHide"></div>
                                <div class="videoplayer">
                                        <div class="video-wrapper">
                                                    <?php
                                                    $video_field = get_field('link_video'); 

                                                    if (is_array($video_field) && !empty($video_field['url'])) {
                                                        $video_url = $video_field['url'];
                                                    } elseif (is_string($video_field)) {
                                                        $video_url = $video_field;
                                                    } else {
                                                        $video_url = '';
                                                    }

                                                    if (filter_var($video_url, FILTER_VALIDATE_URL)) {
                                                        $embed_code = wp_oembed_get($video_url);
                                                        if ($embed_code) {
                                                            // Xoá các thuộc tính không cần
                                                            $embed_code = preg_replace('/\s(width|height|allow|referrerpolicy)="[^"]*"/i', '', $embed_code);
                                                            echo $embed_code;
                                                        } else {
                                                            echo '<p>Không thể hiển thị video. Định dạng không được hỗ trợ.</p>';
                                                        }
                                                    } else {
                                                        echo '<p>URL không hợp lệ hoặc chưa được nhập.</p>';
                                                    }
                                                    ?>
                                                </div>
                                </div>
                            </div>
                            <div id="otherClipsAj">
                                <div class="videoInfo marginbottom15 clearfix">
                                    <div class="cont">
                                        <div class="cont2">
                                            <div class="fl">
                                                <div class="shareFeelings">Hãy chia sẻ cảm xúc của bạn</div>
                                                <a href="#" class="likeButton" data-postid="<?php echo get_the_ID(); ?>" data-action="like">
                                                           <img class="like" src="<?php echo get_template_directory_uri(); ?>/img/pix.gif" alt="" width="15" height="14">
                                                           <span>Thích</span>
                                                        </a>

                                                        <a href="#" class="likeButton" data-postid="<?php echo get_the_ID(); ?>" data-action="dislike">
                                                            <img class="unlike" src="<?php echo get_template_directory_uri(); ?>/img/pix.gif" alt="" width="15" height="14">
                                                            <span>Không thích</span>
                                                        </a>

                                                <a class="likeButton" href="#"><img class="broken" src="<?php echo get_template_directory_uri(); ?>/img/pix (1).gif" alt="" width="15" height="14"><span>liên kết hỏng</span></a>
                                            </div>
                                            <div class="fr">
                                                <div class="viewcount">
                                                    Đã xem: <span><?php echo getPostViews(get_the_ID()); ?></span>
                                                </div>
                                               <?php
                                            $likes = (int) get_field('like');
                                            $dislikes = (int) get_field('dislike');
                                            $total = $likes + $dislikes;
                                            $plike = $total ? round(($likes / $total) * 100) : 0;
                                            $pdislike = 100 - $plike;
                                            ?>

                                            <div style="float: right;">
                                                <div class="image imageunlike">
                                                    <img id="imglike" src="<?php echo get_template_directory_uri(); ?>/img/pix.gif" 
                                                        alt="" class="like" style="width: <?php echo $plike; ?>%;">
                                                </div>
                                                <div class="likeDetail">
                                                    <div class="likeLeft" style="float: left;">
                                                        Thích: <span class="strong" id="ilike"><?php echo $likes; ?></span> <br> 
                                                        <span id="plike"><?php echo $plike; ?>%</span>
                                                    </div>
                                                    <div class="likeRight" style="float: right;">
                                                        Không thích: <span class="strong" id="iunlike"><?php echo $dislikes; ?></span> <br> 
                                                        <span id="punlike"><?php echo $pdislike; ?>%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            </div>
                                        </div>
                                        <div class="socialicon pull-left">
                                            <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
                                           <div class="fb-share-button fb_iframe_widget" 
                                            data-href="<?php the_permalink(); ?>" 
                                            data-layout="button_count" 
                                            fb-xfbml-state="rendered"
                                            fb-iframe-plugin-query="app_id=&container_width=42&href=<?php echo urlencode(get_permalink()); ?>&layout=button_count&locale=vi_VN&sdk=joey">
                                            <span style="vertical-align: bottom; width: 86px; height: 20px;">
                                                <iframe 
                                                    name="fb_share_button"
                                                    width="1000px"
                                                    height="1000px"
                                                    frameborder="0"
                                                    allowtransparency="true"
                                                    allowfullscreen="true"
                                                    scrolling="no"
                                                    allow="encrypted-media"
                                                    src="https://www.facebook.com/v2.5/plugins/share_button.php?app_id=&container_width=42&href=<?php echo urlencode(get_permalink()); ?>&layout=button_count&locale=vi_VN&sdk=joey"
                                                    style="border: none; visibility: visible; width: 86px; height: 20px;">
                                                </iframe>
                                            </span>
                                        </div>
                                            <div id="___plus_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1747810839713" name="I0_1747810839713" src="https://apis.google.com/u/0/se/0/_/+1/sharebutton?plusShare=true&amp;usegapi=1&amp;action=share&amp;size=medium&amp;annotation=bubble&amp;hl=vi&amp;origin=https%3A%2F%2Fseee.hust.edu.vn&amp;url=https%3A%2F%2Fseee.hust.edu.vn%2Fvi%2Fvideoclips%2Fvideo-nha-truong-2024.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fabc-static%2F_%2Fjs%2Fk%3Dgapi.lb.en.UrDN-rBnMgo.O%2Fd%3D1%2Frs%3DAHpOoo8Lt5m-Nn72_E0-4M58GbbhD_y7Yw%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1747810839713&amp;_gfid=I0_1747810839713&amp;parent=https%3A%2F%2Fseee.hust.edu.vn&amp;pfname=&amp;rpctoken=63071266" data-gapiattached="true"></iframe></div><div class="g-plus" data-action="share" data-size="medium" data-annotation="bubble" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>
                                            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="X Post Button" src="https://platform.twitter.com/widgets/tweet_button.2f70fb173b9000da126c79afe2098f02.vi.html#dnt=false&amp;id=twitter-widget-0&amp;lang=vi&amp;original_referer=https%3A%2F%2Fseee.hust.edu.vn%2Fvi%2Fvideoclips%2Fvideo-nha-truong-2024.html&amp;size=m&amp;text=Nh%C3%A0%20tr%C6%B0%E1%BB%9Dng%202024%20-%20Th%C6%B0%20vi%E1%BB%87n%20video&amp;time=1747810843175&amp;type=share&amp;url=<?php echo urlencode(get_permalink()); ?>" style="position: static; visibility: visible; width: 88px; height: 20px;"></iframe>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="hometext"><?php the_title()?></div>
                                    </div>
                                </div>
<div id="idcomment" class="nv-fullbg">
    <div class="row clearfix margin-bottom-lg">
        <div class="col-xs-12 text-left">
            <button type="button" class="btn btn-default btn-sm pull-right" onclick="$('.fa', this).toggleClass('fa-eye fa-eye-slash'),nv_show_hidden('showcomment',2);" title="Ẩn/Hiện ý kiến">
                <em class="fa fa-eye-slash"></em>
            </button>
            <p class="comment-title">
                <em class="fa fa-comments">&nbsp;</em> Ý kiến bạn đọc
            </p>
        </div>
        <div class="col-xs-12 text-right">
            <select class="form-control" onchange="location.href=this.value">
                <option value="#comments" selected>Sắp xếp theo bình luận mới</option>
            </select>
        </div>
    </div>

    <div id="showcomment" class="margin-bottom-lg">
          <?php
                global $post;
                setup_postdata($post);
                $comments = get_comments([
                    'post_id' => $post->ID,
                    'status'  => 'all', 
                ]);
                if (!empty($comments)) {
                    echo '<ul class="comment-list">';
                    $i = count($comments) ;
                    foreach ($comments as $comment) {
                        $comment_like = (int) get_comment_meta($comment->comment_ID, 'like', true);
                        $comment_dislike = (int) get_comment_meta($comment->comment_ID, 'dislike', true);
                        ?>
                        <li class="media" id= "cid_<?php echo $comment->comment_ID;?>">
                            <div class="pull-left">
                                <img src="<?php echo get_template_directory_uri(); ?>../img/no_avatar.png" alt="<?php echo esc_html($comment->comment_author)?>" class="media-object bg-gainsboro" width="40">
                            </div>
                            <div class="media-body">
                                <div class="margin-bottom"><?php echo esc_html($comment->comment_content);?></div>
                                <div class="comment-info clearfix">
                                    <div class="clearfix">
                                        <em class="fa fa-user">&nbsp;</em>
                                        <strong class="cm_item"> <?php echo esc_html($comment->comment_author)?> </strong>
                                        <em class="fa fa-clock-o">&nbsp;</em>
                                        <span class="small"><?php echo esc_html($comment->comment_date) ?></span>
                                    </div>
                              <ul class="comment-tool clearfix">
                                    <li>
                                        <em class="fa fa-reply">&nbsp;</em>
                                        <a href="javascript:void(0);" onclick="nv_comment_reply(event, <?php echo $comment->comment_ID ?>, '<?php echo esc_js($comment->comment_author); ?>')">Trả lời</a>
                                    </li>
                                    <li>
                                        <em class="fa fa-thumbs-o-up">&nbsp;</em>
                                        <a href="javascript:void(0);" onclick="nv_comment_like(event, <?php echo $comment->comment_ID; ?>, '1')">Thích</a>
                                          <span id="like<?php echo $comment->comment_ID ?>"><?php echo $comment_like > 0 ? $comment_like : 0; ?></span>
                                    </li>
                                    <li>
                                        <em class="fa fa-thumbs-o-down">&nbsp;</em>
                                        <a href="javascript:void(0);" onclick="nv_comment_like(event, <?php echo $comment->comment_ID; ?>, '-1')">Không thích</a>
                                        <span id="dislike<?php echo $comment->comment_ID ?>"><?php echo $comment_dislike > 0 ? $comment_dislike : 0; ?></span>
                                    </li>
                                </ul>
                                </div>
                                   <div class="reply-form-container"></div>
                            </div>
                        </li>
                        <?php
                        $i--;
                    }
                    echo '</ul>';
                } else {
                    echo '<p>Chưa có bình luận nào.</p>';
                }

                wp_reset_postdata();
                ?>
            <div class="text-center"></div>
        </div>
        <div id="formcomment" class="comment-form">
        <?php if (comments_open()) : ?>
            <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post" id="commentform" class="comment-form">
    <div class="form-group clearfix">
        <div class="row">
            <div class="col-xs-12">
                <input id="author" name="author" type="text" class="form-control" placeholder="Tên của bạn" required>
            </div>
            <div class="col-xs-12">
                <input id="email" name="email" type="email" class="form-control" placeholder="Email*" required>
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <textarea id="comment" name="comment" class="form-control"  style="width: 100%" rows="5" cols="20" placeholder="Nội dung bình luận" required></textarea>
    </div>

    <div class="form-group text-center">
        <input type="button" value="Thiết lập lại" class="reset btn btn-default" onclick="nv_comment_reset(event, this.form);">
        <button type="submit" class="btn btn-primary">Gửi bình luận</button>

    </div>



    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', get_the_ID()); ?>
</form>
<?php endif; ?>

        </div>

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
<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.likeButton');

    buttons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const postId = this.dataset.postid;
            const action = this.dataset.action;

            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
               body: new URLSearchParams({
                    action: 'update_video_reaction', // action của WordPress AJAX
                    post_id: postId,
                    reaction: action                 // like hoặc dislike
                })
            })
            .then(res => res.json())
            .then(data => {
            if (data.success) {
        const likeCount = data.data.like;
        const dislikeCount = data.data.dislike;
        const plike = data.data.plike;
        const pdislike = data.data.pdislike;

        const countSpanLike = document.querySelector('#ilike');
        const countSpanUnlike = document.querySelector('#iunlike');
        const percentLike = document.querySelector('#plike');
        const percentDislike = document.querySelector('#punlike');

        if (countSpanLike) countSpanLike.textContent = likeCount;
        if (countSpanUnlike) countSpanUnlike.textContent = dislikeCount;
        if (percentLike) percentLike.textContent = plike + '%';
        if (percentDislike) percentDislike.textContent = pdislike + '%';
         document.querySelector('#imglike').style.width = plike + '%';
    }  else {
                    alert("Có lỗi xảy ra.");
                }
            });
        });
    });
});
function nv_comment_like(event, commentId, value) {
    event.preventDefault();

    fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'action=handle_comment_like_dislike&comment_id=' + commentId + '&value=' + value
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            if (value === '1') {
                document.getElementById('like' + commentId).innerText = data.data.like;
            } else {
                document.getElementById('dislike' + commentId).innerText = data.data.dislike;
            }
        } else {
            alert(data.message || 'Đã xảy ra lỗi!');
        }
    });
}
function nv_comment_reply(event, commentId, authorName) {
    event.preventDefault();
    const form = document.querySelector('#commentform');
    if (!form) return;

    // Hiển thị form nếu bị ẩn
    const formCommentContainer = document.querySelector('#formcomment');
    if (formCommentContainer) {
        formCommentContainer.style.display = 'block';
    }

    // Điền @Tên người được trả lời vào textarea comment
    const textarea = form.querySelector('#comment');
    if (textarea) {
        textarea.value = '@' + authorName + ' ';
        textarea.focus();
        textarea.selectionStart = textarea.selectionEnd = textarea.value.length;
    }

    // Gán comment_parent = commentId để tạo reply
    let inputParent = form.querySelector('input[name="comment_parent"]');
    if (!inputParent) {
        inputParent = document.createElement('input');
        inputParent.type = 'hidden';
        inputParent.name = 'comment_parent';
        form.appendChild(inputParent);
    }
    inputParent.value = commentId;

    // Di chuyển form vào ngay sau phần bình luận
    const commentEl = document.querySelector('#cid_' + commentId);
    if (commentEl) {
        commentEl.insertAdjacentElement('afterend', form);
    }

    // Cuộn đến vị trí form mới
    form.scrollIntoView({ behavior: 'smooth', block: 'center' });
}



// Hàm reset form, xóa comment_parent khi reset
function nv_comment_reset(event, form) {
    event.preventDefault();
    form.reset();
    const inputParent = form.querySelector('input[name="comment_parent"]');
    if (inputParent) inputParent.value = '0';
}

</script>
<?php get_footer('footer') ?>
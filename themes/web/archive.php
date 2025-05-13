<?php get_header(); ?>

<div class="container">
    <h1><?php single_term_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <!-- Hiển thị nội dung bài viết -->
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Chuyên mục này hiện chưa có bài viết nào. Vui lòng quay lại sau.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

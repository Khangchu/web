<?php wp_footer(); ?>
<?php get_template_part('includes/section','footer')?>
<!-- PhotoSwipe JS -->
<script src="https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.min.js" type="module"></script>

<script type="module">
  import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.min.js';

  const lightbox = new PhotoSwipeLightbox({
    gallery: '#gallery-1',
    children: 'a',
    pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js')
  });
  lightbox.init();
</script>

</body>
</html>
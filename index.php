<?php get_header();?>

<div class="blog-banner-container">
    <div class="ckb-container text-container">
      <div>
        <div class="title-text">Blog</div>
        <div class="subtitle-text">Berita dan informasi yang kami berikan akan selalu update secara berkala, pastikan anda selalu tunggu kabar dari kita</div>
      </div>
    </div>
  </div>

  <div class="blog-highlight-container target-scroll">
    <div class="ckb-container blog-highlight-inner">

      <?php
      
      $sideContent = new WP_Query(array(
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'orderby' => 'rand',
        'order' => 'DESC',
    ));

    while ($sideContent->have_posts()) {
      $sideContent->the_post();
      
      the_post_thumbnail('blogHomeMainImage'); ?>
      <div class="desc-highlight-container">
        <div class="title-container"><?php echo strip_tags(get_the_category_list(', ')); ?></div>
        <div class="desc-container">
         <a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
        <div class="date-container"><?php the_time('M j, Y')?></div>
      </div>
    </div>
    <?php }?>
  </div>

  <div class="read-more-blog-container">
    <div class="ckb-container read-more-blog-inner">
      <div class="read-more-text">Lainnya</div>
      <div class="read-more-blog-box-container">

        <?php

while (have_posts()) {
    the_post();?>

        <div class="read-more-blog-item">
          <div class="read-more-blog-head">
          <?php the_post_thumbnail('blogHomeSmallImage'); ?>
          </div>
          <div class="read-more-blog-body"> <a href="<?php the_permalink();?>"><?php the_title();?></a></div>
          <div class="read-more-blog-date"><?php the_time( 'j M Y' ) ?></div>
        </div>

        <?php } ?>

      </div>

      <div class="pagination-container">
      <?php wp_pagenavi(); ?>
      </div>
    </div>
  </div>

<?php get_footer();?>
<?php get_header();

while (have_posts()) {
    the_post();
    ?>

<div class="detail-blog-banner-container">
    <div class="ckb-container text-container">
      <div>
        <div class="bedge-blog"><?php echo strip_tags(get_the_category_list(', ')); ?></div>
        <div class="title-text"><?php the_title();?></div>
        <div class="subtitle-text"><?php the_time('M j, Y')?></div>
      </div>
    </div>
  </div>
  <!-- Dec 1, 2021 -->
  <div class="detail-blog-container target-scroll">
    <div class="ckb-container detail-blog-inner">
      <div class="left-content">
        <div class="content-core-container">
          <!-- <img src="<?php echo get_theme_file_uri('assets/image/blog-highlight-example.jpeg') ?>" alt=""> -->
          <?php the_post_thumbnail('blogSingleImage'); ?>
          <div class="content-text">
            <p>
            <?php the_content();?>
            </p>
          </div>
        </div>
      </div>
      <?php }?>
      <div class="right-content">
        <div class="new-artice-container">
          <div class="title-text">Artikel Terbaru</div>
          <ul>
              <?php 
              
              $sideContent = new WP_Query(array(
                  'posts_per_page' => 7,
                  'post_status' => 'publish',
                  'orderby' => 'rand',
                  'order' => 'DESC',
              ));
                            
              while ($sideContent->have_posts()) {
                $sideContent->the_post();
                ?>

               <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>

               <?php }?>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php get_footer();?>
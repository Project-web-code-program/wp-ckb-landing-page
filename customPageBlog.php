<?php /* Template Name: Blog */?>

<?php
get_header();
?>

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
        'order' => 'DESC',
    ));

    while ($sideContent->have_posts()) {
      $sideContent->the_post();
      ?>

      <img src="<?php echo get_theme_file_uri('assets/image/blog-highlight-example.jpeg') ?>" alt="">
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
      <div class="read-more-text">Read more</div>
      <div class="read-more-blog-box-container">
        <div class="read-more-blog-item">
          <div class="read-more-blog-head"><img src="<?php echo get_theme_file_uri('assets/image/default.png') ?>" alt=""></div>
          <div class="read-more-blog-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          <div class="read-more-blog-date">14 Oct 2021</div>
        </div>
        <div class="read-more-blog-item">
          <div class="read-more-blog-head"><img src="<?php echo get_theme_file_uri('assets/image/default.png') ?>" alt=""></div>
          <div class="read-more-blog-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="read-more-blog-date">14 Oct 2021</div>
        </div>
        <div class="read-more-blog-item">
          <div class="read-more-blog-head"><img src="<?php echo get_theme_file_uri('assets/image/default.png') ?>" alt=""></div>
          <div class="read-more-blog-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          <div class="read-more-blog-date">21 Oct 2021</div>
        </div>
        <div class="read-more-blog-item">
          <div class="read-more-blog-head"><img src="<?php echo get_theme_file_uri('assets/image/default.png') ?>" alt=""></div>
          <div class="read-more-blog-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          <div class="read-more-blog-date">21 Oct 2021</div>
        </div>
      </div>
      <div class="read-more-blog-box-container">
        <div class="read-more-blog-item">
          <div class="read-more-blog-head"><img src="<?php echo get_theme_file_uri('assets/image/default.png') ?>" alt=""></div>
          <div class="read-more-blog-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          <div class="read-more-blog-date">14 Oct 2021</div>
        </div>
        <div class="read-more-blog-item">
          <div class="read-more-blog-head"><img src="<?php echo get_theme_file_uri('assets/image/default.png') ?>" alt=""></div>
          <div class="read-more-blog-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="read-more-blog-date">14 Oct 2021</div>
        </div>
        <div class="read-more-blog-item">
          <div class="read-more-blog-head"><img src="<?php echo get_theme_file_uri('assets/image/default.png') ?>" alt=""></div>
          <div class="read-more-blog-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          <div class="read-more-blog-date">21 Oct 2021</div>
        </div>
        <div class="read-more-blog-item">
          <div class="read-more-blog-head"><img src="<?php echo get_theme_file_uri('assets/image/default.png') ?>" alt=""></div>
          <div class="read-more-blog-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          <div class="read-more-blog-date">21 Oct 2021</div>
        </div>
      </div>

      <div class="pagination-container">
        <ul>
          <li class="prev-section">Previous</li>
          <li class="number">1</li>
          <li class="number">2</li>
          <li class="number active">3</li>
          <li class="number">4</li>
          <li class="number">5</li>
          <li class="next-section">Next</li>
        </ul>
      </div>
    </div>
  </div>

<?php
  get_footer();
  ?>
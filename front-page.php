<?php
get_header();
?>

<div class="banner-container">
    <video src="<?php echo get_theme_file_uri('assets/video/ckb-heading-1.mp4') ?>" muted loop autoplay></video>
    <div class="ckb-container text-container">
        <div>
            <div class="title-text" i18n-key="banner-title-text">Siap memulai sebuah karya <br>diluar ekspektasi anda?
            </div>
            <div class="subtitle-text" i18n-key="banner-subtitle-text">Citra Khaila merupakan sebuah agensi yang akan
                menunjang kebutuhan bisnis anda menjadi di level yang berbeda</div>
        </div>
    </div>
</div>

<div class="tentangkami-container target-scroll">
    <div class="ckb-container tentangkami-inner">
        <div class="left-tentangkami">
            <div class="strip-ckb"></div>
            <div class="title-tentangkami" i18n-key="tentangkami-title-tentangkami">Selamat datang di Citra Khaila,
                tempat untuk mewujudkan bisnis anda!</div>
            <div class="desc-tentangkami" i18n-key="tentangkami-desc-tentangkami">Menyusun strategi dalam membuat sebuah
                kerjaan bisnis merupakan hal yang vital. tentu akan sangat berpengaruh jika terdapat kesalahan
                dalam menyusun strategi. CKB akan membantu mewujudkan strategi bisnis anda ke dalam dimensi yang beda,
                unik dan kreatif.
            </div>
            <a href="<?php echo site_url('/tentang-kami') ?>" class="button-ckb-1" i18n-key="nav-about">Tentang Kami</a>
        </div>
        <div class="right-tentangkami"><img src="<?php echo get_theme_file_uri('assets/image/Heading-Image-2.png') ?>">
        </div>
    </div>
</div>

<div class="linibisnis-container">
    <div class="ckb-container linibisnis-inner">
        <div class="left-linibisnis">
            <div class="strip-ckb"></div>
            <div class="title-linibisnis" i18n-key="linibisnis-title-linibisnis">Berbagai bidang usaha kreatif untuk
                memberikan inovasi terbaru</div>
            <div class="desc-linibisnis" i18n-key="linibisnis-desc-linibisnis">Citra Khaila memiliki usaha kreatif yang
                akan menjadi solusi perkembangan bisnis industri kreatif anda akan semakin berkembang dan akan
                memberikan pengaruh pada masa depan</div>
        </div>
        <div class="right-linibisnis">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="head-linibisnis">
                            <img src="<?php echo get_theme_file_uri('assets/image/Icon-Bisnis-Teknologi.png') ?>"
                                alt="">
                            <div class="title" i18n-key="right-linibisnis-teknologi">Teknologi</div>
                        </div>
                        <div class="body-linibisnis" i18n-key="right-body-linibisnis-teknologi">Pembuatan aplikasi dalam
                            berbagai bidang mulai dari Website, Android, iOS, dan lain-lain</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="head-linibisnis">
                            <img src="<?php echo get_theme_file_uri('assets/image/Icon-Bisnis-Edukasi.png') ?>" alt="">
                            <div class="title" i18n-key="right-linibisnis-edukasi">Edukasi</div>
                        </div>
                        <div class="body-linibisnis" i18n-key="right-body-linibisnis-edukasi">Pembelajaran dalam bentuk
                            kelas online maupun offline yang memiliki beragam jenis bidang</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="head-linibisnis">
                            <img src="<?php echo get_theme_file_uri('assets/image/Icon-Bisnis-Art.png') ?>" alt="">
                            <div class="title" i18n-key="right-linibisnis-seni">Seni</div>
                        </div>
                        <div class="body-linibisnis" i18n-key="right-body-linibisnis-seni">Pertunjukan karya seni yang
                            memberikan nilai artistik dan estetik</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="head-linibisnis">
                            <img src="<?php echo get_theme_file_uri('assets/image/Icon-Bisnis-Film.png') ?>" alt="">
                            <div class="title" i18n-key="right-linibisnis-film">Film</div>
                        </div>
                        <div class="body-linibisnis" i18n-key="right-body-linibisnis-film">Produksi dan Post Produksi
                            Film dalam bentuk Film Panjang atau Film Pendek</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="head-linibisnis">
                            <img src="<?php echo get_theme_file_uri('assets/image/Icon-Bisnis-Travel.png') ?>" alt="">
                            <div class="title" i18n-key="right-linibisnis-tur">Tur & Travel</div>
                        </div>
                        <div class="body-linibisnis" i18n-key="right-body-linibisnis-tur">Agensi wisata untuk tujuan
                            destinasi dalam negeri atau mancanegara</div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<div class="layanan-container">
    <div class="ckb-container layanan-inner">
        <div class="title-text" i18n-key="layanan-container-header">
            <div class="strip-ckb"></div>
            Layanan yang Kami Berikan
        </div>
        <div class="layanan-box-container">
            <div class="layanan-item">
                <img src="<?php echo get_theme_file_uri('assets/image/It-web-based-2.png') ?>" alt="">
                <div class="desc-text" i18n-key="layanan-item-it">Konsultan IT</div>
            </div>
            <div class="layanan-item">
                <img src="<?php echo get_theme_file_uri('assets/image/workshop-web-based-2.png') ?>" alt="">
                <div class="desc-text" i18n-key="layanan-item-workshop">Edukasiasdasdasdasd</div>
            </div>
            <div class="layanan-item">
                <img src="<?php echo get_theme_file_uri('assets/image/art-web-based-2.png') ?>" alt="">
                <div class="desc-text" i18n-key="layanan-item-seni">Peraga Seni & Budaya</div>
            </div>
            <div class="layanan-item">
                <img src="<?php echo get_theme_file_uri('assets/image/production-house-web-based-2.png') ?>" alt="">
                <div class="desc-text" i18n-key="layanan-item-ph">Rumah Produksi</div>
            </div>
            <div class="layanan-item">
                <img src="<?php echo get_theme_file_uri('assets/image/planner-web-based-2.png') ?>" alt="">
                <div class="desc-text" i18n-key="layanan-item-event">Penyelnggara Acara</div>
            </div>
            <div class="layanan-item">
                <img src="<?php echo get_theme_file_uri('assets/image/travel-web-based-2.png') ?>" alt="">
                <div class="desc-text" i18n-key="layanan-item-tur">Tur & Travel</div>
            </div>
        </div>
    </div>
</div>

<div class="blog-container">
    <div class="ckb-container blog-inner">
        <div class="title-text" i18n-key="blog-title-text">
            <div class="strip-ckb"></div>
            Update Terbaru dari Kami
        </div>
        <div class="blog-box-container">
            <?php

$latestPostBlog = new WP_Query(array(
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'order' => 'DESC',
));

while ($latestPostBlog->have_posts()) {
    $latestPostBlog->the_post();
    ?>
            <div class="blog-item">
                <div class="blog-head">
                    <?php the_post_thumbnail('homeSmallImage');?>
                </div>
                <div class="blog-body"><a href="<?php the_permalink();?>" style="color: inherit;"><?php

    if (has_excerpt()) {
        echo get_the_excerpt();
    } else {
        echo wp_trim_words(get_the_content(), 20);}?></a></div>
                <div class="blog-date"><?php the_time('j M Y');?></div>
            </div>
            <?php }
wp_reset_postdata();?>
        </div>
    </div>
</div>

<div class="kami-senang-container">
    <div class="ckb-container kami-senang-inner">
        <div class="title-text" i18n-key="kami-senang-title-text">Kami Senang Mendengar dari Anda</div>
        <a href="<?php echo site_url('/kontak-kami') ?>" class="button-ckb-1" i18n-key="nav-kontakkami">Contact Us</a>
    </div>
</div>

<?php
get_footer();
?>
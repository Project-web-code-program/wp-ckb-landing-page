<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKB</title>
    <?php
wp_head();
?>
</head>

<body <?php body_class();?>>
    <div class="header-container">
        <div class="header-inner">
            <div class="top-nav">
                <div class="top-nav-inner ckb-container">

                    <?php

if (get_post_type() != 'post') {
    ?>

                    <div class="language-container">
                        <div class="toggle-lang active" data-lang="id">INDONESIA</div>
                        <div class="toggle-lang" data-lang="en">ENGLISH</div>
                    </div>
                    <?php }?>
                    <div class="social-media-container">
                        <img src="<?php echo get_theme_file_uri('assets/image/icon-facebook-header.svg') ?>" alt="">
                        <img src="<?php echo get_theme_file_uri('assets/image/icon-instagram.svg') ?>" alt="">
                        <img src="<?php echo get_theme_file_uri('assets/image/icon-linkedin.svg') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="main-nav ckb-container">
                <div class="logo-section">
                    <a href="<?php echo site_url() ?>"><img
                            src="<?php echo get_theme_file_uri('assets/image/logo-1.png') ?>"></a>
                </div>
                <div class="nav-section">
                    <!-- esc_url(site_url('/index')) -->
                    <ul>
                        <li><a href="<?php echo site_url() ?>">Home</a>
                            <div <?php if (is_front_page()) {echo 'class="active"';} else {echo 'class=""';}?>></div>
                        </li>
                        <li><a href="<?php echo site_url('/tentang-kami') ?>">Tentang Kami</a>
                            <div <?php if (is_page('tentang-kami')) {echo 'class="active"';} else {echo 'class=""';}?>>
                            </div>
                        </li>
                        <li class="expand-menu">
                            <a><span>Bidang Usaha</span></a>
                            <div class=""></div>
                            <ul>
                                <li><a href="#">Teknologi</a></li>
                                <li><a href="#">Edukasi</a></li>
                                <li><a href="#">Seni</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Tur & Travel</a></li>
                                <li><a href="#"><?php echo is_page('index') ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('/layanan') ?>">Layanan</a>
                            <div <?php if (is_page('layanan')) {echo 'class="active"';} else {echo 'class=""';}?>></div>
                        </li>
                        <li><a href="<?php echo site_url('/blog') ?>">Blog</a>
                            <div
                                <?php if (get_post_type() == 'post') {echo 'class="active"';} else {echo 'class=""';}?>>
                            </div>
                        </li>
                        <li><a href="<?php echo site_url('/kontak-kami') ?>">Kontak Kami</a>
                            <div <?php if (is_page('kontak-kami')) {echo 'class="active"';} else {echo 'class=""';}?>>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="nav-section-mobile">
                    <img src="<?php echo get_theme_file_uri('assets/image/burger-icon-right-light.png') ?>" alt=""
                        srcset="" class="burger-icon">
                    <div class="main-nav-mobile-container">
                        <div class="nav-mobile-head">
                            <img src="<?php echo get_theme_file_uri('assets/image/logo-2.png') ?>" alt="" srcset="">
                            <img src="<?php echo get_theme_file_uri('assets/image/close-icon.png') ?>" alt="" srcset=""
                                class="close-icon">
                        </div>
                        <div class="nav-mobile-body">
                            <ul>
                                <li><a href="<?php echo site_url('/index') ?>">Home</a>
                                    <div class=""></div>
                                </li>
                                <li><a href="<?php echo site_url('/tentang-kami') ?>">Tentang Kami</a>
                                    <div class="active"></div>
                                </li>
                                <li class="expand-menu exp1">
                                    <a href="#"><span>Bidang Usaha</span></a>
                                    <div class=""></div>
                                    <ul>
                                        <li><a href="#">Teknologi</a></li>
                                        <li><a href="#">Edukasi</a></li>
                                        <li><a href="#">Seni</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Tur & Travel</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('/layanan') ?>">Layanan</a>
                                    <div class=""></div>
                                </li>
                                <li><a href="<?php echo site_url('/blog') ?>">Blog</a>
                                    <div class=""></div>
                                </li>
                                <li><a href="<?php echo site_url('/kontak-kami') ?>">Kontak Kami</a>
                                    <div class=""></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
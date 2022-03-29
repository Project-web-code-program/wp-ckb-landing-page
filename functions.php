<?php

function ckb_files()
{
    wp_enqueue_script('ckb_jquery_js', get_theme_file_uri('/assets/js/jquery.js'), array('jquery'), null, true);
    wp_enqueue_script('ckb_language_js', get_theme_file_uri('/assets/js/language.js'), array('jquery'), null, true);
    wp_enqueue_script('ckb_main_js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), null, true);
    wp_enqueue_script('ckb_swiper_js', get_theme_file_uri('/assets/js/swiper.js'), array('jquery'), null, true);

    $script_data = array(
        'image_path' => get_theme_file_uri('/assets/image/icon-facebook-dark.svg'),
    );

    wp_localize_script(
        'ckb_main_js',
        'ckb_data',
        $script_data
    );

    wp_enqueue_style('ckb_banner_styles', get_theme_file_uri('/assets/css/banner.css'));
    wp_enqueue_style('ckb_blog_page_styles', get_theme_file_uri('/assets/css/blog-page.css'));
    wp_enqueue_style('ckb_blog_styles', get_theme_file_uri('/assets/css/blog.css'));
    wp_enqueue_style('ckb_contact_us_styles', get_theme_file_uri('/assets/css/contact-us.css'));
    wp_enqueue_style('ckb_detail_blog_page_styles', get_theme_file_uri('/assets/css/detail-blog-page.css'));
    wp_enqueue_style('ckb_font_styles', get_theme_file_uri('/assets/css/font.css'));
    wp_enqueue_style('ckb_footer_styles', get_theme_file_uri('/assets/css/footer.css'));
    wp_enqueue_style('ckb_footer_styles', get_theme_file_uri('/assets/css/footer.css'));
    wp_enqueue_style('ckb_header_styles', get_theme_file_uri('/assets/css/header.css'));
    wp_enqueue_style('ckb_kami_senang_styles', get_theme_file_uri('/assets/css/kamisenang.css'));
    wp_enqueue_style('ckb_layanan_page_styles', get_theme_file_uri('/assets/css/layanan-page.css'));
    wp_enqueue_style('ckb_layanan_styles', get_theme_file_uri('/assets/css/layanan.css'));
    wp_enqueue_style('ckb_lini_bisnis_styles', get_theme_file_uri('/assets/css/linibisnis.css'));
    wp_enqueue_style('ckb_style_styles', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('ckb_swiper_styles', get_theme_file_uri('/assets/css/swiper.css'));
    wp_enqueue_style('ckb_tentang_kami_page_styles', get_theme_file_uri('/assets/css/tentang-kami-page.css'));
    wp_enqueue_style('ckb_tentang_kami_styles', get_theme_file_uri('/assets/css/tentangkami.css'));
}

add_action('wp_enqueue_scripts', 'ckb_files');

function ckb_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('blogSingleImage', 660, 371, true);
    add_image_size('blogHomeMainImage', 1140, 620, true);
    add_image_size('blogHomeSmallImage', 214, 120, true);
    add_image_size('homeSmallImage', 330, 190, true);
}

add_action('after_setup_theme', 'ckb_features');

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;
    if ($wp_version !== '4.7.1') {
        return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext' => $filetype['ext'],
        'type' => $filetype['type'],
        'proper_filename' => $data['proper_filename'],
    ];

}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

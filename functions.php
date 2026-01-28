<?php
if (!defined('ABSPATH')) exit;

add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('windows-style', get_stylesheet_uri());
    wp_enqueue_style('windows-main', get_template_directory_uri() . '/assets/css/style.css', [], filemtime(get_template_directory() .'/assets/css/style.css'));
    wp_enqueue_script('windows-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);

});

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);


});



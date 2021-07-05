<?php

// Load stylesheet
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load javascript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');


// theme option
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');



// Menus
register_nav_menus(
    [
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    ]
);

// Custome image size
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);


// Register sidebar
function my_sidebar()
{
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ]);
}
add_action('widgets_init', 'my_sidebar');


function my_first_post_type()
{
    $args =  [
        'labels' => [
            'name' => 'Cars',
            'singular_name' => 'Car'
        ],
        'public' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'custom-fields'
        ],
        'rewrite' => [
            'slug' => 'cars'
        ]
    ];
    register_post_type('cars', $args);
}
add_action('init', 'my_first_post_type');


function my_first_taxonomy()
{
    $args = [
        'labels' => [
            'name' => 'Brands',
            'singular_name' => 'brand'
        ],
        'public' => true,
        'hierarchical' => true,
    ];
    register_taxonomy('brands', ['cars'], $args);
}
add_action('init', 'my_first_taxonomy');

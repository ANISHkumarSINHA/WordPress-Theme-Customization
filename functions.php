<?php

function my_custom_theme_enqueue_styles() {
    // Enqueue Parent Theme Styles
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue Child Theme Styles
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');

// Include custom Gutenberg block registration
require get_stylesheet_directory() . '/inc/gutenberg-blocks.php';

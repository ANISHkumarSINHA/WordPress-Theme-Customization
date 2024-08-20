<?php

function my_custom_gutenberg_blocks() {
    wp_register_script(
        'my-custom-block',
        get_stylesheet_directory_uri() . '/blocks/custom-block.js',
        array('wp-blocks', 'wp-editor', 'wp-element', 'wp-components')
    );

    register_block_type('my-custom/block', array(
        'editor_script' => 'my-custom-block',
    ));
}
add_action('init', 'my_custom_gutenberg_blocks');

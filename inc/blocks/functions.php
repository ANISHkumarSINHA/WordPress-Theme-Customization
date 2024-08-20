function my_custom_block_styles() {
    wp_enqueue_style(
        'my-custom-block-editor-styles',
        get_stylesheet_directory_uri() . '/blocks/custom-block-editor.css',
        array('wp-edit-blocks')
    );
}
add_action('enqueue_block_editor_assets', 'my_custom_block_styles');

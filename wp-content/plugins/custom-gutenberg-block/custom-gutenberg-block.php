<?php
/*
Plugin Name: Custom Gutenberg Block
Description: Custom Gutenberg block example.
Version: 1.0
Author: Your Name
*/

// Plugin code goes here
function render_custom_gutenberg_block($attributes) {
    // Your block's HTML generation goes here
    return '<div class="custom-gutenberg-block">This is my custom Gutenberg block content.</div>';
}

register_block_type('custom-gutenberg-block/block', array(
    'render_callback' => 'render_custom_gutenberg_block',
));

<?php
/*
Plugin Name:My gutenberg block
Description: My gutenberg block example.
Version: 1.0
Author: Saurav Kumar Sharma
*/
define('SG_PLUGIN_URL',plugins_url('my-guten-block'));
define('SG_PLUGIN_DIR_PATH',plugin_dir_path(__FILE__));

function gutenberg_custom_block(){
    wp_register_style(
        'sg-block-frontend-style',
        SG_PLUGIN_URL.'/style.css',
        array('wp-edit-blocks'),
        filemtime(SG_PLUGIN_DIR_PATH.'style.css')
    );
    wp_register_style(
        'sg-block-frontend-editor-style',
        SG_PLUGIN_URL.'/editor.css',
        array('wp-edit-blocks'),
        filemtime(SG_PLUGIN_DIR_PATH.'editor.css')
    );
    wp_register_script(
        'my-guten.js',
        SG_PLUGIN_URL.'/my-guten.js',
        array('wp-blocks','wp-element','wp-editor','wp-components','wp-i18n'),
        filemtime(SG_PLUGIN_DIR_PATH.'my-guten.js')
    );
    register_block_type(
        'my-guten-block/simple-block',
        array(
            'style'=>'sg-block-frontend-style',
            'editor_style'=>'sg-block-frontend-editor-style',
            'editor_script'=>'my-guten.js'
        )
        );
};
add_action('init','gutenberg_custom_block');
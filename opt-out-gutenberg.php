<?php
/*
Plugin Name: Opt Out Gutenberg
Description: A simple and lightweight plugin that disables the Gutenberg block editor and restores the classic editor in WordPress for all post types.
Author: TanManWeb
Author URI: https://github.com/TanManWeb/
Version: 1.0.0
Text Domain: opt-out-gutenberg
*/

add_filter( 'use_block_editor_for_post', '__return_false' );
add_action( 'wp_enqueue_scripts', 'optout_gutenberg_remove_block_css', 100 );
function optout_gutenberg_remove_block_css() {
   wp_dequeue_style( 'wp-block-library' );
   wp_dequeue_style( 'wp-block-library-theme' );       
}


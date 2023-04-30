<?php

add_theme_support( 'post-thumbnails' );

/**
 * This function takes care of handling the assets with enqueue
 *
 * @return void
 */

function exam_assets() {
    wp_enqueue_style( 'exam-homes', get_stylesheet_directory_uri() . '/css/master.css', array(), filemtime(  get_template_directory() . '/css/master.css' ) );
}
add_action( 'wp_enqueue_scripts', 'exam_assets' );
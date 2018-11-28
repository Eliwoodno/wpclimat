<?php
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'ong_thumb', 120, 120, false );
    add_image_size( 'article-preview_thumb', 250, 200, true );
    add_image_size( 'etude-preview_thumb', 500, 400, true );
}
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
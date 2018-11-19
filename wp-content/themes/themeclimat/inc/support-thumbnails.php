<?php
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'ong_thumb', 150, 150, false );
}
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
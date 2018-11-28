<?php

function ajout_scripts() {

wp_register_style( 'google_font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700"' );
wp_enqueue_style( 'google_font' );

wp_register_style( 'google_font', 'https://fonts.googleapis.com/css?family=PT+Serif' );
wp_enqueue_style( 'google_font' );

wp_register_style( 'google_font', 'https://fonts.googleapis.com/css?family=EB+Garamond:400,500,600,700' );
wp_enqueue_style( 'google_font' );

wp_register_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
wp_enqueue_style( 'font_awesome' );

wp_register_style( 'style', CSS_URL . '/style.css' );
wp_enqueue_style( 'style' );

wp_register_style( 'jvectormap_style', CSS_URL . '/jquery-jvectormap-2.0.3.css' );
wp_enqueue_style( 'jvectormap_style' );

wp_register_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
wp_enqueue_style( 'font_awesome' );

wp_register_script('jquery-min', JS_URL . '/jquery.min.js', array('jquery'),'1.0', true);
wp_enqueue_script( 'jquery-min' );

wp_register_script('jvectormap_script', JS_URL . '/jquery-jvectormap-2.0.3.min.js', array('jquery'),'1.0', true);
wp_enqueue_script( 'jvectormap_script' );

wp_register_script('jvectormap_mill', JS_URL . '/jquery-jvectormap-continent-mill.js', array('jquery'),'1.0', true);
wp_enqueue_script( 'jvectormap_mill' );

wp_register_script('main', JS_URL . '/main.js', array('jquery'),'1.0', true);
wp_enqueue_script('main');

wp_register_script('ajaxjs', JS_URL . '/ajaxjs.js', array('jquery'),'1.0', true);
wp_localize_script('ajaxjs', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
wp_enqueue_script('ajaxjs');



}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );


add_action('wp_head', 'ajout_viewport');
function ajout_viewport()
{
  echo     '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';

}
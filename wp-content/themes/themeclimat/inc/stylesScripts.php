<?php

function ajout_scripts() {

wp_register_style( 'google_font', 'https://fonts.googleapis.com/css?family=Roboto' );
wp_enqueue_style( 'google_font' );

wp_register_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
wp_enqueue_style( 'font_awesome' );

wp_register_style( 'style', CSS_URL . '/style.css' );
wp_enqueue_style( 'style' );

wp_register_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
wp_enqueue_style( 'font_awesome' );

wp_register_script('jquery-min', JS_URL . '/jquery.min.js', array('jquery'),'1.0', true);
wp_enqueue_script( 'jquery-min' );

wp_register_script('main', JS_URL . '/main.js', array('jquery'),'1.0', true);
wp_enqueue_script('main');



}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );


add_action('wp_head', 'ajout_viewport');
function ajout_viewport()
{
  echo     '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';

}
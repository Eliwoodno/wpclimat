<?php

add_action( 'after_setup_theme', 'menus_du_theme' );
function menus_du_theme() {
  register_nav_menu( 'header', 'Header menu' );
}
?>
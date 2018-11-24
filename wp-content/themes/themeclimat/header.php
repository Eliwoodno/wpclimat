<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    
        <header>
        <?php if ( is_admin_bar_showing() ) { ?>
          <style>
            header {
                     top: 32px;
                   }
            #responsive-menu-container{
                     top:32px;
            }       
          </style>
         <?php } ?>
            <img class="logo-underthemap"src="<?php echo IMAGES_URL . '/logo_underthemap.png' ?>">
            <?php
                $args=array(
                    'theme_location' => 'header',
                    'menu' => 'header_fr',
                    'menu_class' => 'menu-header',
                    'menu_id' => 'menu_id'
                );
                wp_nav_menu($args);
            ?>
        </header>
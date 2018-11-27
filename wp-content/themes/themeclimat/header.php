<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="shortcut icon" href="<?php FAVICONS_URL . '/favicon.ico' ?>" type="image/x-icon">
        <link rel="icon" href="<?php FAVICONS_URL . '/favicon.png' ?>" type="image/png">
        <link rel="icon" sizes="32x32" href="<?php FAVICONS_URL . '/favicon-32.png' ?>" type="image/png">
        <link rel="icon" sizes="64x64" href="<?php FAVICONS_URL . '/favicon-64.png' ?>" type="image/png">
        <link rel="icon" sizes="96x96" href="<?php FAVICONS_URL . '/favicon-96.png' ?>" type="image/png">
        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->
        
        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <div class="overlay"></div>
    
        <header>
        <?php if ( is_admin_bar_showing() ) { ?>
          <style>
            header {
                     top: 32px;
                   }
            #responsive-menu-container{
                     top:32px;
            }     
            #responsive-menu-button{
                     top:50px !important;
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
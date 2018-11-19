<?php
add_action( 'init', 'add_custom_post_type_etude' );

function add_custom_post_type_etude()
{
    $post_type = "etudes";
    $labels = array(
        'name'               => 'Études',
        'singular_name'      => 'Étude',
        'all_items'          => 'Toutes les études',
        'add_new'            => 'Ajouter une étude',
        'add_new_item'       => 'Ajouter une étude',
        'edit_item'          => 'Éditer l\' étude',
        'new_item'           => 'Nouvelle étude',
        'view_item'          => 'Voir l\'étude',
        'search_items'       => 'Trouver une étude',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Étude parente',
        'menu_name'          => 'Études',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'welcome-learn-more',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );
}
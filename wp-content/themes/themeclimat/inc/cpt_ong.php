<?php
add_action( 'init', 'add_custom_post_type_ong' );

function add_custom_post_type_ong()
{
    $post_type = "ong";
    $labels = array(
        'name'               => 'ONGs',
        'singular_name'      => 'ONG',
        'all_items'          => 'Toutes les ONGs',
        'add_new'            => 'Ajouter une ONG',
        'add_new_item'       => 'Ajouter une ONG',
        'edit_item'          => 'Éditer l\' ONG',
        'new_item'           => 'Nouvelle ONG',
        'view_item'          => 'Voir l\'ONG',
        'search_items'       => 'Trouver une ONG',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'ONG parente',
        'menu_name'          => 'ONGs',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-site',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args);

    $taxonomy = "geo-zone";
    $object_type = array("ong");
    $args = array(
            'label' => __( 'Zone géographique' ),
            'rewrite' => array( 'slug' => 'geo-zone' ),
            'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $args );
}
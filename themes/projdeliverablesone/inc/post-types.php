<?php
/** 
 * Custom post types for this theme
 * 
 * @package Project__Deliverables_1
 */

function wpdocs_technology_init() {
    $labels = array(
        'name'                  => _x( 'Technologies', 'Post type general name', 'projdeliverablesone' ),
        'singular_name'         => _x( 'Technology', 'Post type singular name', 'projdeliverablesone' ),
        'menu_name'             => _x( 'Technologies', 'Admin Menu text', 'projdeliverablesone' ),
        'name_admin_bar'        => _x( 'Technology', 'Add New on Toolbar', 'projdeliverablesone' ),
        'add_new'               => __( 'Add New', 'projdeliverablesone' ),
        'add_new_item'          => __( 'Add New technology', 'projdeliverablesone' ),
        'new_item'              => __( 'New technology', 'projdeliverablesone' ),
        'edit_item'             => __( 'Edit technology', 'projdeliverablesone' ),
        'view_item'             => __( 'View technology', 'projdeliverablesone' ),
        'all_items'             => __( 'All technologies', 'projdeliverablesone' ),
        'search_items'          => __( 'Search technologies', 'projdeliverablesone' ),
        'parent_item_colon'     => __( 'Parent technologies:', 'projdeliverablesone' ),
        'not_found'             => __( 'No technologies found.', 'projdeliverablesone' ),
        'not_found_in_trash'    => __( 'No technologies found in Trash.', 'projdeliverablesone' ),
        'featured_image'        => _x( 'Technology Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'projdeliverablesone' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'projdeliverablesone' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'projdeliverablesone' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'projdeliverablesone' ),
        'archives'              => _x( 'Technology archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'projdeliverablesone' ),
        'insert_into_item'      => _x( 'Insert into technology', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'projdeliverablesone' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this technology', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'projdeliverablesone' ),
        'filter_items_list'     => _x( 'Filter technologies list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'projdeliverablesone' ),
        'items_list_navigation' => _x( 'Technologies list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'projdeliverablesone' ),
        'items_list'            => _x( 'Technologies list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'projdeliverablesone' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Technology custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'technology' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-buddicons-topics',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    register_post_type( 'Technology', $args );
}
add_action( 'init', 'wpdocs_technology_init' );
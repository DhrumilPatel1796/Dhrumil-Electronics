<?php
/** 
 * Custom post types for this theme
 * 
 * @package Project__Deliverables_1
 */

function wpdocs_electronic_init() {
    $labels = array(
        'name'                  => _x( 'Electronics', 'Post type general name', 'projdeliverablesone' ),
        'singular_name'         => _x( 'Electronic', 'Post type singular name', 'projdeliverablesone' ),
        'menu_name'             => _x( 'Electronics', 'Admin Menu text', 'projdeliverablesone' ),
        'name_admin_bar'        => _x( 'Electronic', 'Add New on Toolbar', 'projdeliverablesone' ),
        'add_new'               => __( 'Add New', 'projdeliverablesone' ),
        'add_new_item'          => __( 'Add New electronic', 'projdeliverablesone' ),
        'new_item'              => __( 'New electronic', 'projdeliverablesone' ),
        'edit_item'             => __( 'Edit electronic', 'projdeliverablesone' ),
        'view_item'             => __( 'View electronic', 'projdeliverablesone' ),
        'all_items'             => __( 'All electronics', 'projdeliverablesone' ),
        'search_items'          => __( 'Search electronics', 'projdeliverablesone' ),
        'parent_item_colon'     => __( 'Parent electronics:', 'projdeliverablesone' ),
        'not_found'             => __( 'No electronics found.', 'projdeliverablesone' ),
        'not_found_in_trash'    => __( 'No electronics found in Trash.', 'projdeliverablesone' ),
        'featured_image'        => _x( 'Electronic Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'projdeliverablesone' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'projdeliverablesone' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'projdeliverablesone' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'projdeliverablesone' ),
        'archives'              => _x( 'Electronic archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'projdeliverablesone' ),
        'insert_into_item'      => _x( 'Insert into electronic', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'projdeliverablesone' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this electronic', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'projdeliverablesone' ),
        'filter_items_list'     => _x( 'Filter electronics list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'projdeliverablesone' ),
        'items_list_navigation' => _x( 'Electronics list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'projdeliverablesone' ),
        'items_list'            => _x( 'Electronics list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'projdeliverablesone' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Electronic custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'electronic' ),
        'capability_type'    => 'post',
        'has_archive'        => 'electronics',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-printer',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    register_post_type( 'electronic', $args );
}
add_action( 'init', 'wpdocs_electronic_init' );
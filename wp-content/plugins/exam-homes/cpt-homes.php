<?php
/**
 * Register a custom post type called "home".
 *
 * @see get_post_type_labels() for label keys.
 */
function exam_homes_cpt() {
    $labels = array(
        'name'                  => _x( 'Homes', 'Post type general name', 'exam' ),
        'singular_name'         => _x( 'Home', 'Post type singular name', 'exam' ),
        'menu_name'             => _x( 'Homes', 'Admin Menu text', 'exam' ),
        'name_admin_bar'        => _x( 'Home', 'Add New on Toolbar', 'exam' ),
        'add_new'               => __( 'Add New', 'exam' ),
        'add_new_item'          => __( 'Add New Home', 'exam' ),
        'new_item'              => __( 'New Home', 'exam' ),
        'edit_item'             => __( 'Edit Home', 'exam' ),
        'view_item'             => __( 'View Home', 'exam' ),
        'all_items'             => __( 'All Home', 'exam' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'home' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions'),
        'show_in_rest'       => true
    );

    register_post_type( 'home', $args );
        // flush_rewrite_rules();
}
add_action( 'init', 'exam_homes_cpt' );



/**
 * Register a 'location' taxonomy for post type 'job', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function exam_homes_location_taxonomy() {
    $labels = array(
        'name'              => _x( 'Location', 'taxonomy general name', 'exam' ),
        'singular_name'     => _x( 'Location', 'taxonomy singular name', 'exam' ),
        'search_items'      => __( 'Search Location', 'exam' ),
        'all_items'         => __( 'All Locations', 'exam' ),
        'parent_item'       => __( 'Parent Location', 'exam' ),
        'parent_item_colon' => __( 'Parent Location:', 'exam' ),
        'edit_item'         => __( 'Edit Location', 'exam' ),
        'update_item'       => __( 'Update Location', 'exam' ),
        'add_new_item'      => __( 'Add New Location', 'exam' ),
        'new_item_name'     => __( 'New Location Name', 'exam' ),
        'menu_name'         => __( 'Location', 'exam' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true
    );

    register_taxonomy( 'location', 'home', $args );
}
add_action( 'init', 'exam_homes_location_taxonomy' );



/**
 * Register a 'price' taxonomy for post type 'job', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function exam_homes_price_taxonomy() {
    $labels = array(
        'name'              => _x( 'Price', 'taxonomy general name', 'exam' ),
        'singular_name'     => _x( 'Price', 'taxonomy singular name', 'exam' ),
        'search_items'      => __( 'Search Price', 'exam' ),
        'all_items'         => __( 'All Prices', 'exam' ),
        'parent_item'       => __( 'Parent Price', 'exam' ),
        'parent_item_colon' => __( 'Parent Price:', 'exam' ),
        'edit_item'         => __( 'Edit Price', 'exam' ),
        'update_item'       => __( 'Update Price', 'exam' ),
        'add_new_item'      => __( 'Add New Price', 'exam' ),
        'new_item_name'     => __( 'New Price Name', 'exam' ),
        'menu_name'         => __( 'Price', 'exam' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true
    );

    register_taxonomy( 'price', 'home', $args );
}
add_action( 'init', 'exam_homes_price_taxonomy' );



/**
 * Register a 'area' taxonomy for post type 'job', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function exam_homes_area_taxonomy() {
    $labels = array(
        'name'              => _x( 'Area', 'taxonomy general name', 'exam' ),
        'singular_name'     => _x( 'Area', 'taxonomy singular name', 'exam' ),
        'search_items'      => __( 'Search Area', 'exam' ),
        'all_items'         => __( 'All Areas', 'exam' ),
        'parent_item'       => __( 'Parent Area', 'exam' ),
        'parent_item_colon' => __( 'Parent Area:', 'exam' ),
        'edit_item'         => __( 'Edit Area', 'exam' ),
        'update_item'       => __( 'Update Area', 'exam' ),
        'add_new_item'      => __( 'Add New Area', 'exam' ),
        'new_item_name'     => __( 'New Area Name', 'exam' ),
        'menu_name'         => __( 'Area', 'exam' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true
    );

    register_taxonomy( 'area', 'home', $args );
}
add_action( 'init', 'exam_homes_area_taxonomy' );
<?php

/**
 * Display a single post term
 *
 * @param integer $post_id
 * @param [type] $taxonomy
 * @return void
 */
function exam_display_single_term( $post_id, $taxonomy ) {

    if ( empty( $post_id ) || empty( $taxonomy ) ) {
        return;
    }

    $terms = get_the_terms( $post_id, $taxonomy );

    $output = '';
    if ( ! empty( $terms ) && is_array( $terms ) ) {
        foreach( $terms as $term ) {
            $output .= $term->name . ', ' ;
        }
    }

    return $output;
}



/**
 * This functions update the jobs post meta for the views count
 *
 * @param [type] $home_id
 * @return void
 */
function exam_update_home_views_count( $home_id ) {
    if ( empty( $home_id ) ) {
        return;
    }

    $view_count = get_post_meta( $home_id, 'views_count', true );

    if ( ! empty( $view_count ) ) {
        $view_count = $view_count + 1;
    } else {
        $view_count = 1;
    }
    update_post_meta( $home_id, 'views_count', $view_count );

}



/**
 * Displays the current user name if the user is logged in
 *
 * @return void
 */
function exam_display_username() {
    $output = '';

    if ( is_user_logged_in() == true ) {
        $current_user = wp_get_current_user();
        $user_display_name = $current_user->data->display_name;
        $output = 'Hello, ' . $user_display_name . '!';
    }

    return $output;
}
add_shortcode( 'display_username', 'exam_display_username' );

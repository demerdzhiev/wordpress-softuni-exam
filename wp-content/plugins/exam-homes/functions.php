<?php

/**
 * Enqueue
 */
function exam_enqueue_scripts() {
    wp_enqueue_script( 'exam-script', plugins_url( 'assets\scripts\scripts.js', __FILE__ ), array( 'jquery' ), 1.1 );
    wp_localize_script( 'exam-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'exam_enqueue_scripts' );

/**
 * Functions takes care of the like of the job
 *
 * @return void
 */
function exam_home_like() {
	$home_id = esc_attr( $_POST['home_id'] );

	$like_number = get_post_meta( $home_id, 'likes', true );

    if ( empty( $like_number ) ) {
        update_post_meta( $home_id, 'likes', 1 );
    } else {
        $like_number = $like_number + 1;
        update_post_meta( $home_id, 'likes', $like_number );
    }

    wp_die();
}
add_action( 'wp_ajax_nopriv_exam_home_like', 'exam_home_like' );
add_action( 'wp_ajax_exam_home_like', 'exam_home_like' );



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
function exam_get_post_views_count( $post_id ) {
    $count_key = 'exam_post_views_count';
    $count = get_post_meta( $post_id, $count_key, true );
    if ( $count == '' ) {
        delete_post_meta( $post_id, $count_key );
        add_post_meta( $post_id, $count_key, '0' );
        return "0 View";
    }
    return $count.' Views';
}


function exam_update_post_views_count( $post_id ) {
    $count_key = 'exam_post_views_count';
    $count = get_post_meta( $post_id, $count_key, true );
    if ( $count == '' ) {
        $count = 0;
        delete_post_meta( $post_id, $count_key );
        add_post_meta( $post_id, $count_key, '0' );
    } else {
        $count++;
        update_post_meta( $post_id, $count_key, $count );
    }
}


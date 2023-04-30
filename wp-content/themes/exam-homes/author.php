<?php get_header(); ?>

<?php the_archive_title(); ?> 

<div><?php echo the_author_meta( 'user_description' ); ?></div>

<?php if ( have_posts() ) : ?>

    <ul class="properties-listing">

        <?php while( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/home', 'item' ); ?>

        <?php endwhile; ?>

        <?php posts_nav_link(); ?>

    </ul>

<?php else : ?>

    <p><?php _e( 'No posts found', 'exam' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>
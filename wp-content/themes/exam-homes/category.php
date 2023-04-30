<?php get_header(); ?>

<?php the_archive_title(); ?> 

<?php if ( category_description() ) { ?>
    <div><?php echo category_description(); ?></div>
<?php } ?>

<?php if ( have_posts() ) : ?>

    <ul class="properties-listing">

        <?php while( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/post', 'item' ); ?>

        <?php endwhile; ?>

        <?php posts_nav_link(); ?>

    </ul>

<?php else : ?>

    <p><?php _e( 'No posts found', 'exam' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>

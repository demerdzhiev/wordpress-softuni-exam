<?php get_header(); ?>

<?php the_archive_title(); ?> 

<?php if ( category_description() ) { ?>
    <div><?php echo category_description(); ?></div>
<?php } ?>

<ul class="properties-listing">
    <?php if ( have_posts() ) : ?>

        <?php while( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/home', 'item' ); ?>

        <?php endwhile; ?>

        <?php posts_nav_link(); ?>

    <?php endif; ?>
</ul>

<?php else : ?>

<?php _e( 'Not found posts', 'exam' ); ?>

<?php endif; ?>

<?php get_footer(); ?> 
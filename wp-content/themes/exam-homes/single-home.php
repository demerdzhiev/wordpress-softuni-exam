
<?php get_header(); ?>


<ul class="properties-listing">
    <?php if ( have_posts() ) : ?>
        
        <?php while( have_posts() ) : the_post(); ?>
        
            <?php get_template_part( 'template-parts/home', 'item' ); ?>
            <?php exam_update_post_views_count( get_the_ID() ); ?>

        <?php endwhile; ?>

        <?php posts_nav_link(); ?>

        <?php echo exam_get_post_views_count( get_the_ID() ); ?>

    <?php endif; ?>
</ul>


<?php get_footer(); ?> 
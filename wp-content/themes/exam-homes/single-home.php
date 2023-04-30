<?php get_header(); ?>

<ul class="properties-listing">
    <?php if ( have_posts() ) : ?>

        <?php the_post(); ?>   
         
        <?php get_template_part( 'template-parts/home', 'item' ); ?>

        <?php posts_nav_link(); ?>

		

    <?php endif; ?>
</ul>




<?php get_footer(); ?> 
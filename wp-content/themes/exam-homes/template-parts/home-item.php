

<li class="property-card">
    <div class="property-primary">
        <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
        <div class="property-meta">
            <span class="meta-location">Location: <?php echo exam_display_single_term( get_the_ID(), 'location' ); ?></span>
            <span class="meta-total-area">Total area: <?php echo exam_display_single_term( get_the_ID(), 'area' ); ?> sq.m</span>
        </div>
        <div class="property-details">
            <span class="property-price">€ <?php echo exam_display_single_term( get_the_ID(), 'price' ); ?></span>
            <span class="property-date">Posted on <?php echo get_the_date(); ?> </span>
        </div>
        <a id="<?php echo get_the_ID(); ?>" class="like-button" href="#">Like (<?php echo get_post_meta( get_the_ID(), 'likes', true ) ?>)</a>
        <div class="property-body">
            <?php the_content(); ?>
        </div> 
    </div>
    <div class="property-image">
        <div class="property-image-box">
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else {
                echo '<img src="wp-content\themes\exam-homes\images\bedroom.jpg">';
            }
            ?>
        </div>
    </div>
    

</li>
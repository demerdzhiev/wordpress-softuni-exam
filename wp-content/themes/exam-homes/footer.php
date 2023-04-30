		
<footer class="site-footer">
	<p>&copy; Copyright <?php echo date( 'Y' ) ?> 
	</p>
</footer>
</div>

<?php wp_footer(); ?>

<div class="footer-nav-menu">
    <?php
    if ( has_nav_menu( 'footer_menu' ) ) {
            wp_nav_menu(
                   array(
                            'theme_location' => 'footer_menu',
                    )
           );
    }
    ?>
</div>

</body>
</html>
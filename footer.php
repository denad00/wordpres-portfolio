<?php ?>

</main> <!-- end of .site-main -->


<footer class="site-footer">

    <div class="footer-logo">
      <?php the_custom_logo(); ?>
    </div>

    <div class="site-navigation-footer">
        <?php
            wp_nav_menu(array(
            'theme_location'      =>      'menu-main',
            'container'           =>      'div',
            'container_class'     =>      'menu-main-footer',
            'link_before'         =>      '<span>',
            'link_after'          =>      '</span>'
            ));
            wp_nav_menu(array(
            'theme_location'      =>      'menu-socials',
            'container'           =>      'div',
            'container_class'     =>      'menu-social-footer',
            'link_before'         =>      '<span>',
            'link_after'          =>      '</span>'
            ))
        ?>
        </div>

    <?php wp_footer(); ?>
    
</footer>

</body>
</html>
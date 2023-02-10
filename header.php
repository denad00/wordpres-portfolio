<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
    <?php the_custom_logo (); ?>
        <div class="site-branding">
            <div class="header-div">
                <h1 class="site-title">
                    <a href="<?php echo esc_url(get_home_url()); ?>">
                        <?php echo esc_html(get_bloginfo('name')); ?>
                    </a>
                </h1>
                <div class="site-description">
                    <?php bloginfo( 'description' ); ?>
                </div>
            </div>
        </div>

        <div class="site-navigation">
            <?php
            wp_nav_menu(array(
            'theme_location'      =>      'menu-main',
            'container'           =>      'div',
            'container_class'     =>      'menu-main',
            'link_before'         =>      '<span>',
            'link_after'          =>      '</span>'
            ));
            wp_nav_menu(array(
            'theme_location'      =>      'menu-socials',
            'container'           =>      'div',
            'container_class'     =>      'menu-social',
            'link_before'         =>      '<span>',
            'link_after'          =>      '</span>'
            ))
            ?>
        </div>

    </header>

    <main class="site-main"> <!-- start of .site-main -->
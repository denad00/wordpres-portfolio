<?php
 
// Change all instances of deportfolio to your theme name.
if ( ! function_exists( 'deportfolio_setup' ) ) :
  
   function deportfolio_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo', array(
      'height'      => 800,
      'width'       => 800,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description')
   ));

   register_nav_menus( array(
      'menu-main'          =>       'Main Menus',
      'menu-socials'       =>       'Social Menu',
      'menu-footer'        =>       'Footer Menu'
   ));  
   }
  
endif;
  
add_action('after_setup_theme', 'deportfolio_setup');
  
function deportfolio_scripts_styles(){
   wp_enqueue_style('deportfolio_style', get_stylesheet_uri());

   wp_enqueue_style( 'deportfolio_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');

   wp_enqueue_style('deportfolio_google_fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Proza+Libre', array(), null);
}
  
add_action('wp_enqueue_scripts', 'deportfolio_scripts_styles');

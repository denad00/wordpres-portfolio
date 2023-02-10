<?php get_header(); ?>


  <section class="intro-header">
  <?php
  $args = array(
    'post_type'       =>        'page',
    'name'            =>        'intro-header',
  );
  
  $heroquery = new WP_Query($args);
  ?>
  
  <?php
  if ( $heroquery->have_posts() ) :
    while ( $heroquery->have_posts() ) :
      $heroquery->the_post();
      get_template_part('template-parts/intro-header');
    endwhile;
    else :
      get_template_part('template-parts/content-none.php');
  endif;
  ?>
  </section>
  
  
  <section class="skills-front-page">
  <?php
  $args = array(
    'post_type'       =>        'skills',
    'posts_per_page'  =>        '6',
    'orderby'         =>        'DESC'
  );
  
  $my_query = new WP_Query($args);
  ?>
  
  <h1><span>Skills</span></h1>
  
  <?php
  if ( $my_query->have_posts() ) :
    while ( $my_query->have_posts() ) :
      $my_query->the_post();
      get_template_part('template-parts/content-skills');
    endwhile;
    else :
      get_template_part('template-parts/content-none.php');
  endif;
  ?>
  </section>
  
  <section class="projects-front-page">
  <?php
  $args = array(
    'post_type'       =>        'post',
    'posts_per_page'  =>        '3',
    'orderby'         =>        'rand'
  );
  
  $my_query = new WP_Query($args);
  ?>
  
  <h1><span>Projects</span></h1>
  
  <?php
      if ($my_query->have_posts()):
          while($my_query->have_posts()):
              $my_query->the_post();
              if (is_single()):
                  get_template_part('template-parts/single' );
              else:
              get_template_part('template-parts/content');
           endif;
          endwhile;
      else:
          get_template_part('template-parts/content-none.php');
      endif;
      ?>
  </section>



<?php get_footer(); ?>
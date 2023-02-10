<?php ?>
<div class="single-post">
  <article <?php post_class(); ?> class="single-post">
  <h2 class="entry-title">
      <?php echo esc_html(get_the_title()); ?>
    </h2>
  
    <div class="entry-thumbnail">
      <?php the_post_thumbnail( ); ?>
    </div>
  
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  
  </article>
  
  <div class="single-post-navigation">
  
  <div class="prev-post">&#9756; <?php previous_post_link('%link'); ?></div>    <div class="next-post"><?php next_post_link('%link'); ?> &#9758;</div>
      </div>
</div>
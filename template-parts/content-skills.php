<?php ?>
<article <?php post_class(); ?>>

    <div class="post-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>

    <div class="skills-information">
        <div class="skill-header">
          <h2><span><?php  echo esc_html(get_the_title()); ?></span></h2>
        </div>
        <div class="skill-description">
          <?php the_field('skill_description'); ?>
        </div>
    </div>

</article>
<?php ?>
<article <?php post_class(); ?> id="<?php the_title_attribute(); ?>">

  <div class="about-header">
    <h2><?php echo esc_html(get_the_title()); ?></h2>
  </div>

  <div class="about-thumbnail">
    <?php the_post_thumbnail( ); ?>
  </div>

  <div class="about-content">
    <?php the_content(); ?>
  </div>
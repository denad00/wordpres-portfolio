<?php get_header();?>
    <article <?php post_class(); ?> id="<?php the_title_attribute(); ?>">
    <section class="page-output">       
      <div class="page-header">
        <h2><?php echo esc_html(get_the_title()); ?></h2>
      </div>
    
      <div class="page-content">
        <div class="page-thumbnail">
            <?php the_post_thumbnail( ); ?>
        </div>
        <?php the_content(); ?>
      </div>
    </section>

  <?php get_footer(); ?>

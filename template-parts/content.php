<?php ?>
    <article <?php post_class(); ?>>
      <h2 class="entry-title">
        <?php echo esc_html(get_the_title()); ?>
      </h2>
    
      <div class="entry-info">
        <div class="entry-thumbnail">
          <?php the_post_thumbnail( ); ?>
        </div>
        <div class="entry-excerpt">
          <?php the_excerpt(); ?>
          <div class="read-more">
            <a href="<?php echo esc_html(get_the_permalink());?>">
              [ read more ]
            </a>
          </div>
        </div>
      </div>
    </article>
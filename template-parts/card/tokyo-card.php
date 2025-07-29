<div class="card tokyo-card">
  
  <?php if ( get_the_post_thumbnail_url() ) : ?>
    <div class="card__media">
      <a href="<?php echo get_the_permalink(); ?>">
        <img width="900" height="600" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
      </a>
    </div>
  <?php endif; ?>

  <div class="card__content">
    <h2><a class="title" href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
  </div>
</div>

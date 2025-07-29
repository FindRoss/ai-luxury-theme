<?php 
  $date = get_the_date('M j');
?>

<div class="card kyoto-card">
 
  <?php if ( get_the_post_thumbnail_url() ) : ?>
    <div class="card__media">
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="<?php echo get_the_title(); ?>" />
      </a>
    </div>
  <?php endif; ?>

  <div class="card__content">
    <h3><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <span class="date">Published <?php echo $date; ?></span>
  </div>
</div>

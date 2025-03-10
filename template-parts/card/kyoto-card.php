<?php 
  $date = get_the_date('M j');
?>

<div class="card card--long">
  <div class="card__image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>

  <div class="card__content">
    <a href="<?php the_permalink(); ?>">
      <h3><?php the_title(); ?></h3>
    </a>
    <span class="date">Published <?php echo $date; ?></span>
  </div>
</div>

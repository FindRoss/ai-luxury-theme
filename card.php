<?php 
  $date = get_the_date('M j');
?>

<div class="card">
  <div class="card__image">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
  </div>

  <div class="card__content">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="date">Published <?php echo $date; ?></p>
    <p><?php the_excerpt(); ?></p>
  </div>

</div>
   
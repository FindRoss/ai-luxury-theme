<?php 
  $date = get_the_date('M j');
?>

<!-- Note: For both SEO and accessibility, it’s generally better to have the heading inside the link -->
<!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->

  



<div class="card">
  
  <div class="card__image">
    <a href="<?php the_permalink(); ?>">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </a>
  </div>

  <div class="card__content">
    
    <a href="<?php the_permalink(); ?>">
      <h3><?php the_title(); ?></h3>
    </a>
    <span class="date">Published <?php echo $date; ?></span>
    <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
  </div>

</div>
   
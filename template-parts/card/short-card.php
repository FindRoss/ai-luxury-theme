

<?php 
  $date = get_the_date('M j');
?>

<!-- Note: For both SEO and accessibility, it’s generally better to have the heading inside the link -->
<!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->

<div class="card">
  
 
    
    <div class="card__content">
      
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
   
    </a>
    <span class="date">Published <?php echo $date; ?></span>
    <!-- <p class="excerpt"><?php echo get_the_excerpt(); ?></p> -->
  </div>

</div>
<?php get_header(); ?>

  <?php // get_template_part( 'template-parts/banner/background-image' ); ?> 

  <?php 
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    ); 

    $query = new WP_Query($args); 
  ?>

  <div class="container">

    <div class="camera-section"> 
      <div class="camera-posts">
        <h2>Latest Articles</h2>
        <?php get_template_part( 'template-parts/card/kanazawa-card' );?>
        <?php get_template_part( 'template-parts/card/kanazawa-card' );?>
        <?php get_template_part( 'template-parts/card/kanazawa-card' );?>
      </div>

      <div class="cameras">
        <?php get_template_part( 'template-parts/card/tokyo-card' );?>
      </div>


      <h2 class="deals">Deals</h2>

    </div>



  <div class="home-section">

  <?php 
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    ); 

    $query = new WP_Query($args); ?>

    <h2>Home & Garden</h2>
    <div class="home-grid">
      <div class="home-grid-left">
        <?php get_template_part( 'template-parts/card/osaka-card' );?>
      </div>

      <div class="home-grid-right">
        <?php get_template_part( 'template-parts/card/kyoto-card' );  ?>
        <?php get_template_part( 'template-parts/card/kyoto-card' );  ?>
        <?php get_template_part( 'template-parts/card/kyoto-card' );  ?>
      </div>
    </div><!-- .home-grid -->

  </div> <!-- .home-section -->



<div class="security">
  <h2>Security</h2>

  <?php 
    $args = array(
      'post_type'      => 'post', 
      'posts_per_page' => 3,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :

      echo '<div class="card-grid">';
        while ($query->have_posts()) : $query->the_post(); 
         get_template_part( 'template-parts/card/osaka-card' );
        endwhile; 
      echo '</div>';
    endif; ?>
  </div> <!-- SECURITY -->

</div><!-- CONTAINER -->
  
  
  
  <?php get_footer(); ?> 
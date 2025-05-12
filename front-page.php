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

    <section class="hokkaido-section"> 
      <div class="col-1">
        <div class="section-heading"><h2>Latest Articles</h2></div>
        <?php get_template_part( 'template-parts/card/kanazawa-card' );?>
      </div>

      <div class="col-2">
        <?php get_template_part( 'template-parts/card/tokyo-card' );?>
      </div>

      <h2 class="col-3">
        <div class="section-heading"><h2>Deals</h2></div>
      </h2>
    </section>


  <section>
    <div class="section-heading"><h2>Home & Garden</h2></div>

    <?php $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    ); 
    $query = new WP_Query($args); ?>
  
    <div class="shikoku-section">
      <div>
        <?php get_template_part( 'template-parts/card/osaka-card' );?>
      </div>

      <div class="card-column">
        <?php get_template_part( 'template-parts/card/kyoto-card' );  ?>
        <?php get_template_part( 'template-parts/card/kyoto-card' );  ?>
        <?php get_template_part( 'template-parts/card/kyoto-card' );  ?>
      </div>
    </div>

  </section>


<section>
  <div class="section-heading"><h2>Offers</h2></div>

  <div class="konto-section">
    <?php get_template_part( 'template-parts/card/product-card' );  ?>
    <?php get_template_part( 'template-parts/card/product-card' );  ?>
    <?php get_template_part( 'template-parts/card/product-card' );  ?>
  </div>
</section>

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
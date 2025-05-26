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
        <?php get_template_part( 'template-parts/card/tokyo-card' );?>
      </div>

       <div class="col-2">
          <div class="section-heading"><h2>Latest Articles</h2></div>
          <?php get_template_part( 'template-parts/card/kanazawa-card' );?>
          <?php get_template_part( 'template-parts/card/kanazawa-card' );?>
          <?php get_template_part( 'template-parts/card/kanazawa-card' );?>
      </div>

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

      <div class="flex-column">
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


<section>
  <div class="section-heading"><h2>Security</h2></div>
  <?php 
    $args = array(
      'post_type'      => 'post', 
      'posts_per_page' => 3,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :

      echo '<div class="konto-section">';
        while ($query->have_posts()) : $query->the_post(); 
          get_template_part( 'template-parts/card/osaka-card' );
        endwhile; 
      echo '</div>';
    endif; ?>
</section>

<section class="background-image-cards">
  <?php 
  // Get all categories, including empty ones
  $categories = get_categories(array(
      // Note: Dont need empty posts
      'hide_empty' => false, // Dont include categories with no posts
  ));

    // Loop through all categories
    foreach ($categories as $category) { 
      // Get the category name, ID, and link
      $category_name = $category->name;
      $category_id = $category->term_id;
      $category_link = get_category_link($category_id);

      // Get the ACF field for the category
      $image = get_field('image', 'category_' . $category_id); // Use 'category_' prefix with term ID
      
      // Check if the image is set
      if ($image) {  ?>
         <div class="background-image-card" style="background-image: url(<?php echo esc_url($image); ?>);">
            <a href="<?php echo esc_url($category_link); ?>" class="background-image-card-link">
              <h3><?php echo esc_html($category_name); ?></h3>
            </a>
          </div>
      <?php }; ?>
      

    
     

    <?php } ?>
  </section>  

</div><!-- CONTAINER -->
  
  
  
  <?php get_footer(); ?> 
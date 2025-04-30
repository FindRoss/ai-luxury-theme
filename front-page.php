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


<!-- Buttons -->
<div class="home-section">
  <h2>Offers</h2>
  <div class="card-grid">
    <div class="product-item">
      <img src="http://ailb.local/wp-content/uploads/2025/03/Tissot__900x600.jpg" alt="">
      <h2 class="title">CITIZEN Attesa Satellite Wave&nbsp;</h2>
      <a href="#">Buy on Amazon</a>
    </div>
    <div class="product-item">
      <img src="http://ailb.local/wp-content/uploads/2025/03/Tissot__900x600.jpg" alt="">
      <h2 class="title">CITIZEN Attesa Satellite Wave&nbsp;</h2>
      <a href="#">Buy on Amazon</a>
    </div>
    <div class="product-item">
      <img src="http://ailb.local/wp-content/uploads/2025/03/Tissot__900x600.jpg" alt="">
      <h2 class="title">CITIZEN Attesa Satellite Wave&nbsp;</h2>
      <a href="#">Buy on Amazon</a>
    </div>
  </div>
</div>


<!-- <div class="category-button"> 
<a href="#" >
  <img src="https://media.discordapp.net/attachments/1143480815653748746/1361283735173206117/Tissot__900x600.jpg?ex=6812a105&is=68114f85&hm=7c3c4bea8f5440154a86fdaa8ad57292e8d2ad3421c3de341e9c00d6ef1e78d6&=&format=webp" alt="Icon" class="category-icon"> Sports
</a>
<a href="#" >
  <img src="https://media.discordapp.net/attachments/1143480815653748746/1361283735173206117/Tissot__900x600.jpg?ex=6812a105&is=68114f85&hm=7c3c4bea8f5440154a86fdaa8ad57292e8d2ad3421c3de341e9c00d6ef1e78d6&=&format=webp" alt="Icon" class="category-icon"> Sports
</a>
<a href="#" >
  <img src="https://media.discordapp.net/attachments/1143480815653748746/1361283735173206117/Tissot__900x600.jpg?ex=6812a105&is=68114f85&hm=7c3c4bea8f5440154a86fdaa8ad57292e8d2ad3421c3de341e9c00d6ef1e78d6&=&format=webp" alt="Icon" class="category-icon"> Sports
</a>
<a href="#" >
  <img src="https://media.discordapp.net/attachments/1143480815653748746/1361283735173206117/Tissot__900x600.jpg?ex=6812a105&is=68114f85&hm=7c3c4bea8f5440154a86fdaa8ad57292e8d2ad3421c3de341e9c00d6ef1e78d6&=&format=webp" alt="Icon" class="category-icon"> Sports
</a>
<a href="#" >
  <img src="https://media.discordapp.net/attachments/1143480815653748746/1361283735173206117/Tissot__900x600.jpg?ex=6812a105&is=68114f85&hm=7c3c4bea8f5440154a86fdaa8ad57292e8d2ad3421c3de341e9c00d6ef1e78d6&=&format=webp" alt="Icon" class="category-icon"> Sports
</a>
<a href="#" >
  <img src="https://media.discordapp.net/attachments/1143480815653748746/1361283735173206117/Tissot__900x600.jpg?ex=6812a105&is=68114f85&hm=7c3c4bea8f5440154a86fdaa8ad57292e8d2ad3421c3de341e9c00d6ef1e78d6&=&format=webp" alt="Icon" class="category-icon"> Sports
</a>
<a href="#" >
  <img src="https://media.discordapp.net/attachments/1143480815653748746/1361283735173206117/Tissot__900x600.jpg?ex=6812a105&is=68114f85&hm=7c3c4bea8f5440154a86fdaa8ad57292e8d2ad3421c3de341e9c00d6ef1e78d6&=&format=webp" alt="Icon" class="category-icon"> Sports
</a>
<a href="#" >
  <img src="https://media.discordapp.net/attachments/1143480815653748746/1361283735173206117/Tissot__900x600.jpg?ex=6812a105&is=68114f85&hm=7c3c4bea8f5440154a86fdaa8ad57292e8d2ad3421c3de341e9c00d6ef1e78d6&=&format=webp" alt="Icon" class="category-icon"> Sports
</a>
  </div> -->


  <?php 

// ACF IMAGE FIELD
   // Get the categories
   $categories = get_categories();
   
   /* Adding */
   // Test if & how the categories are returned
   print_r('Checking what categories are returned');
   print_r($categories);

   // Add a parent container for the flex or grid 

   // Loop through through all the categories
   foreach ($categories as $category) { 

    /* Adding */
    // 'image' is the name of the ACF field. must match the name set on ACF.
    $image = get_field('image', $category);
    print_r('Checking if the image is returned correctly');
    print_r($image); 
     ?>

     <!-- Echo your card. Can do as a template-part here. -->
     <div class="background-image-card" style="background-image: url(<?php echo $image; ?>);">
       <h3><?php echo $category->name; ?></h3>
     </div>

   <?php } ?>




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
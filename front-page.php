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


  <section class="background-image-cards">
    <?php 
    // Get all categories, including empty ones
    $categories = get_categories(array(
        'hide_empty' => false, // Include categories with no posts
    ));

    // Loop through all categories
    foreach ($categories as $category) { 
        // Get the category name, ID, and link
        $category_name = $category->name;
        $category_id = $category->term_id;
        $category_link = get_category_link($category_id);

        // Get the ACF field for the category
        $image = get_field('image', 'category_' . $category_id); // Use 'category_' prefix with term ID
        ?>

        <!-- Echo your card -->
        <div class="background-image-card" style="background-image: url(<?php echo esc_url($image); ?>);">
            <a href="<?php echo esc_url($category_link); ?>" class="background-image-card-link">
                <h3><?php echo esc_html($category_name); ?></h3>
            </a>
        </div>

    <?php } ?>
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
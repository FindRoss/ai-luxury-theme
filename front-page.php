<?php get_header(); ?>

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
  
  <?php get_template_part( 'template-parts/card/short-card' );?>
    <?php get_template_part( 'template-parts/card/short-card' );?>
        <?php get_template_part( 'template-parts/card/short-card' );?>

        
  </div>
<!-- CAMERA POSTS -->



<div class="cameras">
   
<img width="900" height="600" src="https://s3-alpha-sig.figma.com/img/a035/5f2a/603a73465e7cb73eb9d70a7e38b31fd4?Expires=1741564800&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=PLrDKxynUaUv6QBKuqaUcbpUGDmI8JhkUC3PsNY1lez3Nor9usR1kHAbJVPVoTzn59fIplJ8X7aVqWUFfPQb2-~qBoDU-Y7RFDVh9UkTZz7KeI2aU8M2K0pHrek0UqDABuLooCUkY02d-5cHaQQGtfObqpp0emQlYM-yBfbcFP3UVTwkpTgLmZLo5YWE7NPsJyT9xniJqvDrkv1~twmXZ~7X1DIHXO1G-V7nN1OTrHRDMltQSVnJYPBWSqyd5aImdPeU-iQemf0xuL17Eoa~iTjotoHM83gzDMiSNSOblEeNuvc2H~0LqKob-ySwmKgSrClEgkJ1YIkx~EI-DxAUeg__" alt="AI gadgets">
<h2> The Best AI Security Cameras</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus debitis saepe necessitatibus illo provident. Aliquid quae corrupti natus magnam qui doloremque</p>
    </div>
<!-- CAMERAS -->
<h2 class="deals">Deals</h2>

    </div>
<!-- CAMERA SECTION -->


<div class="home-section">

<h2> Home & Garden </h2>

<?php 
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    ); 

    $query = new WP_Query($args); 
  ?>


<div class="home-grid">

<div class="home-grid-left">
<?php
        get_template_part( 'template-parts/card/card' );?>
</div>

<div class="home-grid-right">
<?php get_template_part( 'template-parts/card/long-card' );  ?>
<?php get_template_part( 'template-parts/card/long-card' );  ?>
<?php get_template_part( 'template-parts/card/long-card' );  ?>

</div>

    
   
</div>
<!-- HOME GRID -->


</div>
<!-- HOME & GARDEN SECTION -->



<div class="security">

<h2> Security </h2>


<?php 
    $args = array(
      'post_type'      => 'post', 
      'posts_per_page' => 3,
      
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :

      echo '<div class="card-grid">';
        while ($query->have_posts()) : $query->the_post(); 
         get_template_part( 'template-parts/card/card' );
        endwhile; 
      echo '</div>';
    endif; ?>

  </div>
    



</div>
  <!-- CONTAINER -->
  
  
  
  <?php get_footer(); ?> 
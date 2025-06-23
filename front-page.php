<?php get_header(); ?>



<?php 
    $featured_args = array(
      'post_type' => 'post',
      'posts_per_page' => 1
      ); 
      $featured_query = new WP_Query($featured_args); 




      $latest_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'offset' => 1, // Skip the first post (featured post)
        // 'posts__not_in' => $featured_args, // Exclude featured posts
      );



  
       $latest_query = new WP_Query($latest_args); 





       $rest_of_posts_args = array(
        'post_type' => 'post',
        'posts_per_page' => 20,
        'offset' => 4, // Skip the first 4 posts (1 featured + 3 latest)
        // 'posts__not_in' => $featured_args, // Exclude featured posts
      );
   
       $rest_of_posts_query = new WP_Query($rest_of_posts_args); 




?>
  <div class="container">

    <section class="hokkaido-section"> 

      <div class="col-1">
        <?php if ( $featured_query->have_posts() ) : ?>
          <?php while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
            
        <?php get_template_part( 'template-parts/card/tokyo-card' );?>

        <?php $used_posts[] = get_the_ID(); ?>
          
          
        <?php endwhile; ?>
          <?php endif; ?>

      </div>

       <div class="col-2">
          <div class="section-heading"><h2>Latest Articles</h2></div>
          <?php if ( $latest_query->have_posts() ) : ?>
            <?php while ( $latest_query->have_posts() ) : $latest_query->the_post(); ?>
            
            <?php get_template_part( 'template-parts/card/kanazawa-card' );?>
       

        <?php $used_posts[] = get_the_ID(); ?>
          
          
        <?php endwhile; ?>
          <?php endif; ?>
      </div>

    </section>


<h2 class="more-articles">More Articles</h2>

<?php
// Query to fetch the latest posts
// $args = array(
//     'post_type'      => 'post', // Fetch posts
//     'posts_per_page' => 20,     // Limit to 20 posts
//     'orderby'        => 'date', // Order by date
//     'order'          => 'DESC', // Show latest posts first
// );

// $query = new WP_Query($args);

?>

<div>

<section class="latest-section">

<?php if ( $rest_of_posts_query->have_posts() ) : ?>
            <?php while ( $rest_of_posts_query->have_posts() ) : $rest_of_posts_query->the_post(); ?>
            
           
            <?php get_template_part( 'template-parts/card/bg-card' ); ?>
       

        <?php $used_posts[] = get_the_ID(); ?>
          
          
        <?php endwhile; ?>
          <?php endif; ?>

</section>

</div>

<?php
// Reset post data
wp_reset_postdata();
?>

<?php get_footer(); ?>
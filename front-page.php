<?php get_header(); ?>



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


<h2 class="more-articles">More Articles</h2>

<?php
// Query to fetch the latest posts
$args = array(
    'post_type'      => 'post', // Fetch posts
    'posts_per_page' => 20,     // Limit to 20 posts
    'orderby'        => 'date', // Order by date
    'order'          => 'DESC', // Show latest posts first
);

$query = new WP_Query($args);

?>

<div>

<section class="latest-section">
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
<?php get_template_part( 'template-parts/card/bg-card' ); ?>
</section>

</div>

<?php
// Reset post data
wp_reset_postdata();
?>

<?php get_footer(); ?>
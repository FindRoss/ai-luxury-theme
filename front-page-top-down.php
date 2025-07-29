<?php get_header(); ?>

<?php 
  

  $top_post = null; 
  $middle_posts = array(); 
  $bottom_posts = array(); 

  $all_posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 24,
  ));

  if ($all_posts->have_posts()) {
    $posts = $all_posts->posts;

    $top_post = $posts[0];
    $middle_posts = array_slice($posts, 1, 4); 
    $bottom_posts = array_slice($posts, 5, 20);
  }



?>
<div class="container">

  <section class="hokkaido-section"> 

    <div class="col-1">
      <?php if ( $top_post ) : ?>
        <?php setup_postdata($top_post); ?>
        <?php get_template_part( 'template-parts/card/tokyo-card' );?>
      <?php endif; ?>
    </div>

      <div class="col-2">
        <div class="section-heading"><h2>Latest Articles</h2></div>
        <?php if ( !empty($middle_posts) ) : ?>
          
          <?php foreach($middle_posts as $post) : ?>
          
            <?php setup_postdata($post); ?>
            <?php get_template_part( 'template-parts/card/kanazawa-card' );?>

          <?php endforeach; ?>

        <?php endif; ?>
    </div>

  </section>



<div class="section-heading">
  <h2>More Articles</h2>
</div>

<section class="latest-section">
  <?php if (!empty($bottom_posts)) : ?>
    <?php foreach($bottom_posts as $post) : ?>
      
      <?php setup_postdata($post); ?>
      <?php get_template_part( 'template-parts/card/bg-card' ); ?>

    <?php endforeach; ?> 
  <?php endif; ?>     
</section>



<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
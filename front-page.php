<?php get_header(); ?>

<?php 

$top_post = null; 
$middle_posts = array(); 
$rest_of_posts = array();

$all_posts = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 100,
));

if ($all_posts->have_posts()) {
  $posts = $all_posts->posts;

  $top_post = $posts[0];
  $middle_posts = array_slice($posts, 1, 4); 
  $rest_of_posts = array_slice($posts, 5); 

  // 1. Get IDs for the "rest" posts
  $rest_post_ids = wp_list_pluck($rest_of_posts, 'ID');

  // 2. Get all categories assigned to those posts
  $rest_terms = wp_get_object_terms($rest_post_ids, 'category', [
    'fields' => 'all_with_object_id',
  ]);


  $categories_by_post = [];
  foreach ($rest_terms as $term) {
    $categories_by_post[$term->object_id][] = $term;
  }

  // 3. Group posts by primary category slug
  $posts_by_cat = [];

  foreach ($rest_of_posts as $post) {
    $post_id = $post->ID;

    // Get Yoast Primary Category (if available)
    $primary_term = null;
    if (class_exists('WPSEO_Primary_Term')) {
      $yoast_primary = new WPSEO_Primary_Term('category', $post_id);
      $primary_term_id = $yoast_primary->get_primary_term();
      $primary_term = get_term($primary_term_id);

    }

    // Fallback to first assigned category
    if (!$primary_term || is_wp_error($primary_term)) {
      $primary_term = $categories_by_post[$post_id][0] ?? null;
    }

    // Assign post to the category group
    if ($primary_term) {
      $slug = $primary_term->slug;
      $posts_by_cat[$slug][] = $post;
    }
  }
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



  <?php foreach ($posts_by_cat as $key => $value) : 
    $cat = get_term_by('slug', $key, 'category'); 
    $cat_name = $cat ? $cat->name : '';
    $cat_link = $cat ? get_term_link($cat) : '';
    
    if (count($value) > 5) { ?>
      <section>
        <div class="section-heading">
          <h2><a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></h2>
        </div>

        <div class="konto-section">
          <?php
            $limited_posts = array_slice($value, 0, 6);
            foreach ($limited_posts as $post) :
              setup_postdata($post); 
              get_template_part('template-parts/card/osaka-card');
            endforeach;
            wp_reset_postdata();
          ?>
        </div>

      </section>
    <?php } ?>
  <?php endforeach; ?>

     
  <!-- <div class="shikoku-section">
    <div>
        get_template_part( 'template-parts/card/osaka-card' )
    </div>

    <div class="flex-column">
      get_template_part( 'template-parts/card/kyoto-card' ); 
        get_template_part( 'template-parts/card/kyoto-card' );  
        get_template_part( 'template-parts/card/kyoto-card' );  
    </div>
  </div> -->

</div><!-- CONTAINER -->
  
  
  
  <?php get_footer(); ?> 
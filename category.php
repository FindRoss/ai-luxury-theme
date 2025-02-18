<?php get_header();?>
<div class="category-container">
  <?php
  get_template_part( 'template-parts/breadcrumbs/breadcrumbs' );

  // Get the current category object
  $category = get_queried_object(); 


  $category_id          = $category->term_id;   
  $category_name        = $category->name;  
  $category_description = $category->description;
?>

<div class="category-heading">
  <h1><?php echo $category_name; ?></h1>
  <p><?php echo $category_description; ?></p>
</div>
  



<?php 
    $args = array(
      'post_type'      => 'post', 
      'posts_per_page' => 3,
      'category'       => $category_id
    );

    $query = new WP_Query($args);
echo '<div class="category-grid">';
    if ($query->have_posts()) : 
      while ($query->have_posts()) : $query->the_post(); 

        get_template_part( 'template-parts/card/card' );
      endwhile; 
      echo '</div>';
    endif; ?>

<div class="pagination">
<?php
// Pagination
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
  'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format'  => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total'   => $query->max_num_pages
) );

// Reset post data
wp_reset_postdata();
?>
</div>
</div>
<?php get_footer(); ?>
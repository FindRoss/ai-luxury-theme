<?php get_header();?>
<div class="container">
  <?php
   // Get the current page for pagination, defaulting to 1 if not set
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  // Breadcrumbs
  get_template_part( 'template-parts/breadcrumbs/breadcrumbs' );

  // Get the current category object
  $category = get_queried_object(); 

  $category_id          = $category->term_id;   
  $category_name        = $category->name;  
  $category_description = $category->description;
?>

  <div class="category-header">
    <h1 class="category-header__heading"><?php echo $category_name; ?></h1>
    <p class="category-header__text"><?php echo $category_description; ?></p>
  </div>

<?php 
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $args = array(
    'post_type'      => 'post', 
    'posts_per_page' => 15,
    'paged'          => $paged,
    'cat'            => $category_id,
  );

  $query = new WP_Query($args);
  if ($query->have_posts()) : 
    echo '<div class="card-grid">'; 
    while ($query->have_posts()) : $query->the_post(); 
      get_template_part( 'template-parts/card/osaka-card' );
    endwhile; 
    echo '</div>';
  endif; ?>

  <div class="pagination">
    <?php
    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
      'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format'  => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total'   => $query->max_num_pages
    ));

    wp_reset_postdata(); ?>
  </div>
</div>
<?php get_footer(); ?>
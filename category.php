<?php get_header();?>
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

   $main_content = get_field('main_content', $category);
?> 
 
<div class="container">
  <header class="category-header">
    <h1 class="category-header__heading"><?php echo $category_name; ?></h1>
    <p class="category-header__text"><?php echo $category_description; ?></p>
  </header>

 <div class="category-sidebar">
  <?php
  $child_categories = get_categories(array(
    'child_of' => $category_id,
    'hide_empty' => false, // Show even if no posts
  ));

  if ( ! empty($child_categories) ) { ?>
    <ul>
      <?php foreach ( $child_categories as $category ) { ?>
        <li>
          <a href="<?php esc_url(get_category_link($category->term_id)); ?>"><?php esc_html($category->name); ?></a>
        </li>
      <?php } ?>
    <ul>
  <?php  } ?>

</div>
<?php 
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $args = array(
    'post_type'      => 'post', 
    'paged'          => $paged,
    'cat'            => $category_id,
  );

  $query = new WP_Query($args);
  if ($query->have_posts()) : 
    echo '<section class="konto-section">'; 
    while ($query->have_posts()) : $query->the_post(); 
      get_template_part( 'template-parts/card/osaka-card' );
    endwhile; 
    echo '</section>';
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

  <?php if ($main_content) : ?>
    <div class="content">
      <?php echo $main_content; ?>
    </div>
  <?php endif; ?>
</div><!-- .cointainer -->
<?php get_footer(); ?>
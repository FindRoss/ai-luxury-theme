<?php 
  $link_output = "";

  if (is_single()) {
    // is a post
    $terms = get_the_terms(get_the_ID(), 'category'); 
    if (!empty($terms) && !is_wp_error($terms)) {
      $term_name = $terms[0]->name; 
      $term_id   = $terms[0]->term_id;
      $term_tax  = $terms[0]->taxonomy;
      $term_link = get_term_link($term_id, $term_tax);

      $link_output .= '<a href="' . esc_html($term_link) . '" class="breadcrumbs__layout--item">' . esc_html($term_name) . '</a>';
    }
    
  } else if (is_tax()) {
    // Get the current term (taxonomy term, including categories and custom taxonomies)
    $term = get_queried_object();

    if ($term && !is_wp_error($term)) {
      $term_name = $term->name;
      $term_id   = $term->term_id;
      $term_tax  = $term->taxonomy;
      $term_link = get_term_link($term_id, $term_tax);

      $link_output .= '<a href="' . $term_link . '" class="breadcrumbs__layout--item">' . $term_name . '</a>';
       
    }
  } 


  // if ( function_exists('yoast_breadcrumb') ) {
  //   yoast_breadcrumb( '<nav id="breadcrumbs">','</nav>' );
  // };
?>


<?php if ($link_output !== "") : ?>
<nav class="breadcrumbs">
  <div class="container">
    <div class="breadcrumbs__layout">

      <?php echo $link_output; ?>

      <!-- <a href="#" class="breadcrumbs__layout--item">Home & Garden</a>
      <span class="breadcrumbs__layout--spacer">/</span>
      <a href="#" class="breadcrumbs__layout--item">Security</a>   -->

    </div>
  </div>
</nav>
<?php endif; ?>



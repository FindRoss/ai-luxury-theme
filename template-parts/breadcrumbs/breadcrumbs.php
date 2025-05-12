<?php 
// Final output for any case
$link_output = "";

if (is_single()) {

    $categories = get_the_category();
    
    usort($categories, function($a, $b) {
      return $a->parent - $b->parent;
    });
    
    if ($categories) {
      foreach($categories as $category) {
        // Get the category name, ID, and link
        $cat_name = $category->name;
        $cat_id   = $category->term_id;
        $cat_link = get_category_link($cat_id);

        // Add the category link to the output
        $link_output .= '<span class="breadcrumbs__layout--item"><a href="' . esc_html($cat_link) . '">' . esc_html($cat_name) . '</a></span>';
      }

      $title = get_the_title();

      $link_output .= '<span class="breadcrumbs__layout--item">' . $title . '</span>';
    }
  
  
} else if (is_category()) {
  $term = get_queried_object();

  if ($term->parent !== 0) {
    $category = get_category($term->parent);

    $cat_name = $category->name;
    $cat_id   = $category->term_id;
    $cat_link = get_category_link($cat_id);

    // Add the category link to the output
    $link_output .= '<span class="breadcrumbs__layout--item"><a href="' . esc_html($cat_link) . '">' . esc_html($cat_name) . '</a></span>';

    $link_output .= '<span class="breadcrumbs__layout--item">' . $term->name . '</span>';
  }


}; ?>


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



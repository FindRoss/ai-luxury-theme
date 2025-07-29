<?php 
// Final output for any case
$link_output = "";


if (is_single()) {

  $primary_category = null;

  // Step 1: Get the Yoast primary category
  if (class_exists('WPSEO_Primary_Term')) {
    $primary_term = new WPSEO_Primary_Term('category', get_the_ID());
    $primary_term_id = $primary_term->get_primary_term();

    if (!is_wp_error($primary_term_id)) {
      $primary_category = get_category($primary_term_id);
    }
  }

  if ($primary_category && $primary_category->term_id > 1) {

    $primary_id = $primary_category->term_id;

    // Step 2: Get all categories assigned to the post
    $post_categories = get_the_category();

    // Step 3: Check which assigned categories are descendants of the primary
    $breadcrumb_path = [$primary_category]; // start with the primary

    // Try to find the deepest matching child path
    $deepest_path = [];

    foreach ($post_categories as $cat) {
      if ($cat->term_id === $primary_id) {
        continue; // skip the primary itself
      }

      // Step 4: Build path from current category up to top-level
      $path = [];
      $current = $cat;

      // Walk up the tree
      while ($current && $current->parent != 0) {
        array_unshift($path, $current); // build from leaf to root
        $current = get_category($current->parent);
        if ($current->term_id == $primary_id) {
          // We found a valid descendant path to the primary
          array_unshift($path, $current);
          if (count($path) > count($deepest_path)) {
            $deepest_path = $path; // store the longest matching path
          }
          break;
        }
      }
    }

    if (!empty($deepest_path)) {
      // Replace breadcrumb path with the full one if found
      $breadcrumb_path = $deepest_path;
    }

    // Step 5: Build the breadcrumb HTML
    $link_output = '';
    foreach ($breadcrumb_path as $cat) {
      $cat_link = get_category_link($cat->term_id);
      $link_output .= '<span class="breadcrumbs__layout--item"><a href="' . esc_url($cat_link) . '">' . esc_html($cat->name) . '</a></span>';
    }

    $link_output .= '<span class="breadcrumbs__layout--item">' . esc_html(get_the_title()) . '</span>';
  }
  
} else if (is_category()) {

  $term = get_queried_object();

  if ($term->parent !== 0) {
    $parent_category = get_category($term->parent);

    $parent_cat_name = $parent_category->name;
    $parent_cat_link = get_category_link($parent_category->term_id);

 
    if ($parent_category->parent !== 0) {
      $grandparent_category = get_category($parent_category->parent);

      $grandparent_cat_name = $grandparent_category->name;
      $grandparent_cat_link = get_category_link($grandparent_category->term_id);

      // Add this one first - the grandparent category link to the output
      $link_output .= '<span class="breadcrumbs__layout--item"><a href="' . esc_html($grandparent_cat_link) . '">' . esc_html($grandparent_cat_name) . '</a></span>';
    }

    // The parent category link to the output
    $link_output .= '<span class="breadcrumbs__layout--item"><a href="' . esc_html($parent_cat_link) . '">' . esc_html($parent_cat_name) . '</a></span>';

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



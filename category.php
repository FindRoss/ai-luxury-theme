<?php get_header();

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
      'posts_per_page' => -1,
      'category'       => $category_id
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : 
      while ($query->have_posts()) : $query->the_post(); 

        require locate_template('card.php');
  
     endwhile; 
    endif; ?>


<?php get_footer(); ?>
<?php get_header();

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
      'posts_per_page' => -1,
      'category'       => $category_id
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : 
      while ($query->have_posts()) : $query->the_post(); 

        get_template_part( 'template-parts/card/card' );
  
     endwhile; 
    endif; ?>

<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam modi atque accusamus esse temporibus quaerat voluptas expedita sequi placeat facere est corporis asperiores, eligendi iure impedit repudiandae reiciendis eveniet. Explicabo.</p>
<?php get_footer(); ?>
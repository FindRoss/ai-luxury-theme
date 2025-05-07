<?php 

 // ACF IMAGE FIELD
    // Get the categories
    $categories = get_categories();
    
    // Test if & how the categories are returned
    // print_r($categories);

    // Add a parent container for the flex or grid 

    // Loop through through all the categories
    foreach ($categories as $category) { 

      // 'image' is the name of the ACF field. must match the name set on ACF.
      $image = get_field('image', $category);
      ?>

      <!-- Echo your card. Can do as a template-part here. -->
      <div class="background-image-card" style="background-image: url(<?php echo $image; ?>);">
        <h3><?php echo $category->name; ?></h3>
      </div>

    <?php }

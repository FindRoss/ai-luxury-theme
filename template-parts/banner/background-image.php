<?php 
  // This should be ID of the post where you have stored the background image. 
  // This is the one thing we need to display everything: image, title, excerpt.
  $postID = 20;

  // This 'gets' the image but will not output it.
  $background_image = get_field('background_image', $postID); 
  // To output the image you can use echo
  //  echo $background_image; 

  // Test you are getting back the correct data back
  // print_r($background_image);

  // To output directly you can use:
  // the_field('background_image', $postID);

?>



<div class="background-image-banner" style="background-image: url('<?php echo $background_image; ?>');">
  <div class="container">
    <div class="banner-link">
    <a href="*"><h2>SALE 50% OFF</h2></a>
    </div>
    <!-- <h2 class="title"><?php echo get_the_title($postID); ?></h2> -->
    <!-- <p class="excerpt"><?php echo get_the_excerpt($postID);?></p> -->
  </div>
</div>

<!-- You would still need to style this with CSS but this should output the info -->
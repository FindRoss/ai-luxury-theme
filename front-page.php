<?php get_header(); ?>

  <?php 
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    ); 

    $query = new WP_Query($args); 
  ?>

  <div class="container">

    <h2>Latest Articles</h2>
    
    <?php
      if ($query->have_posts()) : 
        while ($query->have_posts()) : $query->the_post(); ?>
          
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">Read full article</a>

        <?php 
        endwhile;
      endif; 
    ?>

  </div>

<?php get_footer(); ?>
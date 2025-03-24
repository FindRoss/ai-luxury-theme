<?php get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs/breadcrumbs' ); ?>

<?php get_template_part( 'template-parts/search/search' ); ?>

<div class="container"> 

  <section>
    <div>
      <h1 class="page-header"><?php the_title(); ?></h1>
      
    </div>
    <div>
      <?php if (has_post_thumbnail()): ?>
        <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" />
        <?php endif; ?>
      </div>
    </section>
    
    
    <section class="content page-content">  
      <?php the_content(); ?>
    </section>
    





    <?php 
    $args = array(
      'post_type'      => 'post', 
      'posts_per_page' => 3,
      
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :

      echo '<div class="card-grid">';
        while ($query->have_posts()) : $query->the_post(); 
          get_template_part( 'template-parts/card/osaka-card' );
        endwhile; 
      echo '</div>';
    endif; ?>


    
  </div>
    

    <?php get_footer(); ?>
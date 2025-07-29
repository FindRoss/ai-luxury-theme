<?php get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs/breadcrumbs' ); ?>

<div class="container"> 

  <article>

    <!-- Section -->
    <header class="heading">
      <div class="heading__content">
        <h1><?php the_title(); ?></h1>
        <div class="date">Published <?php echo get_the_date('M j'); ?></div>
      </div>
    </header>

    <section class="content grid-content">  
      <?php the_content(); ?>
    </section>

    <!-- I WANT A SIDEBAR HERE -->
    <div class="sidebar"></div>

  </article>


  <?php 
    $args = array(
      'post_type'      => 'post', 
      'posts_per_page' => 3,
      'post__not_in'   => array(get_the_ID()), // Exclude current post
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
      echo '<div class="konto-section">';
        while ($query->have_posts()) : $query->the_post(); 
          get_template_part( 'template-parts/card/osaka-card' );
        endwhile; 
      echo '</div>';
    endif; ?>

</div>



<?php get_footer(); ?>
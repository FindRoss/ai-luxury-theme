<?php get_header(); ?>

<?php // get_template_part( 'template-parts/banner/background-image' ); ?>


<?php // get_template_part( 'template-parts/search/search-bar' ); ?> 

<?php get_template_part( 'template-parts/breadcrumbs/breadcrumbs' ); ?>

<div class="container"> 

  <article>

    <!-- Heading -->
    <header class="heading grid-content">
      <div class="heading__content">
        <h1><?php the_title(); ?></h1>
        <div class="date">Updated Jan 25</div>
      </div>
      <?php if (has_post_thumbnail()): ?>
        <div class="heading__image">
          <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" />
        </div>
      <?php endif; ?>
    </header>

    <!-- Section -->
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
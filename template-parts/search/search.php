

<div class="container">
  <!-- Search Bar -->
  <div class="search-bar">
    <?php get_search_form(); ?>
  </div>

  <h1>Search Results for: <?php echo get_search_query(); ?></h1>

  <?php if (have_posts()) : ?>
    <div class="search-results">
      <?php while (have_posts()) : the_post(); ?>
        <div class="search-result-item">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_excerpt(); ?></p>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="pagination">
      <?php echo paginate_links(); ?>
    </div>
  <?php else : ?>
    <p>No results found for "<?php echo get_search_query(); ?>". Please try again with different keywords.</p>
  <?php endif; ?>
</div>

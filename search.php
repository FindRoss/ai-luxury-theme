<?php get_header(); ?>

<div class="container">
  <h1>Search Results for: <?php echo get_search_query(); ?></h1>

  <?php if (have_posts()) : ?>
    <ul>
      <?php while (have_posts()) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php else : ?>
    <p>No results found. Try a different search?</p>
    <?php get_search_form(); ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>

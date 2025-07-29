<?php get_header(); ?>

<div class="container">
  <article>

    <header class="heading">
      <div class="heading__content">
        <h1><?php the_title(); ?></h1>
      </div>
    </header>

    <section class="content grid-content">
      <?php the_content(); ?>
    </section>

  </article>

</div>

<?php get_footer(); ?>

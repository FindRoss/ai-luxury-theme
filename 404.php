<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package AI_Luxury_Theme
 */

get_header(); ?>

<div class="container">
  <section class="error-content">
    
      <h1 class="error-header"><?php esc_html_e( 'Oops! That page can’t be found.', 'ai-luxury-theme' ); ?></h1>


  
<div class="not-found">
      <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'ai-luxury-theme' ); ?></p>
</div>


<div class="search-bar">
      <?php get_search_form(); ?>
</div>

<div class="return-home">
      <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">
        <?php esc_html_e( 'Return to Homepage', 'ai-luxury-theme' ); ?>
      </a></p>
  </div>
  </section><!-- .error-content -->
</div><!-- .container -->

<?php
get_footer();
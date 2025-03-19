<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package AI_Luxury_Theme
 */

get_header(); ?>

<div class="container">
  <section class="error-404 not-found">
    <header class="page-header">
      <h1 class="page-title"><?php esc_html_e( 'Oops! That page can’t be found.', 'ai-luxury-theme' ); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
      <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'ai-luxury-theme' ); ?></p>

      <?php get_search_form(); ?>

      <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">
        <?php esc_html_e( 'Return to Homepage', 'ai-luxury-theme' ); ?>
      </a></p>
    </div><!-- .page-content -->
  </section><!-- .error-404 -->
</div><!-- .container -->

<?php
get_footer();
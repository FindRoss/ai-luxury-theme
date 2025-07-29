<?php 
/**
 * Template Name: Search Page
 */

get_header(); ?>


<div class="container">
    <main class="search-layout">
        <h1>Search</h1>
        
        <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
            <input type="search" name="s" placeholder="Search…" value="<?php echo get_search_query(); ?>" />
            <button type="submit">Search</button>
        </form>
    </main>
</div><!-- .container -->

<!-- Spacer -->
<div style="padding-bottom: 3rem;"></div>

<?php get_footer(); ?>
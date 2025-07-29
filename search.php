<?php get_header(); 

$search_query = get_search_query(); 

$search_query = new WP_Query(array(
    's'         => $search_query,
    'post_type' => array('post','page')
));
?>


<div class="container">
    <main class="search-layout">

    
        <h1>Search</h1>

        <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
            <input type="search" name="s" placeholder="Search…" value="<?php echo get_search_query(); ?>" />
            <button type="submit">Search</button>
        </form>

        <hr>

        <?php if ( $search_query->have_posts() ) : ?>
            <div class="search-results-count">
                <p>Results for: <strong><?php echo get_search_query(); ?></strong></p>
            </div>

            <section class="search-results">
                <ul>
                    <?php while ( $search_query->have_posts() ) : $search_query->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </section>
        
            <?php elseif ( ! $search_query->have_posts() && get_search_query() ) : ?>
        
            <div class="search-results-count">
                <p>No results found for: <strong><?php echo get_search_query(); ?></strong></p>
            </div>

        <?php endif; ?>

    </main>
</div><!-- .container -->
<?php get_footer(); ?>
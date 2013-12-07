<?php get_header(); ?>

    <h1>Search Results for <span>'<?php echo get_query_var( 's' ); ?>'</span></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
        <h1><?php the_title(); ?></h1>

        <?php the_content( 'more' ); ?>
    </article>
    <?php endwhile; ?>
    
    <ul class="pagination">
        <li><?php previous_posts_link( 'Previous' ); ?></li>
        <li><?php next_posts_link( 'Next' ); ?></li>
    </ul>

    <?php else: ?>
        <h1>Not found</h1>

        <p>Sorry, the content you were looking for was not found. <a href="<?php bloginfo( 'url' ); ?>">Go to homepage?</a></p>
    <?php endif; ?>

<?php get_footer(); ?>
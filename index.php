<?php get_header(); ?>

<h1>Recent Posts</h1>

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

<?php endif; ?>

<?php get_footer(); ?>
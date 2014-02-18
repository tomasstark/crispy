<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="article">
        <header>
            <div class="meta">
                Written on <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php the_date(); ?></time>
            </div>

            <h1><?php the_title(); ?></h1>
        </header>

        <?php the_content( 'more' ); ?>

        <footer>
            <span class="author">by <?php the_author(); ?></span>
        </footer>
    </article>
<?php endwhile; ?>
    
    <ul class="pagination">
        <li><?php previous_posts_link( 'Previous' ); ?></li>
        <li><?php next_posts_link( 'Next' ); ?></li>
    </ul>

<?php endif; ?>

<?php get_footer(); ?>
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
    </article>

    <ul class="pagination">
        <li><?php previous_post_link( '%link', 'Previous' ); ?></li>
        <li><?php next_post_link( '%link', 'Next' ); ?></li>
    </ul>
<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
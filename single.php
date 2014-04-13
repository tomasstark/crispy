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

    <div class="pagination">
        <ul>
            <li class="prev"><?php if( get_previous_post_link() ) { ?>Previous <span><?php previous_post_link( '%link', '%title' ); ?></span><?php } ?></li>
            <li class="next"><?php if( get_next_post_link() ) { ?>Next <span><?php next_post_link( '%link', '%title' ); ?><?php } ?></span></li>
        </ul>
    </div>
<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
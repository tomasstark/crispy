<?php get_header(); ?>

<?php
    function limit_words( $string, $word_limit ) {
        $words = explode( ' ', $string );
        return implode( ' ', array_splice( $words, 0, $word_limit ) );
    }
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); global $post; ?>
    <article class="index article">
        <header>
            <div class="meta">
                Written on <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php the_date(); ?></time>
            </div>

            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        </header>

        <p><?php echo limit_words( get_the_excerpt(), 20 ); ?><?php if( str_word_count( get_the_excerpt() ) > 20 ) { ?>...<?php } ?></p>
    </article>

    <hr>
<?php endwhile; ?>
    
    <ul class="pagination clearfix">
        <li class="prev"><?php previous_posts_link( 'Previous' ); ?></li>
        <li class="next"><?php next_posts_link( 'Next' ); ?></li>
    </ul>

<?php endif; ?>

<?php get_footer(); ?>
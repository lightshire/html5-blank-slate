<?php
/**
 * Default Archives Template
 *
 */

get_header(); ?>
    
    <div class="content" role="main">

        <header>
            <h1><?php single_cat_title( __( 'Archive for ', 'h5bs' ) ); ?></h1>
        </header>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article <?php post_class( 'group' ); ?> role="article">
            <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time>
            </header>
            <?php the_excerpt(); ?>
        </article>
        
        <?php endwhile; ?>
        
        <div class="page-nav">
            <div class="alignleft"><?php next_posts_link( __( '&laquo; Older Entries', 'h5bs' ) ); ?></div>
            <div class="alignright"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'h5bs' ) ); ?></div>
        </div>
        
        <?php endif; ?>

    </div><!-- end content -->
    
    <?php // get_sidebar(); ?>

<?php get_footer(); ?>
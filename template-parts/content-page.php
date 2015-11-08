<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ITforge
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header-single">
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="feature-img">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php } ?>

        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="entry-meta">
            <?php itforge_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'itforge' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
            edit_post_link(
                sprintf(
                    /* translators: %s: Name of current post */
                    esc_html__( 'Edit %s', 'itforge' ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ),
                '<span class="edit-link">',
                '</span>'
            );
        ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->


<?php
/**
 * Template part for displaying on custom page templates.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lorenzoovens
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        the_content( sprintf(
        /* translators: %s: Name of current post. */
            wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lorenzoovens' ), array( 'span' => array( 'class' => array() ) ) ),
            the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lorenzoovens' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php lorenzoovens_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
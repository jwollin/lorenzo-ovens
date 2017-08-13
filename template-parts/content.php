<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lorenzoovens
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
            $this_post_title = get_the_title();
			if ( is_home() ) :
				the_title( '<h3 class="entry-title">', '</h3>' );
			endif;
			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php lorenzoovens_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
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
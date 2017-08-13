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
				the_title( '<h2 class="entry-title card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail();
				}

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php lorenzoovens_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_excerpt( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lorenzoovens' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lorenzoovens' ),
					'after'  => '</div>',
				) );
			?>
			<a href="<?php echo esc_url( get_permalink() );  ?>" class="waves-effect waves-light red darken-4 btn profile-btn">Read More</a>

		</div><!-- .entry-content -->
	</article><!-- #post-## -->
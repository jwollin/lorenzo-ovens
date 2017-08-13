<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lorenzoovens
 */

get_header();
get_sidebar(); ?>

	<div id="primary" class="content-area col s12 m8 l8">
		<main id="main" class="site-main" role="main">
			<div class="card">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_format() );
					echo "</div><!-- .card -->";
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						echo '<div class="card">';
						comments_template();
						echo '</div>';
					endif;
				endwhile; // End of the loop.

				?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lorenzoovens
 */

get_header();
get_sidebar(); ?>

<div id="primary" class="content-area col s12 m8 l8">
		<main id="main" class="site-main" role="main">
			<?php
			$args = array(
				'cat' => 30,
				'orderby' => rand,
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 1,
				'caller_get_posts'=> 1
			);
			$my_query = null;
			$my_query = new WP_Query($args);

			if( $my_query -> have_posts() ) :
				while ( $my_query -> have_posts() ) : $my_query->the_post(); ?>

				<div class="card">

					<?php if ( has_post_thumbnail() ) : ?>

						<img src="<?php echo get_the_post_thumbnail() ?>" alt=" <?php echo the_title(); ?>">

					<?php endif;

					get_template_part( 'template-parts/content', get_post_format() ); ?>

				</div><!-- .card -->

				<?php endwhile;

			endif;

			wp_reset_query();  // Restore global post data stomped by the_post().

			if ( have_posts() ) :

				if ( is_home() || is_front_page() ) : ?>
					<div class="card">
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

							<?php endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

					endif;
                    wp_reset_query(); ?>
				</div><!-- .card -->
                    <?php if( have_rows( 'front_page_services') ) : ?>
	                    <div class="card">
	                    	<?php while( have_rows( 'front_page_services') ) : the_row(); ?>
		                    	<div class="row">
		                    		<div class="col s12" style="background: url("<?php the_sub_field('front_page_image'); ?>"); height='75px';>
		                    			<a href="<?php the_sub_field( 'front_page_url' ); ?>"><h3 class="center-align"><?php the_sub_field( 'front_page_title' ); ?></h2></a>
		                    		</div>
		                    	</div>
	                		<?php endwhile; ?>
	                    </div>
                	<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

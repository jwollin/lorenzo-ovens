<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lorenzoovens
 */

?>
		</div><!-- #content -->
	</div><!-- .row -->
	<?php if ( is_front_page() ) : ?>
		<div class="row">
			<div class="container">
				<div class="col s12">
					<div class="card">
						<?php echo wdi_feed( array( 'id' => '1' ) ); ?>
					</div><!-- .card -->
				</div><!-- .card -->
			</div><!-- container -->
		</div><!-- .row -->
	<?php endif; ?>
	<div class="footer-top">
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="site-info">
				<!-- <img width="208" height="auto" src="<?php // echo get_template_directory_uri(); ?>/img/white-logo.svg" alt="Lorenzo Ovens Logo" class="logo"> -->
				<h4 class="center"><?php echo bloginfo( 'name' ); ?></h4>
				<div class="container">
					<div class="col s6 m4 l2 primary-footer-menu">
						<div class="footer-menu">
							<?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary-footer-menu',
                                'menu_id' => 'primary-footer-menu'
                            ) );
                            ?>
						</div><!-- .footer-menu -->
					<?php if ( wp_is_mobile() == false) {
						echo '</div><!-- column 1 --><div class="col s6 m4 l2 footer-menu secondary-footer-menu">';
					} ?>
						<div class="footer-menu">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'secondary-footer-menu',
								'menu_id' => 'secondary-footer-menu'
							) );
							?>
						</div><!-- .footer-menu -->
					</div><!-- column 2 -->
					<div class="col s12 m4 l4">
						<div class="footer-description">
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</div>
					</div><!-- column 3 -->
					<div class="col s12 m4 l3 offset-l1">
						<div class="footer-info">
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
							<div class="social-menu">
								<h6>Don't be shy, be social!</h6>
								<ul>
									<li>
										<a href="<?php echo esc_url( 'https://www.facebook.com/Lorenzo-Ovens-1200983043272521/')?>"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="<?php echo esc_url( 'https://www.instagram.com/lorenzosovens/'); ?>"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="<?php echo esc_url( 'https://www.linkedin.com/in/lorenzo-torregrossa-9635ab45/' ); ?>"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div><!-- .footer-social-menu -->
							<p class="footer-copyright">&copy; <?php echo date("Y") ?> Lorenzo Ovens. All Rights Reserved. Website created by <strong><a class="designer-link" href="http://www.jessewollin.com">Jesse Wollin</a></strong>, designer and front end web developer</p>
						</div><!-- .footer-info -->
					</div><!-- column 4 -->
				</div><!-- .container -->
			</div><!-- .site-info -->
		</div><!-- .row -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80487606-2', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>

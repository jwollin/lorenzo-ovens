<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lorenzoovens
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="description" content="Lorenzo's Ovens is a full service contractor for custom made wood fired ovens, Italian catering and professional personal chef services and cooking class in the Minneapolis, St. Paul and the Twin Cities metro.">
	<meta name="keywords" content="Minnesota Wood Fired Ovens, Minnesota Pizza, Minneapolis Italian Catering, Minneapolis, Twin Cities Catering, Minneapolis Italian, Minneapolis Ovens, Fireplaces">
	<meta name="author" content="Lorenzo Torregossa">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lorenzoovens' ); ?></a>
    <div class="row mobile-menu">
        <div class="col s12">
            <a href="#" class="menu-close"><img width="40" height="auto" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close-menu"></a>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu'
            ) );
            ?>
        </div><!-- .col s12 -->
    </div><!-- .row .mobile-menu -->
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col s2 offset-s10">
	                <a href="#" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars fa-2x"></i></a>
				</div>
				<div class="col m2 l3">
					<img width="208" height="auto" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Lorenzo Ovens Logo" class="logo">
				</div>
				<div class="col m6 l5 header-primary-menu-column">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_id' => 'primary-menu'
						) );
						?>
					</nav><!-- #site-navigation .main-navigation -->
				</div><!-- .col s6 m8 l8 header-primary-menu-column -->
				<div class="col s6 m4 l2 offset-l2 social-menu">
					<h6>Don't be shy, be social!</h6>
                    <ul>
						<li>
							<a href="<?php echo esc_url( 'https://www.facebook.com/Lorenzo-Ovens-1200983043272521/')?>"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="<?php echo esc_url( 'https://www.instagram.com/lorenzosovens/'); ?>"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="<?php echo esc_url( 'https://www.linkedin.com/in/lorenzo-torregrossa-9635ab45/' ); ?>"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div><!-- .header-social-menu-column -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->
    <?php if ( 1309 !==  get_the_ID() ) : ?>
	<div class="header-cover">
		<div class="row site-banner" style="background-image: <?php change_header_background(); ?>">
			<div class="container">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
						$description = get_bloginfo( 'description', 'display' );
						if ( is_front_page() ) {
							if ( $description || is_customize_preview() ) : ?>
								<h2 class="site-description center"><?php echo $description; ?> </h2>
							<?php endif;
						}
						else if ( is_home() ) {
							echo '<h2 class="site-description center">What\'s new with Lorenzo\'s Ovens</h2>';
						}
						else {
							echo '<h2 class="site-description center">' . get_the_title() . '</h2>';
						}
					?>
				</div><!-- .site-branding -->
			</div><!-- .container -->
		</div><!-- .site-banner -->
	</div><!-- .header-cover -->
    <?php
    endif;
    ?>
	<div class="row content-row">
		<div id="content" class="site-content container">

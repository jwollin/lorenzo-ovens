<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lorenzoovens
 */

    ?>
	<aside id="secondary" class="widget-area col s12 m4 l4" role="complementary">
    <?php if (is_single() === false ) : ?>
		<div class="card">
            <h3><?php echo the_field('profile_headline', 'user_2'); ?></h3>
            <a href="<?php the_permalink( get_page_by_path( 'About' ) ); ?>"><img src="<?php echo the_field('profile_image', 'user_2'); ?>" alt="Lorenzo's Profile Image"></a>
            <p><?php echo the_field('profile_short_description', 'user_2'); ?></p>
            <a href="<?php the_permalink( get_page_by_path( 'About' ) ); ?>" class="waves-effect waves-light red darken-4 btn profile-btn">Read More</a>
        </div><!-- .card -->
	<?php
    endif;
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        dynamic_sidebar( 'sidebar-1' );
    }
    if(is_single() || is_archive() || is_home()) {
        dynamic_sidebar( 'sidebar-2' );
    }
    if ( is_page_template( 'services.php' ) || is_page_template('contact.php') ) {
        dynamic_sidebar( 'sidebar-3' );
    }
    $args=array(
        'cat' => 8,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'caller_get_posts'=> 1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="card">
        <?php
            $name = get_post_meta($my_query->post->ID, 'WritersName', true);
            if ($name){
                echo 'Writers name: ' .$name;
            }
            get_template_part( 'template-parts/content-sidebar', get_post_format() );
            echo '</div><!-- .card -->';
        endwhile;
    }
    wp_reset_query();  // Restore global post data stomped by the_post(). ?>
</aside><!-- #secondary -->

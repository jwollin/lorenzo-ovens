<?php
/**
 * Template Name: Services Template
 *
 * Description: The template for services/products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lorenzoovens
 */

get_header();
get_sidebar();
?>
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
                while ( have_posts() ) : the_post();
                        // check for rows (parent repeater)
                        if( have_rows('menus') ): ?>
                        <div class="card">
                            <h2>The Menu</h2>
                            <div id="catering-menu">
                                <?php

                                // loop through rows (parent repeater)
                                while( have_rows('menus') ): the_row(); ?>
                                    <ul class="collapsible" data-collapsible="accordion">
                                    <li>
                                        <div class="collapsible-header">
                                            <h3><?php the_sub_field('menu_category'); ?></h3>
                                        </div>
                                    <?php
                                    // check for rows (sub repeater)
                                    if( have_rows('menu_items') ): ?>

                                        <?php
                                            // loop through rows (sub repeater)
                                            while( have_rows('menu_items') ): the_row();

                                                // display each item as a list - with a class of completed ( if completed ) ?>
                                                    <div class="collapsible-body">
                                                        <div class="row">
                                                            <div class="col s4 l2">
                                                            <?php $image = get_sub_field('item_image');
                                                            if( $image ) : ?>
                                                                    <img width="100" height="auto" src="<?php echo $image; ?>" alt="<?php the_sub_field('item_title'); ?>">
                                                            <?php endif; ?>        
                                                            </div>
                                                            <div class="col s8 l10">
                                                                <h4><strong><?php the_sub_field('item_title'); ?></strong></h4>
                                                                <p><?php the_sub_field('item_description'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php endwhile; ?>
                                            </li>
                                        </ul>
                                    <?php endif; //if( get_sub_field('items') ): ?>
                                <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
                            </div>
                        </div>
                        <?php endif; // if( get_field('to-do_lists') ): ?>

                    <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

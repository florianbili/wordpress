<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package florian_Custom
 */

get_header();
?>

<main id="primary" class="site-main">

    <div class="container">
        <div class="row">
            <!-- Blog Items -->
            <div class="col-lg-8">
                <?php
                if (have_posts()) : ?>
                    
                    <div class="row">
                    <?php /* Start the Loop */
                    
                    while (have_posts()) :
                        the_post();
                    ?>
                    <div class="col-md-6">
                        <div class="card-article">
                            <div class="card-article-img">

                            </div>
                            <div class="card-article-content">
                                
                            </div>
                        </div>
                    </div>


                    <?

                        /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                      

                    endwhile;

                    the_posts_navigation(); ?>
                    <!-- end row for if have_post() ->
                    </div>
            

                    

               <?php endif;
                ?>
            </div>
            <!-- Side Bar -->
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>


</main><!-- #main -->

<?php

get_footer();

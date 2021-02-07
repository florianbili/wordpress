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
                    $i = 1;
                    while (have_posts()) :
                        the_post();
                    ?>
                   <?php if($i ==1){
                        echo "<div class='col-md-12'>";
                        echo "<div class='card-article first'>";
                    } else {
                        echo  "<div class='col-md-6'>";
                        echo "<div class='card-article'>";
                    } ?>
                    
                        
                            <div class="card-article-img">
                            <?php florian_custom_post_thumbnail(); ?>
                            </div>
                            <div class="card-article-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">"Read more</a>
                            </div>
                        </div>
                    </div>


                    <?php $i++; endwhile; ?>

                   <?php the_posts_navigation(); ?>
                    <!-- end row for if  -->
                    </div>
            

                    

               <?php endif; ?>
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

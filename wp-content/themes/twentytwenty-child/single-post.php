<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
    <div class="single-blog-page">
        <div class="content-wrapper">

            <article class="single-blog-post">
                <?php while (have_posts() ) : the_post(); ?>
                <div class="blog-info">
                    <h1 class="blog-title"><?php the_title(); ?></h1>
                    <div class="blog-details">
                        <h5 class="author">By: <?php the_author(); ?></h5>
                        <h5 class="recipe-type">Category: <?php the_category(); ?></h5>
                    </div>
                </div>
                <div class="blog-content">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; ?>
            </article>
            
            <?php if(is_active_sidebar('sidebar-3')) : ?>
                <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar('sidebar-3'); ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</main><!-- #site-content -->


<?php get_footer(); ?>
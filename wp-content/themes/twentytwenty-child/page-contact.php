<?php
/**
 * The template for displaying the contact page.
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
    <div class="contact">
        <div class="content-wrapper">
            
            <div class="contact-txt">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content() ?>
                <?php endwhile; ?>
            </div>

        </div>
    </div>
</main><!-- #site-content -->


<?php get_footer(); ?>
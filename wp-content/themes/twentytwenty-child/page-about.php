<?php
/**
 * The template for displaying the about/home page. It uses this file so that we can use ACF for a better end user experience.
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
    
    <?php while (have_posts()) : the_post();
        $banner_one = get_field('banner_image_1');
        $banner_two = get_field('banner_image_2');
        $banner_three = get_field('banner_image_3');
        $size = "full"; 
        $cta_header = get_field('cta_header');
        $cta_paragraph = get_field('cta_paragraph_text');
        $cta_btn_txt = get_field('cta_button_text');
        $self_one = get_field('self_portrait_one');
        $self_two = get_field('self_portrait_two');
        $top_text = get_field('top_about_text');
        $bottom_text = get_field('bottom_about_text');
    ?>
    
    <div class="home-banner">
        <div class="content-wrapper">
            <figure>
                <?php if($banner_one){
                    echo wp_get_attachment_image($banner_one, $size);
                }?>
            </figure>
            <figure>
                <?php if($banner_two){
                    echo wp_get_attachment_image($banner_two, $size);
                }?>
            </figure>
            <figure>
                <?php if($banner_three){
                    echo wp_get_attachment_image($banner_three, $size);
                }?>
            </figure>    
        </div> <!--end content-wrapper-->
    </div><!--end home-decorative-banner-->
    <?php endwhile; ?>
    
    <div class="about-me">
        <div class="content-wrapper">
            <?php while ( have_posts() ) : the_post(); ?>
            <h1 class="front-page-title"><?php the_title(); ?></h1>
            
            <div class="alternate">
               <div class="top-about">
                   <figure>
                        <?php if($self_one){
                            echo wp_get_attachment_image($self_one, $size);} ?>
                   </figure>
                   <p><?php echo $top_text; ?></p>
               </div>
                <div class="bottom-about">
                    <figure>
                        <?php if($self_two){
                            echo wp_get_attachment_image($self_two, $size);} ?>
                    </figure>
                    <p><?php echo $bottom_text; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    
    <div class="contact-cta">
        <div class="content-wrapper">
            <h1><?php echo $cta_header; ?></h1>
            
            <p><?php echo $cta_paragraph; ?></p>
            
            <div class="contact-btn-link">
                <?php query_posts('pagename=contact'); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>"><?php echo $cta_btn_txt; ?></a>
                    <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        
        </div>
    </div>
    
    <div class="latest-recipe">
        <div class="content-wrapper">
            <?php query_posts('posts_per_page=1'); ?>
                <?php while ( have_posts() ) : the_post(); ?>
            <h2>Latest Recipe</h2>
            
            <h4><?php the_title(); ?></h4>
            
            <?php the_excerpt(); ?>
            
            <a href="<?php the_permalink(); ?>">read more &rsaquo;&rsaquo;</a>
            
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
	

</main><!-- #site-content -->

<?php get_footer(); ?>
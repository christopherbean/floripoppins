<?php
/**
 * The Template for the search results page. It is pulled directly from index.php and altered for our design.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
    <div class="recipe-archive">
        <div class="content-wrapper">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We currently do not have any recipes matching that description. We do have plenty of other incredible dishes - try a new search.', 'twentytwenty' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nothing Found', 'twentytwenty' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}?>
            
     <?php if(is_active_sidebar('sidebar-6')) : ?>
        <div id="fourth" class="widget-area" role="complementary">
            <?php dynamic_sidebar('sidebar-6'); ?>
        </div>
        <?php endif; ?>
            
         
    
    <div class="recipe-blog-layout">   
	<?php if ( have_posts() ) : ?> 
        
        <?php if(is_active_sidebar('sidebar-5')) : ?>
                <div id="tertiary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar('sidebar-5'); ?>
                </div>
            <?php endif; ?>
        
        <article class="recipe-excerpts">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="individual-recipe">
                    <a class="recipe-title" href="<?php echo get_permalink();?>">
                        <h1 class="recipe-title"><?php the_title(); ?></h1>
                    <div class="recipe-details">
                        <?php echo get_the_post_thumbnail(); ?>
                        <?php the_excerpt(); ?>
                    </div>
                    </a>
                </div>
        <?php endwhile; ?>
        </article>
        
        <?php if(is_active_sidebar('sidebar-4')) : ?>
                <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar('sidebar-4'); ?>
                </div>
            <?php endif; ?>
        
    <?php endif; ?>
            
    </div>
            
	<?php get_template_part( 'template-parts/pagination' ); ?>
            </div><!-- end content wrapper-->
        </div><!-- end recipe archive-->
</main><!-- #site-content -->



<?php
get_footer();
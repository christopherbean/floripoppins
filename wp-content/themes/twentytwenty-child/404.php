<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Oops! Page Not Found!', 'twentytwenty' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'Sorry the page you are looking for could not be found. Never fear - I have plenty of other wonderful things on the rest of my site. Go ahead and search for something delicious! ', 'twentytwenty' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'twentytwenty' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php
get_footer();

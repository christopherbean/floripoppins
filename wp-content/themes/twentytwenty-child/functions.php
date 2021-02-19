<?php
/**
* Twenty Twenty Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Twenty_Twenty
* @since Twenty Twenty 2.0
*/

//Enqueue scripts and styles
function twentytwenty_child_scripts() {
    wp_enqueue_style('twentytwenty-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('twentytwenty-style'));
}

add_action('wp_enqueue_scripts', 'twentytwenty_child_scripts');

//Dynamic sidebar
function twentytwenty_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Blog Sidebar', 'twentytwenty-child'),
	    'id' => 'sidebar-3',
	    'description' => __( 'Appears onsingle blog pages.', 'twentytwenty-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
    
    register_sidebar( array(
	    'name' =>__( 'Recipe Archive Sidebar', 'twentytwenty-child'),
	    'id' => 'sidebar-4',
	    'description' => __( 'Appears on the blog archive page', 'twentytwenty-child' ),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
    
    register_sidebar( array(
	    'name' =>__( 'Top of Recipe Archive Categories', 'twentytwenty-child'),
	    'id' => 'sidebar-5',
	    'description' => __( 'Appears at the top of blog archive page for search functionality', 'twentytwenty-child' ),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
    
    register_sidebar( array(
	    'name' =>__( 'Top of Recipe Archive Search', 'twentytwenty-child'),
	    'id' => 'sidebar-6',
	    'description' => __( 'Appears at the top of blog archive page for search functionality', 'twentytwenty-child' ),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'twentytwenty_child_widget_init' );


//allows post thumbnails
add_theme_support('post-thumbnails');
<?php
require 'bootstrap-navwalker.php';
/**
 * Include stylesheets and js files
 * @see https://developer.wordpress.org/themes/basics/including-css-javascript/#combining-enqueue-functions
 * @see https://wpshout.com/quick-guides/prevent-browser-caching-css-stylesheet-wordpress/
 * can also use --  <link href="<?php bloginfo('stylesheet_url'); ?>">
 * additional --   <link href="<?php bloginfo('template_url'); ?>/css/file.css">
 */
function my_site_files(){

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',false,'1.1','all');

	//wp_enqueue_style('style', get_stylesheet_uri());

	$rand = rand( 1, 999 );
	wp_enqueue_style( 'style', get_stylesheet_uri(), '', $rand );
}

add_action('wp_enqueue_scripts', 'my_site_files');

/**
 * register_nav_menu for admin apperance menus
 *  also -- <title><?php bloginfo('name');?> | <?php wp_title();?></title>
 */
function my_features(){
	register_nav_menu('headerMenu', 'Header Menu');
	register_nav_menu('footerMenu', 'Footer Menu');
	register_nav_menu('footerMenu2', 'Footer Menu 2');
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'my_features');

// Excerpt length
function my_excerpt_length(){
	return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');


/**
 * https://codex.wordpress.org/Function_Reference/register_sidebar
 * sidebar.php add -- <?php get_sidebar(); ?>
 */
function my_theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'description'   => __( 'Widgets in this area will be shown under your single posts, before comments.', 'textdomain' ),
		'before_widget' => '<div class="card my-4">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h5 class="card-header">',
		'after_title'   => '</h5><div class="card-body"><div class="row">',
	) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

// Add to your init function
add_filter('get_search_form', 'my_search_form');

function my_search_form($text) {
	$text = str_replace('value="Search for:"', 'value=""', $text);
	return $text;
}

/*add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);
function add_classes_on_li($classes, $item, $args)
{
	$classes[] = 'nav-item';

	return $classes;
}

add_filter('wp_nav_menu', 'add_classes_on_a');
function add_classes_on_a($ulclass)
{
	return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}*/
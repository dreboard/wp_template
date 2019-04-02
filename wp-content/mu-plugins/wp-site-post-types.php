<?php
/**
 * @package Custom Events
 * @version 1.0.0
 */
/*
Plugin Name: Custom Events
Plugin URI: https://github.com/dreboard
Description: Date event type.
Author: Dre Board
Version: 1.7.1
Author URI: https://github.com/dreboard
*/

// Custom post types here
// to view: rebuild permalink structure - settings/permalinks save changes
// create: single-event.php (name of event single-{post-type}.php)
// create: archive-event.php (name of event archive-{post-type}.php)

function wp_site_events() {
	register_post_type( 'event', [
		'supports' => [
			'title' ,'editor', 'excerpt', 'custom-fields' // add excerpt to the new/edit form
		],
		'rewrite' => [
			'slug' => 'events' // for the url
		],
		'has_archive' => true,
		'public'    => true,
		'labels'    => [
			'name'         => 'Events',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',// for admin area
			'all_items' => 'All Events',// for admin area
			'singular_name' => 'Event'// for admin area
		],
		'menu_icon' => 'dashicons-calendar'
	] );
}

add_action( 'init', 'wp_site_events' );
<?php
/**
 * @package Divi Content Shortcode by nexTab
 * @version 1.0
 */
/*
Plugin Name: Divi Content Shortcode
Plugin URI: https://nextab.de
Description: This plugin allows you to grab any element in your Divi library and output it inside another module. Simply use [nxt_content id="123"] to output your desired layout.
Author: nexTab - Oliver Gehrmann
Version: 1.0
Author URI: https://nexTab.de
*/

function nxt_content_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'id' => '',
		'wrapper' => 'yes',
	), $atts );
	if($a['id'] == '') return "Error - please make sure to include an ID when using this shortcode!";

	if($a["wrapper"] == "yes") {
		return '<div class="nxt_content_container">' . do_shortcode(get_post_field('post_content', $a['id'])) . '</div>';
	} else {
		return do_shortcode(get_post_field('post_content', $a['id']));
	}
}

// Initialize the shortcode defined above after WordPress is done initializing
add_action('init', 'nxt_add_custom_shortcodes');
function nxt_add_custom_shortcodes() {
	add_shortcode('nxt_content', 'nxt_content_shortcode');
}
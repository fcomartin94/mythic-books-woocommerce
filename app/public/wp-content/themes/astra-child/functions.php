<?php
/**
 * Astra-child Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astra-child
 */

add_action( 'wp_enqueue_scripts', 'astra_child_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function astra_child_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'astra-style', get_template_directory_uri() . '/style.css', array(), '0.1.0' );
	wp_enqueue_style(
		'astra-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'astra-style' ),
		'0.1.0'
	);
}

add_filter( 'wp_nav_menu_items', 'add_cart_icon_to_menu', 10, 2 );
function add_cart_icon_to_menu( $items, $args ) {
    $count = WC()->cart->get_cart_contents_count();
    $items .= '<li class="menu-item"><a href="' . wc_get_cart_url() . '">Cart (' . $count . ')</a></li>';
    return $items;
}
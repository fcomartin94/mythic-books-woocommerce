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
/**
 * Appends a cart link with a live item count to the navigation menu.
 */
function add_cart_icon_to_menu( $items, $args ) {
	// The cart is not initialised in some contexts (admin screens, REST requests).
	if ( ! function_exists( 'WC' ) || null === WC()->cart ) {
		return $items;
	}

	$count  = WC()->cart->get_cart_contents_count();
	$items .= '<li class="menu-item"><a href="' . esc_url( wc_get_cart_url() ) . '">Cart (' . (int) $count . ')</a></li>';

	return $items;
}

add_filter( 'woocommerce_package_rates', 'hide_flat_rate_when_free_shipping_available', 100 );
/**
 * When free shipping applies, remove the other shipping methods so the customer
 * is not asked to choose between a free and a paid option.
 */
function hide_flat_rate_when_free_shipping_available( $rates ) {
	$free = array();

	foreach ( $rates as $rate_id => $rate ) {
		if ( 'free_shipping' === $rate->method_id ) {
			$free[ $rate_id ] = $rate;
		}
	}

	return ! empty( $free ) ? $free : $rates;
}

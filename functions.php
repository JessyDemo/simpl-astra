<?php
/**
 * Simpl Vintage Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Simpl Vintage
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_SIMPL_VINTAGE_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'simpl-vintage-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_SIMPL_VINTAGE_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


/* Ajouter un onglet au menu principal pour les utilisateur connectés UNIQUEMENT*/

function add_menu_item_for_loggedin_users(){
	
}
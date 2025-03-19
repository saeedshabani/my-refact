<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Refact_Starter
 */

if ( ! defined( 'THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THEME_VERSION', '1.0.0' );
}

/**
 * Add theme support.
 */
function refact_starter_setup() {
	// Make theme available for translation: Translations can be filed in the /languages/ directory.
	load_theme_textdomain( 'refact-starter', get_template_directory() . '/languages' );

	// Add support for Post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for Editor Styles.
	add_theme_support( 'editor-styles' );

	// Enqueue Editor Styles.
	add_editor_style( 'assets/styles/main.css' );
}
add_action( 'after_setup_theme', 'refact_starter_setup' );

/**
 * Set Default Logo
 */
function refact_starter_custom_logo( $html ) {
	if ( ! $html ) {
		$html = sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home"><img src="%2$s" width="168" alt="%3$s" class="custom-logo"></a>',
			esc_url( home_url() ),
			get_theme_file_uri( 'assets/images/logo.png' ),
			get_bloginfo( 'name' )
		);
	}
	return $html;
}
add_filter( 'get_custom_logo', 'refact_starter_custom_logo' );

/**
 * Enqueue the Assets files.
 */
function refact_starter_assets() {
	$theme_version = defined( 'THEME_VERSION' ) ? THEME_VERSION : '1.0.0';
	wp_register_style( 'refact-starter-flickity', get_theme_file_uri( 'assets/styles/flickity.css' ), array(), $theme_version );
	wp_register_script( 'refact-starter-flickity', get_theme_file_uri( 'assets/scripts/flickity.js' ), array(), $theme_version, true );

	wp_enqueue_style( 'refact-starter', get_theme_file_uri( 'assets/styles/style.css' ), array(), $theme_version );
	wp_enqueue_script( 'refact-starter', get_theme_file_uri( 'assets/scripts/main.js' ), array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'refact_starter_assets' );

function refact_starter_admin_assets() {
	$theme_version = defined( 'THEME_VERSION' ) ? THEME_VERSION : '1.0.0';
	wp_enqueue_style( 'refact-starter-admin', get_theme_file_uri( 'assets/styles/admin.css' ), array(), $theme_version );
	wp_register_style( 'refact-starter-flickity', get_theme_file_uri( 'assets/styles/flickity.css' ), array(), $theme_version );
	wp_register_script( 'refact-starter-flickity', get_theme_file_uri( 'assets/scripts/flickity.js' ), array(), $theme_version, true );
}
add_action( 'admin_enqueue_scripts', 'refact_starter_admin_assets' );
function add_defer_to_all_scripts($tag) {
    return str_replace(' src', ' defer src', $tag);
}
add_filter('script_loader_tag', 'add_defer_to_all_scripts', 10);

function remove_script_version($src) {
    return remove_query_arg('ver', $src);
}
add_filter('style_loader_src', 'remove_script_version', 10, 2);
add_filter('script_loader_src', 'remove_script_version', 10, 2);

function disable_wp_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'disable_wp_emojis');

function preload_fonts() {
    ?>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Catamaran-Variable.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/RobotoSlab-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <?php
}
add_action('wp_head', 'preload_fonts');

// Block style
require_once get_theme_file_path( 'inc/block-styles.php' );

// WP Hooks
require_once get_theme_file_path( 'inc/hooks.php' );

// Advanced Custom Fields Functions
require_once get_theme_file_path( 'inc/acf.php' );

// Style Hooks
require_once get_theme_file_path( 'inc/style-hooks.php' );

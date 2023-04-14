<?php
// Exit if accessed directly
if (!defined("ABSPATH")) {
	exit();
}
/**
 * Parking Systems functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Aluvisie
 * @since 1.0
 */

function get_theme_domain() {
	return "cryomasters";
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cryomasters_setup() {
	/*
		     * Make theme available for translation.
		     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/herb-and-water
		     * If you're building a theme based on Parking Systems, use a find and replace
		     * to change 'herb-and-water' to the name of your theme in all the template files.
	*/
	load_theme_textdomain("cryomasters");
	// Add default posts and comments RSS feed links to head.
	add_theme_support("automatic-feed-links");
	/*
		     * Let WordPress manage the document title.
		     * By adding theme support, we declare that this theme does not use a
		     * hard-coded <title> tag in the document head, and expect WordPress to
		     * provide it for us.
	*/
	add_theme_support("title-tag");
	add_theme_support("custom-logo");
	/*
		     * Enable support for Post Thumbnails on posts and pages.
		     *
		     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support("post-thumbnails");
	/*
		     * Switch default core markup for search form, comment form, and comments
		     * to output valid HTML5.
	*/
	add_theme_support("html5", ["comment-form", "contact-from"]);
	// Set the default content width.
	$GLOBALS["content_width"] = 525;
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus([
		"main-menu" => __("Main Menu", get_theme_domain()),

		"footer-menu" => __("Footer Menu ", get_theme_domain()),

		"footer-menu1" => __("Footer Menu1 ", get_theme_domain()),
	]);
	/*
		     * This theme styles the visual editor to resemble the theme style,
		     * specifically font, colors, and column width.
	*/
	add_editor_style(["css/editor-style.css"]);
	//add_theme_support( 'woocommerce' );
}

add_action("after_setup_theme", "cryomasters_setup");

/**
 * Enqueues scripts and styles.
 */

function cryomasters_scripts() {
	// Theme swiper Stylesheet

	/* wp_enqueue_style(
		        "cryomasters-owl-theme-style",
		        get_theme_file_uri("css/vendor/owl.theme.default.min.css"),
		        [],
		        rand()
	*/

	wp_enqueue_style(
		"cryomasters-icons-style",
		get_theme_file_uri("css/icon.css"),
		[],
		rand()
	);

	wp_enqueue_style(
		"cryomasters-normalize-style",
		get_theme_file_uri("css/normalize.css"),
		[],
		rand()
	);

	// Theme Main Stylesheet
	wp_enqueue_style(
		"cryomasters-style",
		get_theme_file_uri("css/style.css"),
		[],
		rand()
	);

	// Theme Responsive Stylesheet
	wp_enqueue_style(
		"cryomasters-responsive-style",
		get_theme_file_uri("css/responsive.css"),
		[],
		rand()
	);

	// Theme Normalize Stylesheet
	//wp_enqueue_style( 'quest-audio-normalize-style', get_theme_file_uri('css/normalize.css'), array(), rand() );

	//check is not admin

	if (!is_admin()) {
		//Unload WP default jQuery

		wp_deregister_script("jquery");

		//Load jquery

		wp_register_script(
			"jquery",
			get_theme_file_uri("js/vendor/jquery.js"),
			[],
			null,
			true
		);

		wp_enqueue_script("jquery");
	} //Endif

	// Lightcase Script File
	wp_enqueue_script(
		"cryomasters-stickyfill-script",
		get_theme_file_uri("js/vendor/stickyfill.min.js"),
		[],
		null,
		true
	);

	// Theme Main Script File
	wp_enqueue_script(
		"cryomasters-general-script",
		get_theme_file_uri("js/general.js"),
		[],
		rand(),
		true
	);
}

add_action("wp_enqueue_scripts", "cryomasters_scripts");

//Add acf option for the theme

if (function_exists("acf_add_options_page")) {
	acf_add_options_page(); //Options Page
} //endif

if (!function_exists("cryomasters_add_favicon")):

	function cryomasters_add_favicon() {
		$favicom = get_field("favicon_icon", "option")
		? get_field("favicon_icon", "option")
		: get_theme_file_uri("/images/favicon.ico");

		echo '<link rel="shortcut icon" href="' . $favicom . '" />';
	}
	add_action("login_head", "cryomasters_add_favicon");
	add_action("admin_head", "cryomasters_add_favicon");
	add_action("wp_head", "cryomasters_add_favicon");
endif; //endif
/**

 * Add Body class for logged in admin

 */

add_filter("body_class", "cryomasters_admin_body_class");

function cryomasters_admin_body_class($classes) {
	$user = wp_get_current_user();

	if (current_user_can("administrator")) {
		$classes[] = "admin-logged-in"; // your custom class name
	}

	if (!is_page("home")) {
		$classes[] = "inner-page";
	}

	//return $classes;

	return $classes;
}

if (!function_exists("cryomasters_mime_types")):
	/**

	 * Mime Types

	 **/

	function cryomasters_mime_types($mimes) {
		$mimes["svg"] = "image/svg+xml";

		return $mimes;
	}

	add_filter("upload_mimes", "cryomasters_mime_types");
endif; //endif

add_filter('nav_menu_css_class', 'cryomasters_nav_class', 10, 2);

function cryomasters_nav_class($classes, $item) {
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active ';
	}
	return $classes;
}

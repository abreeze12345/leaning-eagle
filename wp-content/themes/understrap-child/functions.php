<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


/* Register Custom CSS */
wp_register_style("customcss", get_template_directory_uri() . "/css/custom.css");

/* Register jQuery */
wp_deregister_script("jquery");
wp_register_script("jquery", get_template_directory_uri() . "/js/jquery-3.3.1.min.js");

/* Register Custom JS */
wp_register_script("customjs", get_template_directory_uri() . "/js/custom.js");

/* Register animate.css */
wp_register_style("animate", get_template_directory_uri() . "/css/animate.css");

/* Enqueue Everything */
function custom_enqueue() {
    wp_enqueue_style("customcss");
    wp_enqueue_script("jquery");
    wp_enqueue_script("customjs");
    wp_enqueue_style("animate");
}
add_action("wp_enqueue_scripts", custom_enqueue());
<?php

/*  Include Styles and script
/* ------------------------------------ */
if ( ! function_exists( 'styles_scripts' ) ) {

	function style_scripts() {
		wp_enqueue_style( 'BS-style', get_template_directory_uri().'/bootstrap-5.0.1/css/bootstrap.min.css');
		wp_enqueue_style( 'LT-style', get_template_directory_uri().'/style.css');
		wp_enqueue_script( 'BS-scripts', get_template_directory_uri() . '/bootstrap-5.0.1/js/bootstrap.bundle.min.js', array( 'jquery' ),'', true );
	}

}
add_action( 'wp_enqueue_scripts', 'style_scripts' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}
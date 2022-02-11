<?php
/**
 * Project  Deliverables 1 Theme Customizer
 *
 * @package Project__Deliverables_1
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function projdeliverablesone_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'projdeliverablesone_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'projdeliverablesone_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'projdeliverablesone_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function projdeliverablesone_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function projdeliverablesone_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function projdeliverablesone_customize_preview_js() {
	wp_enqueue_script( 'projdeliverablesone-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), projdeliverablesone_VERSION, true );
}
add_action( 'customize_preview_init', 'projdeliverablesone_customize_preview_js' );

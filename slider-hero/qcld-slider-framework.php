<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );

function qcld_slider_remove_ot_menu() {
	remove_submenu_page( 'themes.php', 'ot-theme-options' );
}
add_action( 'admin_init', 'qcld_slider_remove_ot_menu' );

add_filter( 'ot_header_version_text', 'qcld_sliderhero_ot_version_text_custom' );
function qcld_sliderhero_ot_version_text_custom() {
	$text = 'Developed by Web Design Company - QuantumCloud';

	return $text;
}

/**
 * Hook to register admin pages
 */
add_action( 'init', 'qcld_sliderhero_register_options_pages' );

/**
 * Registers all the required admin pages.
 */

function qcld_sliderhero_register_options_pages() {

	// Only execute in admin & if OT is installed
	if ( is_admin() && function_exists( 'ot_register_settings' ) ) {

		// Register the pages
		ot_register_settings(
			array(
				array(
					'id'    => 'sh_plugin_options',
					'pages' => array(
						array(
							'id'              => 'sliderhero_options',
							'parent_slug'     => 'Slider-Hero',
							'page_title'      => 'Settings',
							'menu_title'      => 'Settings',
							'capability'      => 'edit_theme_options',
							'menu_slug'       => 'sh-options-page',
							'icon_url'        => null,
							'position'        => null,
							'updated_message' => 'Hero Options Updated.',
							'reset_message'   => 'Hero Options Reset.',
							'button_text'     => 'Save Changes',
							'show_buttons'    => true,
							'screen_icon'     => 'options-general',
							'contextual_help' => null,

							'sections'        => array(
								array(
									'id'    => 'general',
									'title' => esc_html('General', 'slider-hero' ),
								),
								array(
									'id'    => 'custom_css',
									'title' => esc_html('Custom Code', 'slider-hero' ),
								),

							),
							'settings'        => array(

								array(
									'label'     => esc_html('Enable Preloader' ),
									'id'        => 'hero_enable_preloader',
									'type'      => 'on-off',
									'desc'      => esc_html('' ),
									'std'       => 'on',
									'rows'      => '',
									'post_type' => '',
									'taxonomy'  => '',
									'class'     => '',
									'section'   => 'general',
								),
                   
								array(
									'label'     => esc_html('Preloader Image (Pro)' ),
									'id'        => 'hero_enable_preloader_image',
									'type'      => 'Upload',
									'desc'      => esc_html('It\'s a pro feature. This will not work in free version.' ),
									'std'       => '',
									'rows'      => '',
									'post_type' => '',
									'taxonomy'  => '',
									'class'     => 'hero_pro_feature',
									'section'   => 'general',
								),

								array(
									'label'     => esc_html('Enable CSS Override for page Background (Pro)' ),
									'id'        => 'hero_enable_css_override',
									'type'      => 'on-off',
									'desc'      => esc_html('It\'s a pro feature. This will not work in free version.' ),
									'std'       => 'off',
									'rows'      => '',
									'post_type' => '',
									'taxonomy'  => '',
									'class'     => 'hero_pro_feature',
									'section'   => 'general',
								),
								array(
									'label'     => 'Custom Css',
									'id'        => 'sh_custom_style',
									'type'      => 'css',
									'desc'      => esc_html('Write your custom CSS here.' ),
									'std'       => '',
									'rows'      => '',
									'post_type' => '',
									'taxonomy'  => '',
									'class'     => '',
									'section'   => 'custom_css',
								),
								array(
									'label'     => 'Custom Javascript',
									'id'        => 'sh_custom_js',
									'type'      => 'javascript',
									'desc'      => esc_html('Write your custom Javascript code here. Do not need any script tag.' ),
									'std'       => '',
									'rows'      => '',
									'post_type' => '',
									'taxonomy'  => '',
									'class'     => '',
									'section'   => 'custom_css',
								),

							),
						),
					),
				),
			)
		);

	}

}




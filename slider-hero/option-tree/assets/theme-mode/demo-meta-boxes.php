<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Initialize the custom Meta Boxes.
 *
 * @package OptionTree
 */

add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @since 2.0
 */
function custom_meta_boxes() {

	/**
	 * Create a custom meta boxes array that we pass to
	 * the OptionTree Meta Box API Class.
	 */
	$my_meta_box = array(
		'id'       => 'demo_meta_box',
		'title'    => esc_html('Demo Meta Box', 'slider-hero' ),
		'desc'     => '',
		'pages'    => array( 'post' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
			array(
				'label' => esc_html('Conditions', 'slider-hero' ),
				'id'    => 'demo_conditions',
				'type'  => 'tab',
			),
			array(
				'label' => esc_html('Show Gallery', 'slider-hero' ),
				'id'    => 'demo_show_gallery',
				'type'  => 'on-off',
				'desc'  => sprintf( esc_html('Shows the Gallery when set to %s.', 'slider-hero' ), '<code>on</code>' ),
				'std'   => 'off',
			),
			array(
				'label'     => '',
				'id'        => 'demo_textblock',
				'type'      => 'textblock',
				'desc'      => esc_html('Congratulations, you created a gallery!', 'slider-hero' ),
				'operator'  => 'and',
				'condition' => 'demo_show_gallery:is(on),demo_gallery:not()',
			),
			array(
				'label'     => esc_html('Gallery', 'slider-hero' ),
				'id'        => 'demo_gallery',
				'type'      => 'gallery',
				'desc'      => sprintf( esc_html('This is a Gallery option type. It displays when %s.', 'slider-hero' ), '<code>demo_show_gallery:is(on)</code>' ),
				'condition' => 'demo_show_gallery:is(on)',
			),
			array(
				'label' => esc_html('More Options', 'slider-hero' ),
				'id'    => 'demo_more_options',
				'type'  => 'tab',
			),
			array(
				'label' => esc_html('Text', 'slider-hero' ),
				'id'    => 'demo_text',
				'type'  => 'text',
				'desc'  => esc_html('This is a demo Text field.', 'slider-hero' ),
			),
			array(
				'label' => esc_html('Textarea', 'slider-hero' ),
				'id'    => 'demo_textarea',
				'type'  => 'textarea',
				'desc'  => esc_html('This is a demo Textarea field.', 'slider-hero' ),
			),
		),
	);

	/**
	 * Register our meta boxes using the
	 * ot_register_meta_box() function.
	 */
	if ( function_exists( 'ot_register_meta_box' ) ) {
		ot_register_meta_box( $my_meta_box );
	}
}


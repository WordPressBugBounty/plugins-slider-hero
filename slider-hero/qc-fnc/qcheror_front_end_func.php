<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @param $id
 * @return string
 */

function qcld_slide_show_published_sliders($atts ) {
	global $wpdb;
	$id = $atts['id'];
	$qcheror = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM {$wpdb->prefix}qcld_slider_hero_sliders WHERE id = %d ", $id ) );
	$qcheros = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM {$wpdb->prefix}qcld_slider_hero_slides WHERE sliderid = %d ORDER BY ordering DESC", $id ) );
	
	$id = $atts['uniq_id'];

	//var_dump( $qcheror );
	//wp_die();
	return qcld_slider_front_end( $id, $qcheror, $qcheros, $atts );
}

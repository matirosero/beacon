<?php

function beacon_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template
	if ( $cmb->object_id !== get_option( 'page_on_front' ) ) {
		return false;
	}
	return true;
}

add_action( 'cmb2_admin_init', 'frontpage_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function frontpage_register_demo_metabox() {
	$prefix = 'frontpage_';
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_frontpage = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Frontpage options', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on_cb' => 'beacon_show_if_front_page', // function should return a bool value
		'context'    => 'normal',
		'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$cmb_frontpage->add_field( array(
		'name' => esc_html__( 'Cómo podemos ayudarle', 'cmb2' ),
		'desc' => esc_html__( 'Texto que está debajo del encabezado', 'cmb2' ),
		'id'   => $prefix . 'intro',
		'type' => 'textarea',
	) );

	$cmb_frontpage->add_field( array(
		'name'    => esc_html__( 'Mostrar...', 'cmb2' ),
		'desc'    => esc_html__( 'Marque si quiere que aparezcan', 'cmb2' ),
		'id'      => $prefix . 'show',
		'type'    => 'multicheck',
		// 'multiple' => true, // Store values in individual rows
		'options' => array(
			'frontpage_test_link' => esc_html__( 'Enlace al test', 'cmb2' ),
			'frontpage_profiles' => esc_html__( 'Perfiles', 'cmb2' ),
			'frontpage_show_events' => esc_html__( 'Eventos', 'cmb2' ),
		),
		// 'inline'  => true, // Toggles display to inline
	) );


}

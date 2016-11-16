<?php

function beacon_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template
	if ( $cmb->object_id !== get_option( 'page_on_front' ) ) {
		return false;
	}
	return true;
}

// add_action( 'cmb2_admin_init', 'beacon_register_repeatable_header_field_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 *//*
function beacon_register_repeatable_header_field_metabox() {
	$prefix = 'frontpage_group_';
	/**
	 * Repeatable Field Groups
	 *//*
	$cmb_header_group = new_cmb2_box( array(
		'id'           => $prefix . 'header',
		'title'        => esc_html__( 'Encabezado', 'beacon' ),
		'object_types' => array( 'page', ),
		'show_on_cb' => 'beacon_show_if_front_page', // function should return a bool value
		'context'    => 'normal',
		'priority'   => 'high',
	) );
	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_header_group->add_field( array(
		'id'          => $prefix . 'description',
		'type'        => 'group',
		'description' => esc_html__( 'Añada y describa los pasos.', 'beacon' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Paso {#}', 'beacon' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Step', 'beacon' ),
			'remove_button' => esc_html__( 'Remove Step', 'beacon' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 *//*

	$cmb_header_group->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Description', 'beacon' ),
		'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
		'id'          => 'step_description',
		'type'        => 'textarea_small',
	) );

}*/

add_action( 'cmb2_admin_init', 'beacon_register_frontpage_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function beacon_register_frontpage_metabox() {
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


	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_frontpage->add_field( array(
		'id'          => $prefix . 'header',
		'type'        => 'group',
		'description' => esc_html__( 'Los diferentes estados del encabezado, con sus respectivos textos.', 'beacon' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Estado {#}', 'beacon' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another State', 'beacon' ),
			'remove_button' => esc_html__( 'Remove State', 'beacon' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */

	$cmb_frontpage->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen', 'cmb2' ),
		'id'   => 'header_image',
		'type' => 'file',
	) );

	$cmb_frontpage->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Texto', 'beacon' ),
		'description' => esc_html__( 'Texto que acompaña a la imagen', 'cmb2' ),
		'id'          => 'header_description',
		'type'        => 'textarea_small',
	) );

	$cmb_frontpage->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen a pantalla completa?', 'cmb2' ),
		'desc' => esc_html__( '(La primera imagen debe ser pantalla completa)', 'cmb2' ),
		'id'   => $prefix . 'fullwidth',
		'type' => 'checkbox',
	) );






	$cmb_frontpage->add_field( array(
		'name' => esc_html__( 'Cómo podemos ayudarle', 'cmb2' ),
		'desc' => esc_html__( 'Texto que está debajo del encabezado', 'cmb2' ),
		'id'   => $prefix . 'intro',
		'type' => 'textarea',
	) );

	$cmb_frontpage->add_field( array(
		'name'    => esc_html__( 'Servicios', 'cmb2' ),
		'desc'    => esc_html__( 'Texto servicios', 'cmb2' ),
		'id'      => $prefix . 'services',
		'type'    => 'wysiwyg',
		'options' => array( 'textarea_rows' => 10, ),
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



add_action( 'cmb2_admin_init', 'beacon_register_repeatable_steps_field_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function beacon_register_repeatable_steps_field_metabox() {
	$prefix = 'coaching_';
	/**
	 * Repeatable Field Groups
	 */
	$cmb_steps_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Pasos del proceso de coaching', 'beacon' ),
		'object_types' => array( 'page', ),
	) );
	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_steps_group->add_field( array(
		'id'          => $prefix . 'steps',
		'type'        => 'group',
		'description' => esc_html__( 'Añada y describa los pasos.', 'beacon' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Paso {#}', 'beacon' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Step', 'beacon' ),
			'remove_button' => esc_html__( 'Remove Step', 'beacon' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */

	$cmb_steps_group->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Description', 'beacon' ),
		'description' => esc_html__( 'Write a short description for this entry', 'cmb2' ),
		'id'          => 'step_description',
		'type'        => 'textarea_small',
	) );

}

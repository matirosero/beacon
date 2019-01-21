<?php

add_filter( 'caldera_forms_phone_js_options', function( $options){
	//Use ISO_3166-1_alpha-2 formatted country code
	$options[ 'initialCountry' ] = 'CR';
	return $options;
});
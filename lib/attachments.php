<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); // disable the Settings screen
add_filter( 'attachments_default_instance', '__return_false' ); // disable the default instance
function neuron_attachments($attachments){
	$fields         = array(
		array(
			'name'      => 'title',                         // unique field name
			'type'      => 'text',                          // registered field type
			'label'     => __( 'Title', 'alpha' ),    // label to display
		),
	);
	$args =	array(
		'label'      => 'Featured Slider',                       // unique field name
		'post_type'      => array('post'),                      // registered field type
		'filetype'     => array("image"),  // label to display
		'button_text'   => __('Attach Files','neuron'),
		'fields'=>$fields,
	);
	$attachments->register( 'slider', $args ); // unique instance name
}
add_action( 'attachments_register', 'neuron_attachments' );

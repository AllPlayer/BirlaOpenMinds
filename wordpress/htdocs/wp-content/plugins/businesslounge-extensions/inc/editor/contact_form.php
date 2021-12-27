<?php
/*
*
* Contact Form Shortcode 
*
*/ 

global $current_user;

vc_map(
	array(
		'base'        => 'contact_form',
		'name'        => _x( 'Contact Form', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme contact_form',
		'category'    => array( _x( 'Theme Addons', 'Admin Panel','businesslounge' ) ),
		'description' => _x( 'Displays a contact form', 'Admin Panel','businesslounge' ),
		'params'      => array(

							array(
								'param_name'  => 'email',
								'heading'     => _x('Email', 'Admin Panel','businesslounge' ),
								'description' => _x('The contact form will be submited to this email.', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => $current_user->user_email,
								'save_always' => true
							),

							array(
								'param_name'  => 'security',
								'heading' => _x( 'Security Question', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Enable the security question to prevent spam messages.", 'Admin Panel','businesslounge') => "true",
												),
							),

							array(
								'param_name'  => 'confirmation',
								'heading' => _x( 'Confirmation Checkbox', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Enable the confirmation checkbox for GDPR.", 'Admin Panel','businesslounge') => "true",
												),
							),
							
							array(
								'param_name'  => 'id',
								'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
								'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => ''
							),

							array(
								'param_name'  => 'class',
								'heading'     => _x('Class', 'Admin Panel','businesslounge' ),
								'description' => _x('CSS Class Name', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield'
							)
			
						)
	)
);	

?>
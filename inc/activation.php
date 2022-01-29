<?php


require_once(get_template_directory().'/inc/class-tgm-plugin-activation.php');



function tgm_plugnis(){
	$plugins=array(
	array(
	'name'=>'contact from 7', // The plugin name.
	'slug'=>'contact-from-7',
	'required'=>true,
	'force_activation'=>true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
    'force_deactivation'=>true,
	'external_url'=> '', // If set, overrides default API URL and points to an external URL.
	'is_callable'=>'',
	
	
	),
	
	
	
	
	);
	$config=array(
	      'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '', 
	
	
	
	
	);
	
	
	
	tgmpa($plugins,$config);
}
add_action('tgmpa_register','tgm_plugnis');
<?php





	function theme_copyright_customizer($wp_customize) {
    //adding section in wordpress customizer   
    $wp_customize->add_section('copyright_extras_section', array(
        'title'          => 'Copyright Text Section'
    ));

    //adding setting for copyright text
    $wp_customize->add_setting('text_setting', array(
        'default'        => 'Default Text For copyright Section',
    ));

    $wp_customize->add_control('text_setting', array(
        'label'   => 'Copyright text',
        'section' => 'copyright_extras_section',
        'type'    => 'text',
    ));
	
	
	//adding setting for copyright text
    $wp_customize->add_setting('text_tara', array(
        'default'        => 'Example paragraph textarea ',
    ));

    $wp_customize->add_control('text_tara', array(
        'label'   => 'text',
        'section' => 'copyright_extras_section',
        'type'    => 'textarea',
    ));
	
	
	//adding setting for copyright text
    $wp_customize->add_setting('display', array(
        'default'        => 'no'
    ));

    $wp_customize->add_control('display', array(
        'label'   => 'display this section',
        'section' => 'copyright_extras_section',
        'type'    => 'select',
		'choices'=>array('No'=>'no','Yes'=>'Yes')
    ));
	
	
	
	
	//adding setting for copyright text
    $wp_customize->add_setting('text_link');

    $wp_customize->add_control('text_link', array(
        'label'   => 'link',
        'section' => 'copyright_extras_section',
        'type'    => 'dropdown-pages'
    ));
	
	//adding setting for copyright text
    $wp_customize->add_setting('image');

    $wp_customize->add_control (new wp_customize_cropped_image_control($wp_customize,'image', array(
        'label'   => 'image',
        'section' => 'copyright_extras_section'
		
       
    )));
	
	
	
}
	

add_action('customize_register','theme_copyright_customizer');
<?php


register_nav_menus(array(
'header'=>__('Header Menu'),
'footer'=>__('Footer Menu'),
'footer2'=>__('Services Menu'),

));




function hello_add_theme_support(){
	
	add_theme_support('post-thumbnails');
	add_image_size('smail-thumbnail',180,120,true);
	add_image_size('banner-image',980,220,true);
	
	//add post formats
	
	
	add_theme_support('post-formats', array( 'aside','gallery','links'));
	
	
	
}
add_action('after_setup_theme','hello_add_theme_support');

?>
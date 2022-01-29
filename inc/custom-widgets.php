<?php

function custom_sidebars() {
 
    $args = array(
        'id'            => 'custom_sidebar',
        'name'          => __( 'Custom Widget Area', 'text_domain' ),
        'description'   => __( 'A custom widget area', 'text_domain' ),
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
    );
    register_sidebar( $args );
	
	
	$par = array(
        'id'            => 'custom_sidebar1',
        'name'          => __( 'popular Widget Area', 'text_domain' ),
        'description'   => __( 'A custom widget area', 'text_domain' ),
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
    );
    register_sidebar( $args,$par );
	
	
 
}
add_action( 'widgets_init', 'custom_sidebars' );













?>
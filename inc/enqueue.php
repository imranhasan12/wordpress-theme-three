<?php




function hello_enqueue_script(){
	//wp_enqueue_style('main_style',get_stylesheet_uri());
	wp_enqueue_style('favicon',get_template_directory_uri().'/assets/img/favicon.ico');
	wp_enqueue_style('favicon',get_template_directory_uri().'/assets/img/favicon.ico');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0.0','all');
	wp_enqueue_style('fontawesome',get_template_directory_uri().'/assets/css/fontawesome-all.min.css',array(),'1.0.0','all');
	wp_enqueue_style('magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.css',array(),'1.0.0','all');
	wp_enqueue_style('carousel-main',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'1.0.0','all');
	wp_enqueue_style('style-css',get_template_directory_uri().'/assets/css/style.css',array(),'1.0.0','all');
	wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0.0','all');
	wp_enqueue_style('responsive-css',get_template_directory_uri().'//fonts.googleapis.com/css?family=Roboto:400,700&display=swap',array(),'1.0.0','all');
	//if (is_singular()) wp_enqueue_script('comment-reply');
	
	
	
	
	
	
	
	
	
	wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js',array(),'1.0.0',true);
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),'1.0.0',true);
	wp_enqueue_script('magnific',get_template_directory_uri().'/jquery.magnific-popup.min.js',array(),'1.0.0',true);
	wp_enqueue_script('carousel-main',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(),'1.0.0',true);
	wp_enqueue_script('mixitup',get_template_directory_uri().'/assets/js/jquery.mixitup.js',array(),'1.0.0',true);
	wp_enqueue_script('fact-counter',get_template_directory_uri().'/assets/js/fact-counter.js',array(),'1.0.0',true);
	wp_enqueue_script('sticky-kit',get_template_directory_uri().'/assets/js/sticky-kit.min.js',array(),'1.0.0',true);
	wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js',array(),'1.0.0',true);

   
	
	
	
	
	
}
add_action('wp_enqueue_scripts','hello_enqueue_script');
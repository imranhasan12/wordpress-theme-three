<?php





function admin_user_facebook_twitter(){
	
	// Add Twitter
$contactmethods['twitter'] = 'Twitter';
//add Facebook
$contactmethods['facebook'] = 'Facebook';
 $contactmethods['linkin'] = 'linkin';
return $contactmethods;

	
}
add_filter('user_contactmethods','admin_user_facebook_twitter');
<?php

function wporg_add_custom_box()
{
    $screens = ['protfolio', 'wporg_cpt'];
    foreach ($screens as $screen) {
        add_meta_box(
            'wporg_box_id',           // Unique ID
            'Custom Meta Box Title',  // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
               'protfolio'              // Post type
        );
    }
}
add_action('add_meta_boxes', 'wporg_add_custom_box');


function wporg_custom_box_html(){
	
	wp_nonce_field( 'my_custom_box', 'my_custom_box_nonce' );

$title=get_post_meta($post->ID,'title',true);


?>
	
	<p>
	
	<label> title</label>
	
	<input type="text" name="title" value="<?php echo $title;?>"/>
	
	
	</p>

	
	
	
 <?php }

function my_post_save($post_id  ){
	
	 if ( ! isset( $_POST['my_custom_box_nonce'] ) ) {
            return;
        }
	// Verify that the nonce is valid.
        if ( ! wp_verify_nonce( $_POST['my_custom_box_nonce'],'my_custom_box' ) ) {
            return;
	
}

//make sure that is set_error_handler

if ( ! isset( $_POST['titie'] ) ) {
            return;
}
 // Sanitize the user input.
    $my_title = sanitize_text_field( $_POST['title'] );
	
	
	  // Update the meta field.
      update_post_meta( $post_id, 'title', $my_title );

}
add_action('save_post','my_post_save');

?>
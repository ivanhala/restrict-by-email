<?php
add_filter( 'wbk_booking_form_validation', 'custom_wbk_booking_form_validation', 10, 2 );
function custom_wbk_booking_form_validation( $status, $post ){
	$blocked = array( 'user1@webba-booking.com', 'user2@webba-booking.com' );
	if( in_array( $post['email'], $blocked) ){
		return false;
	}
	return $status;
} 

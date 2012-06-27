<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('avatar_url')) {
    function avatar_url($service, $username_or_id, $size = null, $echo = true, $img_tag = false) {
    	$CI =& get_instance();
    	$CI->load->helper('email');

    	$url = 'http://avatars.io/';

    	if($service == 'gravatar' && valid_email($username_or_id)) {
    		$url .= 'email/';
    	}
    	else {
    		$url .= $service.'/';
    	}

    	$url .= $username_or_id;

    	if(isset($size)) {
    		$url .= '/?size='.$size;
    	}

    	if($echo && $img_tag) {
    		echo '<img src="'.$url.'" alt="'.$service.'">';
    	}
    	else if($echo) {
    		echo $url;
    	}
    	else {
    		return $url;
    	}
    }   
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('avatar_url')) {
    /**
    * Avatar URL
    * 
    * Takes a number of parameters and returns a URL from the Avatars.io service with the respective avatar.
    *
    * Usage: 
    * avatar_url('twitter', 'willpillar')
    * avatar_url('facebook', 'willpillar');
    * avatar_url('gravatar', 'me@willpillar.com')
    *
    * - Different Sizes
    * avatar_url('twitter', 'willpillar', 'large')
    * avatar_url('facebook', 'willpillar', 'medium')
    *
    * - Return url instead of echo
    * avatar_url('twitter', 'willpillar', null, false)
    *
    * - Echo an img tag
    * avatar_url('twitter', 'willpillar', null, true, true)
    *
    *
    * Find out more: http://avatars.io
    *
    * @author Will Pillar
    * @param string
    * @param string
    * @param string
    * @param boolean
    * @param boolean
    * @return string
    * @return void
    */
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
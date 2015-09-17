<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('url_add_params')) {

    function url_add_params($params = array(), $url = '') {
    	$url .= '?';
        foreach ($params as $key => $value) {
        	$url .= $key . '=' . $value . '&';
        }
        return substr($url, 0, -1);
    }

}

?>
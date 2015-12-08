<?php
/*
|--------------------------------------------------------------------------
| Utilities
|--------------------------------------------------------------------------
| 
|
|
*/
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('get_list_by_language_id')) {
    function get_list_by_language_id($language_id, $data, $is_get_a_row = false) {
       $array = array();
       foreach($data as $o) {
           if( $o['language_id'] == $language_id ) {
               if( $is_get_a_row == true ) return $o;
               array_push($array, $o);
           }
       } 
       return $array;
   }
}

if (!function_exists('url_add_params')) {
    function url_add_params($params = array(), $url = '') {
        if(empty($params)) return $url;
    	  $url .= '?';
        foreach ($params as $key => $value) {
        	$url .= $key . '=' . $value . '&';
        }
        return substr($url, 0, -1);
    }
}


if (!function_exists('notice')) {
    function notice($obj) {
        $ci =& get_instance();
        $k = 'alert_' . $obj['status'];
        $title = $ci->lang->line($k);
        $n =  "<div class=\"response-msg " . $obj['status'] . " ui-corner-all flash\">
                  <span>" . $title . "</span>
                  " . $obj['message'] . "
              </div>";
        echo $n;  
    }
}

?>
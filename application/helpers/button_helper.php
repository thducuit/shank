<?php
/*
|--------------------------------------------------------------------------
| my custom Toggle Button
|--------------------------------------------------------------------------
| 
|
|
*/
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('my_toggle_button')) {
    function my_toggle_button($selected = 0, $data_row = 0, $data_status = '', $attributes = array(), $option = array('publish' => 1, 'unpublish' => 0)) {
       if(!isset($selected) || empty($data_status) ) return '';
       $html = '<input type=\'button\' val=\'%s\' class=\'tooltip btgrid %s %s\' %s data-status=\'%s\' data-row=\'%s\'/>';
       $class = ( isset($attributes['class']) && !empty($attributes['class']) ) ? $attributes['class'] : '';
       
       $attrs = '';
       foreach($attributes as $a => $v) {
           if($a != 'class') {
              $attrs .= "$a='$v' ";       
           }
       }
       
       if($option['publish'] == $selected) {
         $html = sprintf($html, $option['unpublish'], 'publish', $class, $attrs, $data_status, $data_row);  
       }else {
         $html = sprintf($html, $option['publish'], 'unpublish', $class, $attrs, $data_status, $data_row);  
       }
       
       return $html;
   }
}

?>
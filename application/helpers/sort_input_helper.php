<?php
/*
|--------------------------------------------------------------------------
| my custom Sort Input
|--------------------------------------------------------------------------
| 
|
|
*/
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('my_sort_input')) {
    function my_sort_input($name, $value, $attributes = array(), $multi = false, $id) {
       $html = '<input name="%s" type="text" value="%s" %s class="textbox %s" />';
       
       if(isset($multi) && $multi == true && !empty($name)) {
            $id = ( isset($id) && !empty($id) ) ? $id : '';
            $name = $name . '[' . $id . ']';
       }
       
       $attrs = '';
       foreach($attributes as $a => $v) {
           if($a != 'class') {
              $attrs .= "$a='$v' ";       
           }
       }
       
       $class = ( isset($attributes['class']) && !empty($attributes['class']) ) ? $attributes['class'] : '';
       
       $html = sprintf($html, $name, $value, $attrs, $class);
       return $html;
   }
}

?>
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('my_select')) {

    function my_select($data = array(), $option = array(), $selected = array(), $key = array('id'=>'', 'parent' => ''),
    					$no_choice = array('title'=>'-- --', 'value'=>0),
    					$name = '', $id = '', $class = '', $size = 0
    					) 
    {
        $html = '<select name=\'%s\' id=\'%s\' class=\'%s\' size=\'%d\'>';
        $html = sprintf($html, $name, $id, $class, $size);
        $html .= '<option value=\'' . $no_choice['value'] . '\'>' . $no_choice['title'] . '</option>';

        foreach ($data as $key => $d) {
            if( (!empty($key['parent']) && (int)$d[$key['parent']] == 0) || empty($key['parent']) )
            {
                $level = ( !empty($option['level']) ) ? $d[$option['level']] : '';
                $selectedAttr = (in_array($d[$option['value']], $selected)) ? 'selected' : '';

            	$html .= '<option ' . $selectedAttr . ' value=\'' . $d[$option['value']] . '\'>' ;
            	$html .= $level . $d[$option['title']] ;
            	$html .= '</option>';
            

                if(!empty($key['id'])){
                    $html .= create_options($data, $option, $selected, $key, (int)$d[$key['id']]);
                }
            }
        }
        $html .= '</select>';
        return $html;
    }


    function create_options($data, $option, $selected, $key, $parent_id) {
        $html = '';
        $child_array = array();
        foreach ($data as $key => $c) {
            if( $c[$key['parent']] == $parent_id ) {
                array_push($child_array, $c);
            }
        }    

        
        if( count($child_array) <= 0 ) return $html;

        foreach ($child_array as $key => $child) {
            $level = ( !empty($option['level']) ) ? $child[$option['level']] : '';
            $selectedAttr = (in_array($child[$option['value']], $selected)) ? 'selected' : '';

            $html .= '<option ' . $selectedAttr . ' value=\'' . $child[$option['value']] . '\'>';
            $html .=    $child[$option['level']] . $child[$option['title']];
            $html .= '</option>'; 

            if(!empty($key['parent']) && !empty($key['id'])){
                $html .= create_options($data, $option, $selected, $key, (int)$child[$key['id']]);
            }
        }
        return $html;
    }

}

?>
{"filter":false,"title":"debug_helper.php","tooltip":"/application/helpers/debug_helper.php","undoManager":{"mark":42,"position":42,"stack":[[{"start":{"row":0,"column":0},"end":{"row":66,"column":2},"action":"insert","lines":["<?php","","if (!defined('BASEPATH'))","    exit('No direct script access allowed');","","if (!function_exists('my_select')) {","","    function my_select($data = array(), $option = array(), $selected = array(), $key = array('id'=>'', 'parent' => ''),","    \t\t\t\t\t$no_choice = array('title'=>'-- --', 'value'=>0),","    \t\t\t\t\t$name = '', $id = '', $class = '', $size = 0","    \t\t\t\t\t) ","    {","        $html = '<select name=\\'%s\\' id=\\'%s\\' class=\\'%s\\' size=\\'%d\\'>';","        $html = sprintf($html, $name, $id, $class, $size);","        $html .= '<option value=\\'' . $no_choice['value'] . '\\'>' . $no_choice['title'] . '</option>';","","        foreach ($data as $key => $d) {","            if( (!empty($key['parent']) && (int)$d[$key['parent']] == 0) || empty($key['parent']) )","            {","                $level = ( !empty($option['level']) ) ? $d[$option['level']] : '';","                $selectedAttr = (in_array($d[$option['value']], $selected)) ? 'selected' : '';","","            \t$html .= '<option ' . $selectedAttr . ' value=\\'' . $d[$option['value']] . '\\'>' ;","            \t$html .= $level . $d[$option['title']] ;","            \t$html .= '</option>';","            ","","                if(!empty($key['id'])){","                    $html .= create_options($data, $option, $selected, $key, (int)$d[$key['id']]);","                }","            }","        }","        $html .= '</select>';","        return $html;","    }","","","    function create_options($data, $option, $selected, $key, $parent_id) {","        $html = '';","        $child_array = array();","        foreach ($data as $key => $c) {","            if( $c[$key['parent']] == $parent_id ) {","                array_push($child_array, $c);","            }","        }    ","","        ","        if( count($child_array) <= 0 ) return $html;","","        foreach ($child_array as $key => $child) {","            $level = ( !empty($option['level']) ) ? $child[$option['level']] : '';","            $selectedAttr = (in_array($child[$option['value']], $selected)) ? 'selected' : '';","","            $html .= '<option ' . $selectedAttr . ' value=\\'' . $child[$option['value']] . '\\'>';","            $html .=    $child[$option['level']] . $child[$option['title']];","            $html .= '</option>'; ","","            if(!empty($key['parent']) && !empty($key['id'])){","                $html .= create_options($data, $option, $selected, $key, (int)$child[$key['id']]);","            }","        }","        return $html;","    }","","}","","?>"],"id":1}],[{"start":{"row":5,"column":36},"end":{"row":64,"column":0},"action":"remove","lines":["","","    function my_select($data = array(), $option = array(), $selected = array(), $key = array('id'=>'', 'parent' => ''),","    \t\t\t\t\t$no_choice = array('title'=>'-- --', 'value'=>0),","    \t\t\t\t\t$name = '', $id = '', $class = '', $size = 0","    \t\t\t\t\t) ","    {","        $html = '<select name=\\'%s\\' id=\\'%s\\' class=\\'%s\\' size=\\'%d\\'>';","        $html = sprintf($html, $name, $id, $class, $size);","        $html .= '<option value=\\'' . $no_choice['value'] . '\\'>' . $no_choice['title'] . '</option>';","","        foreach ($data as $key => $d) {","            if( (!empty($key['parent']) && (int)$d[$key['parent']] == 0) || empty($key['parent']) )","            {","                $level = ( !empty($option['level']) ) ? $d[$option['level']] : '';","                $selectedAttr = (in_array($d[$option['value']], $selected)) ? 'selected' : '';","","            \t$html .= '<option ' . $selectedAttr . ' value=\\'' . $d[$option['value']] . '\\'>' ;","            \t$html .= $level . $d[$option['title']] ;","            \t$html .= '</option>';","            ","","                if(!empty($key['id'])){","                    $html .= create_options($data, $option, $selected, $key, (int)$d[$key['id']]);","                }","            }","        }","        $html .= '</select>';","        return $html;","    }","","","    function create_options($data, $option, $selected, $key, $parent_id) {","        $html = '';","        $child_array = array();","        foreach ($data as $key => $c) {","            if( $c[$key['parent']] == $parent_id ) {","                array_push($child_array, $c);","            }","        }    ","","        ","        if( count($child_array) <= 0 ) return $html;","","        foreach ($child_array as $key => $child) {","            $level = ( !empty($option['level']) ) ? $child[$option['level']] : '';","            $selectedAttr = (in_array($child[$option['value']], $selected)) ? 'selected' : '';","","            $html .= '<option ' . $selectedAttr . ' value=\\'' . $child[$option['value']] . '\\'>';","            $html .=    $child[$option['level']] . $child[$option['title']];","            $html .= '</option>'; ","","            if(!empty($key['parent']) && !empty($key['id'])){","                $html .= create_options($data, $option, $selected, $key, (int)$child[$key['id']]);","            }","        }","        return $html;","    }","",""],"id":2}],[{"start":{"row":5,"column":36},"end":{"row":7,"column":0},"action":"insert","lines":["","    ",""],"id":3}],[{"start":{"row":5,"column":22},"end":{"row":5,"column":31},"action":"remove","lines":["my_select"],"id":4},{"start":{"row":5,"column":22},"end":{"row":5,"column":23},"action":"insert","lines":["_"]}],[{"start":{"row":5,"column":23},"end":{"row":5,"column":24},"action":"insert","lines":["p"],"id":5}],[{"start":{"row":5,"column":24},"end":{"row":5,"column":25},"action":"insert","lines":["r"],"id":6}],[{"start":{"row":6,"column":4},"end":{"row":12,"column":4},"action":"insert","lines":["function _pr($data, $flag = FALSE) {","       echo \"<pre>\";","       print_r($data);","       echo \"</pre>\";","       if ($flag)","          die;","   }"],"id":8}],[{"start":{"row":13,"column":1},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":10}],[{"start":{"row":15,"column":0},"end":{"row":20,"column":1},"action":"insert","lines":["if (!function_exists('_last_query')) {","     function _last_query($stop = FALSE) {","         $CI = & get_instance();","         _pr($CI->db->last_query(), $stop);","    }","}"],"id":11}],[{"start":{"row":1,"column":0},"end":{"row":13,"column":2},"action":"insert","lines":["/*","|--------------------------------------------------------------------------","| my custom Select","|--------------------------------------------------------------------------","|","| @param\t  array\t    $data\t\tmeta data","| @param\t  array\t    $keywords\tGiving keyname of field need to use in data array include: title, value, parent, level","| @param\t  array\t    $selected\tList of variables are selected","| @param\t  array\t    $no_choice\tCustom for first option","| @param\t  array\t    $attributes\tList of select attributes. Include: name, id, class, size etc","| @return\t  string","|","*/"],"id":12}],[{"start":{"row":3,"column":2},"end":{"row":3,"column":18},"action":"remove","lines":["my custom Select"],"id":13},{"start":{"row":3,"column":2},"end":{"row":3,"column":3},"action":"insert","lines":["D"]}],[{"start":{"row":3,"column":3},"end":{"row":3,"column":4},"action":"insert","lines":["e"],"id":14}],[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"insert","lines":["g"],"id":15}],[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"insert","lines":["g"],"id":16}],[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"remove","lines":["g"],"id":17}],[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"remove","lines":["g"],"id":18}],[{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"insert","lines":["b"],"id":19}],[{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"insert","lines":["u"],"id":20}],[{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"insert","lines":["g"],"id":21}],[{"start":{"row":6,"column":0},"end":{"row":11,"column":18},"action":"remove","lines":["| @param\t  array\t    $data\t\tmeta data","| @param\t  array\t    $keywords\tGiving keyname of field need to use in data array include: title, value, parent, level","| @param\t  array\t    $selected\tList of variables are selected","| @param\t  array\t    $no_choice\tCustom for first option","| @param\t  array\t    $attributes\tList of select attributes. Include: name, id, class, size etc","| @return\t  string"],"id":22}],[{"start":{"row":5,"column":1},"end":{"row":6,"column":0},"action":"remove","lines":["",""],"id":23}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":[" "],"id":24}],[{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["M"],"id":25}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":["a"],"id":26}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["k"],"id":27}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["e"],"id":28}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":[" "],"id":29}],[{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["e"],"id":30}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["a"],"id":31}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["s"],"id":32}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["y"],"id":33}],[{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":[" "],"id":34}],[{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["d"],"id":35}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["e"],"id":36}],[{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["b"],"id":37}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["u"],"id":38}],[{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["g"],"id":39}],[{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":["i"],"id":40}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"insert","lines":["n"],"id":41}],[{"start":{"row":5,"column":19},"end":{"row":5,"column":20},"action":"insert","lines":["g"],"id":42}],[{"start":{"row":6,"column":1},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":43}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"insert","lines":["|"],"id":44}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":7},"end":{"row":3,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1444883735639,"hash":"525b1c20f89cf16dd902464960b36229898f876a"}
{"filter":false,"title":"index.php","tooltip":"/application/modules/admin/views/user/index.php","undoManager":{"mark":14,"position":14,"stack":[[{"start":{"row":20,"column":0},"end":{"row":32,"column":48},"action":"remove","lines":["<<<<<<< HEAD","=======","","                <!--notice-->","                <?php","                $notice = $this->session->flashdata('notice');","                if( isset( $notice ) && $notice ) {","                    notice( $notice ); ","                }","                ?>","                <!--//notice-->","            ",">>>>>>> 237a3d5c0bd6e88734ae0d109b8abc2d49f21b89"],"id":2},{"start":{"row":20,"column":0},"end":{"row":29,"column":12},"action":"insert","lines":["","                <!--notice-->","                <?php","                $notice = $this->session->flashdata('notice');","                if( isset( $notice ) && $notice ) {","                    notice( $notice ); ","                }","                ?>","                <!--//notice-->","            "]}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "],"id":3},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":33,"column":25},"end":{"row":42,"column":32},"action":"remove","lines":["show","                            <select name=\"ddlshowitem\" id=\"ddlshowitem\" class=\"combobox\">","                            <option value=\"10\">10</option>","                             <option selected=\"selected\" value=\"20\">20</option>","                            <option value=\"30\">30</option>","                            <option value=\"40\">40</option>","                            <option value=\"50\">50</option>","                            <option value=\"100\">100</option>","                            </select>","                         entries"],"id":4}],[{"start":{"row":33,"column":25},"end":{"row":38,"column":26},"action":"insert","lines":["<?php","                            my_select_range(","                                array('name' => 'range', 'id' => 'ddlshowitem' , 'class' => 'combobox ddlFilter', 'data-filter' => url_add_params($params, '/index.php/admin/category')),","                                $params['range']","                            );","                        ?>"],"id":5}],[{"start":{"row":33,"column":24},"end":{"row":33,"column":25},"action":"remove","lines":[" "],"id":6}],[{"start":{"row":35,"column":173},"end":{"row":35,"column":181},"action":"remove","lines":["category"],"id":7},{"start":{"row":35,"column":173},"end":{"row":35,"column":174},"action":"insert","lines":["u"]}],[{"start":{"row":35,"column":173},"end":{"row":35,"column":174},"action":"remove","lines":["u"],"id":8},{"start":{"row":35,"column":173},"end":{"row":35,"column":174},"action":"insert","lines":["ú"]}],[{"start":{"row":35,"column":174},"end":{"row":35,"column":175},"action":"insert","lines":["e"],"id":9}],[{"start":{"row":35,"column":174},"end":{"row":35,"column":175},"action":"remove","lines":["e"],"id":10},{"start":{"row":35,"column":173},"end":{"row":35,"column":174},"action":"remove","lines":["ú"]},{"start":{"row":35,"column":173},"end":{"row":35,"column":174},"action":"insert","lines":["ủ"]},{"start":{"row":35,"column":174},"end":{"row":35,"column":175},"action":"insert","lines":["e"]}],[{"start":{"row":35,"column":174},"end":{"row":35,"column":175},"action":"remove","lines":["e"],"id":11}],[{"start":{"row":35,"column":173},"end":{"row":35,"column":174},"action":"remove","lines":["ủ"],"id":12}],[{"start":{"row":35,"column":173},"end":{"row":35,"column":174},"action":"insert","lines":["u"],"id":13}],[{"start":{"row":35,"column":174},"end":{"row":35,"column":175},"action":"insert","lines":["s"],"id":14}],[{"start":{"row":35,"column":175},"end":{"row":35,"column":176},"action":"insert","lines":["e"],"id":15}],[{"start":{"row":35,"column":176},"end":{"row":35,"column":177},"action":"insert","lines":["r"],"id":16}]]},"ace":{"folds":[],"scrolltop":1500,"scrollleft":0,"selection":{"start":{"row":35,"column":177},"end":{"row":35,"column":177},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":141,"mode":"ace/mode/php"}},"timestamp":1449650032056,"hash":"71687dd9c10facf04ac5d3520e1053b1d659b15f"}
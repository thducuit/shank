{"filter":false,"title":"user_inputs.php","tooltip":"/application/modules/admin/controllers/inputs/user_inputs.php","undoManager":{"mark":12,"position":12,"stack":[[{"start":{"row":0,"column":0},"end":{"row":31,"column":1},"action":"insert","lines":["<?php","require_once APPPATH . \"modules/admin/controllers/inputs/inputs.php\";","class Group_Inputs extends Inputs {","","    private $params;","    ","\tpublic function __construct () {","\t\tparent::__construct();","\t\t$this->params = array(","            \"page\" => 1,","            \"keyword\" => '',","            \"range\" => 10","        );","\t\t","\t\t$page = $this->input->get('page');","        $keyword = $this->input->get('keyword');","        $range = $this->input->get('range');","","        return \t$this->set_param('page', $page)","                        ->set_param('keyword', $keyword)","                        ->set_param('range', $range)","                        ->get_params();","\t}","\t","\tpublic function get_params() {","\t    return $this->params;","\t}","","\tpublic function get_request_params() {","        return \t$this->get_params();","\t}","}"],"id":1}],[{"start":{"row":2,"column":6},"end":{"row":2,"column":11},"action":"remove","lines":["Group"],"id":2},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["U"]}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["s"],"id":3}],[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["e"],"id":4}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":["r"],"id":5}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["s"],"id":6}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["s"],"id":7}],[{"start":{"row":8,"column":24},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":9,"column":0},"end":{"row":9,"column":6},"action":"insert","lines":["\t\t    "]}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":17},"action":"insert","lines":["\"pid\" => 0,"],"id":9}],[{"start":{"row":17,"column":44},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":18,"column":0},"end":{"row":18,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":40},"action":"insert","lines":["$pid = $this->input->get('pid');"],"id":11}],[{"start":{"row":22,"column":52},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":23,"column":0},"end":{"row":23,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":23,"column":24},"end":{"row":23,"column":48},"action":"insert","lines":["->set_param('pid', $pid)"],"id":13}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":23,"column":48},"end":{"row":23,"column":48},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1449650290045,"hash":"6b86aa654ad3baee798eacd0619b2a28b46e75d2"}
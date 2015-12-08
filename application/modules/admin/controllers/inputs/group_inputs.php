<?php
require_once APPPATH . "modules/admin/controllers/inputs/inputs.php";
class Group_Inputs extends Inputs {

    private $params;
    
	public function __construct () {
		parent::__construct();
		$this->params = array(
            "page" => 1,
            "keyword" => '',
            "range" => 10
        );
		
		$page = $this->input->get('page');
        $keyword = $this->input->get('keyword');
        $range = $this->input->get('range');

        return 	$this->set_param('page', $page)
                        ->set_param('keyword', $keyword)
                        ->set_param('range', $range)
                        ->get_params();
	}
	
	public function get_params() {
	    return $this->params;
	}

	public function get_request_params() {
        return 	$this->get_params();
	}
}
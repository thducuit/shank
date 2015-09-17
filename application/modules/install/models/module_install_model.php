<?php 
require_once APPPATH . 'models/module_model.php';
class Module_Install_Model extends Module_Model {
 
 	private $table = 'module';

    public function __construct() {
        parent::__construct();
    }
    
    public function list_all_by_paging($select = array(), $filters = array(), $orders = array(), $from = 0, $to = 20, $keyword = '') {
    	if(count($select) > 0) {
    		 $this->db->select($select);
    	}

    	if(!empty($keyword)) {
    		 $this->db->like('module_name', $keyword);
    	}

    	$this->db->limit($to, $from);

    	foreach ($filters as $f => $fvalue) {
    		$this->db->where($f, $fvalue);
    	}

    	foreach ($orders as $key => $value) {
    		$this->db->order_by($key, $value);
    	}

    	$query = $this->db->get($this->table);

        return $query->result_array();
    }


    
}
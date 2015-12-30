<?php 
require_once APPPATH . 'models/meta_model.php';
class Meta_Admin_Model extends Meta_Model {
 
    public function __construct() {
        parent::__construct();
    }
    
    public function get_by_fid($fid) {
    	if( empty($fid) ) return array();
    	$this->db->from( $this->get_table() );
    	$this->db->where('fid', $fid);
    	$query = $this->db->get();
    	return $query->result_array();
    }

    public function update($data, $filters = array()) {
    	foreach ($filters as $f => $fvalue) {
    		$this->db->where($f, $fvalue);
    	}
    	return $this->db->update($this->get_table(), $data);
    }

    public function insert_batch($data) {
        if( empty($data) ) return 0;
        return $this->db->insert_batch( $this->get_table(), $data );
    }
}
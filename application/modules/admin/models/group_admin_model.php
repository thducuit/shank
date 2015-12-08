<?php 
require_once APPPATH . 'models/group_model.php';
class Group_Admin_Model extends Group_Model {
 
    public function __construct() {
        parent::__construct();
    }
    
    
    public function list_all() {
        $query = $this->db->get($this->get_table());
        return $query->result_array();
    }
    
}
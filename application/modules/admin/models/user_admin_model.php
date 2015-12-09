<?php 
require_once APPPATH . 'models/user_model.php';
class User_Admin_Model extends User_Model {
 
    public function __construct() {
        parent::__construct();
    }
    
    
    public function list_all() {
        $query = $this->db->get($this->get_table());
        return $query->result_array();
    }
    
    public function login($username, $password) {
        return false;
    }
}
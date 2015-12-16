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
        $query = $this->db->get_where($this->get_table(), array('username' => $username, 'password' => $password, 'active'=> 1, 'user_builtin'=>1));
        $rs = $query->result_array();
        return ( empty($rs) ) ? false : $rs;
    }

    public function validate ($old_password, $user_id) {
        $query = $this->db->get_where($this->get_table(), array('user_id' => $user_id, 'password' => $old_password));
        return $query->result_array();
    }
}
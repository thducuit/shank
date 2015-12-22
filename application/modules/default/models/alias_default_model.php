<?php 
require_once APPPATH . 'models/alias_model.php';
class Alias_Default_Model extends Alias_Model {
 
    public function __construct() {
        parent::__construct();
    }

    public function get_alias_by_language_and_name($lang, $alias_name) {
        $alias = $this->get_by_name($alias_name);
        _pr($alias, true);
    }  

    public function get_by_name($alias_name) {
        $this->db->from($this->get_table());
        $this->db->where( array('alias_name' => $alias_name) );
        $query = $this->db->get();
        return $query->result_array();
    }
    
}
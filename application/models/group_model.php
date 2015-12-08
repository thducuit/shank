<?php
class Group_Model extends CI_Model {
    
    private $table = 'group';
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_table() {
        return $this->table;
    }
    
    public function insert($data) {
        if( empty($data) ) return 0;
        $this->db->insert( $this->table, $data );
        return $this->db->insert_id();
    }

    public function list_all($select = array()) {
        if(count($select) > 0) {
             $this->db->select($select);
        }
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    
}
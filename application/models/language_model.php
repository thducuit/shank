<?php 
class Language_Model extends CI_Model {

	private $table = 'language';

    public function __construct() {
        parent::__construct();
        $this->load->database();  
    }

    public function list_all() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function insert($data) {
        if( empty($data) ) return;
        return $this->db->insert($this->table, $data);
    }

    public function update($data) {
        if(empty($data) || empty($data['language_id'])) return;
        $this->db->where('language_id', $data['language_id']); 
        return $this->db->update($this->table, $data);
    }

    public function upsert($data) {
        if( empty($data) ) return;
        $result = $this->db->get_where( $this->table, array('language_id' => $data['language_id']) )
                           ->result();
        if( count($result) > 0 ) {
            return $this->update($data);
        }else {
            return $this->insert($data);
        }
    }

    public function delete() {
    	
    }
}
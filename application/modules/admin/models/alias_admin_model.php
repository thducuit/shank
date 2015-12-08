<?php 
require_once APPPATH . 'models/alias_model.php';
class Alias_Admin_Model extends Alias_Model {
 
    public function __construct() {
        parent::__construct();
    }
    
    public function insert( $fid, $data ) {
        $agrs = array(  
            'alias_name' => ( !empty($data['alias']) ) ? $data['alias'] : $data['module'] . $fid,
            'alias_module' => $data['module'],
            'fid' => $fid,
            'language_id' => $data['language_id'] 
        );
        $this->db->insert( $this->get_table(), $agrs );
        return $this->db->insert_id();
    }
    
    public function update( $data ) {
        if( empty($data['alias']) ) return;
        $agrs = array(  
            'alias_name' =>  $data['alias']
        );
        return $this->db->update( $this->get_table(), $agrs, array('alias_id' => $data['alias_id']) );
    }
    
    
}
<?php 
require_once APPPATH . 'models/category_model.php';
class Category_Default_Model extends Category_Model {
 
    public function __construct() {
        parent::__construct();
    }

    public function get_category($category_module, $language_id) {
    	
   		$this->db->select('*');
   		$this->db->from($this->get_table());
   		$this->db->join('alias', 'alias.fid = category.category_id');
   		$this->db->where(array('alias.alias_module' => $category_module,'category.category_module' => $category_module, 'category.language_id' => $language_id, 'category_status' => 1)); 
   		$query = $this->db->get();
   		return  $query->result_array();
   		
   		
    }
    
}
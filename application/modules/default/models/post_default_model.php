<?php 
require_once APPPATH . 'models/post_model.php';
class Post_Default_Model extends Post_Model {
 
    public function __construct() {
        parent::__construct();
    }

    public function get_post($post_module, $language_id) {
    	$query = $this->db->get_where($this->get_table(), array('post_module' => $post_module, 'language_id' => $language_id, 'post_status' => 1));
   		return $query->result_array();
   		
    }
}
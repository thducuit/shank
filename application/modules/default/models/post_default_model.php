<?php 
require_once APPPATH . 'models/post_model.php';
class Post_Default_Model extends Post_Model {
 
    public function __construct() {
        parent::__construct();
    }

    public function get_post($post_module, $language_id) {
    	//$query = $this->db->get_where($this->get_table(), array('post_module' => $post_module, 'language_id' => $language_id, 'post_status' => 1));
   		$this->db->select('*');
   		$this->db->from($this->get_table());
   		$this->db->join('alias', 'alias.fid = post.post_id');
   		$this->db->where(array('post_module' => $post_module, 'post.language_id' => $language_id, 'post_status' => 1)); 
   		$query = $this->db->get();
   		return $query->result_array();
   		
    }
}
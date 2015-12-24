<?php 
require_once APPPATH . 'models/post_model.php';
class Post_Default_Model extends Post_Model {
 
    public function __construct() {
        parent::__construct();
    }

    public function get_post($post_module, $language_id) {
    	$this->db->select('*');
   		$this->db->from($this->get_table());
   		$this->db->join('alias', 'alias.fid = post.post_id');
   		$this->db->where(array('alias.alias_module' => $post_module, 'post_module' => $post_module, 'post.language_id' => $language_id, 'post_status' => 1, 'post_type'=> 'post', 'post_lock'=>0)); 
   		$query = $this->db->get();
   		return $query->result_array();
    }


    public function get_pages($language_id = '') {
      $this->db->select('*');
      $this->db->from($this->get_table());
      $this->db->where(array('post_type' => 'page', 'post_lock' => 0));
      if( !empty($language_id) )  {
        $this->db->where('language_id', $language_id);
      }
      $query = $this->db->get();
      return $query->result_array();//$query->row()
    }

    public function get_page($post_module, $language_id) {
      $this->db->select('*');
      $this->db->from($this->get_table());
      $this->db->where(array('post_module' => $post_module, 'language_id' => $language_id, 'post_lock' => 0, 'post_type' => 'page'));
      $query = $this->db->get();
      return (array)$query->row();

    }
}
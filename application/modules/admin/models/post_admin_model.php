<?php 
require_once APPPATH . 'models/post_model.php';
class Post_Admin_Model extends Post_Model {
 
    public function __construct() {
        parent::__construct();
    }
    
    
    /**
     * INSERT NEW POST
     * 
     */
    public function insert( $data ) {
        
        //GET DATA
        $title = stripslashes(strip_tags( $data['title'] ));
        $content = stripslashes( $data['content'] );
        $description = stripslashes( $data['description'] );
        $seo_title = stripslashes(strip_tags( $data['seo_title'] ));
        $seo_keywords = stripslashes(strip_tags( $data['seo_keywords'] ));
        $seo_description = stripslashes(strip_tags( $data['seo_description'] ));
        $link = '/' . $data['alias'];
        
        //PREPARE DATA
        $agrs = array(
            'post_title' => $title,         
            'post_description' => $description,    
            'post_content' => $content, 
            'post_order'  => intval( $data['order'] ), 
            'post_status' => intval( $data['status'] ), 
            'post_highlight' => intval( $data['highlight'] ), 
            'post_datecreated' => date( 'Y-m-d H:i:s' ),
            'post_module' => $data['module'],    
            'post_seo_title' => ( empty($seo_title) ) ? $title : $seo_title,
            'post_seo_keywords' => $seo_keywords,
            'post_seo_description' => $seo_description,
            'category_id' => intval( $data['category_id'] ),
            'language_id' => $data['language_id'],            
            'post_featured_image' => $data['featured_image'],       
            'langmap_id' => $data['langmap_id'],            
            'post_lock'  => (empty( $title )) ? 1 : 0,
            'post_link'  => $link,
            'post_type' => $data['type']
        );
        
        $this->db->insert( $this->get_table(), $agrs );
        return $this->db->insert_id();
    }
    
    
    /**
     * GET ALL CATEGORY BY PAGINATION
     * 
     */
    public function list_all_by_paging($select = array(), $filters = array(), $orders = array(), $from = 0, $to = 20, $keyword = '') {
    	if(count($select) > 0) {
    		 $this->db->select($select);
    	}

    	if(!empty($keyword)) {
    		 $this->db->like('post_title', $keyword);
    	}

    	$this->db->limit($to, $from);

    	foreach ($filters as $f => $fvalue) {
    		$this->db->where($f, $fvalue);
    	}

    	foreach ($orders as $key => $value) {
    		$this->db->order_by($key, $value);
    	}

    	$query = $this->db->get( $this->get_table() );

        return $query->result_array();
    }
    
    
    
    /**
     * GET CATEGORY BY LANGMAP ID
     * 
     */
    public function get_by_langmap_id( $langmap_id ) {
        if( empty($langmap_id) ) return array();
        $table  = $this->get_table();
        $this->db->select('post.*, alias.alias_id, alias.alias_name, alias.alias_module, alias.fid');
        $this->db->join('alias', "alias.fid = $table.post_id", 'left');
        $this->db->where('post.langmap_id', $langmap_id);
        $query = $this->db->get($table);
        return $query->result_array();
    }
    
}
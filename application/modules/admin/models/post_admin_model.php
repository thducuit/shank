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
}
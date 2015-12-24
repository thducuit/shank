<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';
require_once APPPATH . "modules/admin/controllers/inputs/post_inputs.php";

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends Base_Admin_Controller {
    
    private $module;
    private $languages;
    private $class_view;
    private $url;
    private $params;
    private $data;
    private $category;
    
    
    /**
     * CONSTRUCT 
     * 
     */
    function __construct(){
        
        parent::__construct();
        
        $this->data = $this->get_data();
        
        $this->module = array();
        
        //GET VIEW
        $this->class_view = $this->router->fetch_class() . "/" . $this->router->fetch_method();
        
        //GET CURENT URL
        $this->url = $this->module_url();
        
        //GET LANGUAGES
        $this->languages = $this->languages();
        
        //GET PARAMS
        $this->params = $this->request_params( new Post_inputs );
        
        //ADD PARAMS TO VIEW
        $this->data['params'] = $this->params;
        
        //GET MODULE
        $this->module = $this->module();
        
        //CATEGORY
        $this->get_category();
        
        //LOAD MODEL
        $this->load_model();
        
        //LOAD HELPER
        $this->load_helper();
        
        //SET TITLE FOR VIEW
        $this->template->title( ( !empty($this->module->module_name) ) ? $this->module->module_name : 'Post' );
    }
    
    
    private function get_category() {
        $this->category = $this->module_code() . 'cat';
    }
    
    
    /**
     * INDEX ACTION 
     * 
     */
    public function index () {
        //SELECT
        $select = array( 'post_id', 'post_title', 'post_order', 'post_status', 'post_highlight', 'post.language_id', 'post_featured_image', 'category_title' );
        
        //FILTER
        $filters = array();
        if( (int)$this->params['pid'] != 0 ) {
            $filters['category_id'] = (int)$this->params['pid'];
        }
        $filters['post_type'] = 'post';
        $filters['post.language_id'] =  DEFAULT_LANGUAGE;
        if( (int)$this->params['show'] != -1 ) {
            $filters['post_status'] = (int)$this->params['show'];
        }
        
        if( (int)$this->params['highlight'] != -1 ) {
            $filters['post_highlight'] = (int)$this->params['highlight'];
        }
        $filters['post_module'] = $this->module_code();
        //ORDER
        $orders = array('post_order' => 'asc');
        
        //PAGINATION
        $page = (int)$this->params['page'];
        $range = (int)$this->params['range'];
        $from = ($page - 1) * $range;
        
        //DATA TO VIEW
        $this->data['list'] = $this->post_admin_model->list_all_by_paging( $select, $filters, $orders, $from, $range, $keyword = $this->params['keyword'] );
        //_pr($this->data['list'], true);
        //GET LIST SORT
        $select = array('category_id', 'category_title', 'category_level', 'language_id');
        $filters = array( 'category_status' => 1,  'category_module' => $this->category );
        $orders = array('category_order' => 'asc');
        $rs = $this->category_admin_model->list_all( $select, $filters, $orders );
        $this->data['list_sort'] = get_list_by_language_id(DEFAULT_LANGUAGE, $rs);
        
        //RUN VIEW
        $this->template->build( $this->class_view, $this->data);
    }
    
    
    
    /**
     * ADD ACTION 
     * 
     */
    public function add() {
        $post = array();
        
        //IF SUBMITED
        if ( isset($_POST['add']) ) {
            //ADD NEW LANG MAP
            $langmap_id = (int)$this->langmap_admin_model->insert( array('langmap_module' => $this->module_code() ) );
        
            //GET DATA FROM POST
            $posts = $this->input->post('post');
            $status = $this->input->post('status');
            $order = $this->input->post('order');
            $highlight = $this->input->post('highlight');
            $featured_image = $this->input->post('featured_image');
            
            foreach($this->languages as $lang) {
                $post = $posts[$lang['language_id']];
                $post['status'] = $status;
                $post['order'] = $order;
                $post['highlight'] = $highlight;
                $post['featured_image'] = $featured_image;
                $post['language_id'] = $lang['language_id'];
                $post['langmap_id'] = $langmap_id;
                $post['module'] = $this->module_code();
                $post['alias'] = ( !empty( $post['alias'] ) ) ? $post['alias'] : ( ( !empty( $post['title'] ) ) ? alias( $post['title'] ) : 'post-' . uniqid('shank_') );
                $post['type'] = 'post';
                
                
                //INSERT POST
                $post_id = $this->post_admin_model->insert( $post );
                
                //INSERT ALIAS
                $this->alias_admin_model->insert($post_id, $post);
            }
            
            //NOTICE
            $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>'Insert success') );
            //BACK TO INDEX
            redirect( url_add_params($this->params, '/admin/post') );
        } else {
            $this->data['languages'] = $this->languages;
            $this->data['list'] = array();
            
            //GET LIST
            $this->get_list_parent_category();
            
            //RUN VIEW
            $this->template->build( $this->class_view, $this->data);
        }
    }
    
    
    
    /**
     * EDIT ACTION
     * 
     */
    public function edit() {
        $post = array();
        $this->data['posts'] = array();
        $this->data['languages'] = $this->languages;
        
        //IF SUBMITED
        if ( isset($_POST['update']) ) {
            //GET DATA FROM POST
            $posts = $this->input->post('post');
            $status = $this->input->post('status');
            $order = $this->input->post('order');
            $highlight = $this->input->post('highlight');
            $featured_image = $this->input->post('featured_image');

            foreach($this->languages as $lang) {
                $post = $posts[$lang['language_id']];
                $post['status'] = $status;
                $post['order'] = $order;
                $post['highlight'] = $highlight;
                $post['featured_image'] = $featured_image;
                $post['alias'] = ( !empty( $post['alias'] ) ) ? $post['alias'] : ( ( !empty( $post['title'] ) ) ? alias( $post['title'] ) : 'post-' . uniqid('shank_') );
                
                //UPDATE POST
                $this->post_admin_model->update( $post );
                
                //UPDATE ALIAS
                $this->alias_admin_model->update( $post );
            }
            
            //NOTICE
            $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>'Update success') );
            //BACK TO INDEX
            redirect( url_add_params($this->params, '/admin/post') );
        }else{
            //GET POSTS TO SHOW
            $id = $this->input->get('id');
            $post   = $this->post_admin_model->get_by_id($id);
            $langmap_id = $post->langmap_id;
            $rs = $this->post_admin_model->get_by_langmap_id($langmap_id);
            foreach($this->languages as $l) {
                $this->data['posts'][$l['language_id']] = get_list_by_language_id($l['language_id'], $rs, true);
            }
            
            //GET LIST
            $this->get_list_parent_category();
            
            //RUN VIEW
            $this->template->build( $this->class_view, $this->data);
        }
    }
    
    
    
    
    /**
     * UPDATE STATUS
     * 
     */
    public function status() {
        //GET DATA
        $status = (int)$this->input->get('status');
        $id = (int)$this->input->get('id');
        
        //GET LANGMAP ID
        $post = $this->post_admin_model->get_by_id($id);
        $langmap_id = $post->langmap_id;
        
        //UPDATE DATA
        $args = array('post_status' => $status);
        $result = $this->post_admin_model->update_by_langmap_id( $args, $langmap_id );
        
        //RESPONSE
        echo json_encode( array('STATUS' => $result) );
    }
    
    
    
    /**
     * UPDATE
     * 
     */
    public function update() {
        $type = $this->input->post('type');
        $sorts = array();
        $ids = array();
        if( $type == 'update' ) {
            $sorts = $this->input->post('sorts');
            if( count($sorts) > 0 ) {
                foreach($sorts as $id => $value) {
                    //GET LANGMAP ID
                    $post = $this->post_admin_model->get_by_id($id);
                    $langmap_id = $post->langmap_id;
                    
                    //UPDATE DATA
                    $args = array('post_order' => $value);
                    $this->post_admin_model->update_by_langmap_id( $args, $langmap_id );
                }
            }
        } elseif ( $type == 'delete' ) {
            $ids = $this->input->post('ids');
            if( count($ids) > 0 ) {
                foreach($ids as $id) {
                    $this->remove($id);
                }
            }
        }
        
        //NOTICE
        $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>'Update success') );
        //BACK TO INDEX
        redirect( url_add_params($this->params, '/admin/post') );
    }
    
    
    
    /**
     * DELETE
     * 
     */
    public function delete() {
        $id = (int)$this->input->get('id');
        $this->remove($id);

        //NOTICE
        $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>'Delete success') );
        //BACK TO INDEX
        redirect( url_add_params($this->params, '/admin/post') );
    }
    
    
    
    /**
     * REMOVE BY ID 
     * 
     */
    private function remove($id) {
        //GET LANGMAP ID
        $post = $this->post_admin_model->get_by_id($id);
        $langmap_id = $post->langmap_id;
        
        $posts = $this->post_admin_model->get_by_langmap_id($langmap_id);
        
        //DELETE DATA
        $this->post_admin_model->delete_by_langmap_id( $langmap_id );
        
        //DELETE ALIAS
        foreach($posts as $post) {
            $alias_id = $post['alias_id'];
            $this->alias_admin_model->delete_by_id($alias_id);
        }
    }
    
    
    
    /**
     * LOAD MODEL 
     * 
     */
    private function load_model() {
        $this->load->Model("post_admin_model");
        $this->load->Model("category_admin_model");
        $this->load->Model("langmap_admin_model");
        $this->load->Model("alias_admin_model");
    }
    
    
    /**
     * LOAD HELPER 
     * 
     */
    private function load_helper() {
        $this->load->helper('select');
        $this->load->helper('button');
        $this->load->helper('sort_input');
        $this->load->helper('pagination');
        $this->load->helper('utility');
        $this->load->helper('alias');
    }
    
    
    /**
     * GET LIST PARENT CATEGORY  
     * 
     */
    private function get_list_parent_category() {
        $rs = $this->category_admin_model->list_all( $select = array( 'category_id', 'category_title', 'catparent_id', 'category_level', 'language_id'),
                                                     $filters = array( 'category_status' => 1,  'category_module' =>  $this->category),
                                                     $orders = array() 
                                                  );
        foreach($this->languages as $l) {
            $this->data['list'][$l['language_id']] = get_list_by_language_id($l['language_id'], $rs);
        }
    }
}
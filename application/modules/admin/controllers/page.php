<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';
require_once APPPATH . "modules/admin/controllers/inputs/post_inputs.php";

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page extends Base_Admin_Controller {
    
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
        //$this->module = $this->module();
        
        //$this->get_category();
        
        //SET TITLE FOR VIEW
        $this->template->title( ( !empty($this->module->module_name) ) ? $this->module->module_name : 'Page' );
    }
    
    
    /**
     * INDEX ACTION 
     * 
     */
    public function index () {
        $this->load->Model("post_admin_model");
        $this->load->Model("category_admin_model");
        $this->load->helper('select');
        $this->load->helper('button');
        $this->load->helper('sort_input');
        $this->load->helper('pagination');
        $this->load->helper('utility');
        
        //SELECT
        $select = array('post_id', 'post_title', 'post_order', 'post_status', 'language_id', );
        //FILTER
        $filters = array( 'post_type'=>'page' );
        $filters['language_id'] =  DEFAULT_LANGUAGE;
        //ORDER
        $orders = array();
        
        //PAGINATION
        $page = (int)$this->params['page'];
        $range = (int)$this->params['range'];
        $from = ($page - 1) * $range;
        
        //DATA TO VIEW
        $this->data['list'] = $this->post_admin_model->list_all_by_paging( $select, $filters, $orders, $from, $range, $keyword = $this->params['keyword'] );
        
        //RUN VIEW
        $this->template->build( $this->class_view, $this->data);
    }
    
    
    
    /**
     * ADD ACTION 
     * 
     */
    public function add() {
        $this->load->Model("module_admin_model");
        $this->load->Model("post_admin_model");
        $this->load->Model("langmap_admin_model");
        $this->load->Model("alias_admin_model");
        $this->load->helper('alias');
        $this->load->helper('utility');
        $this->load->helper('select');
        $category = array();
        
        //IF SUBMITED
        if ( isset($_POST['add']) ) {
            //ADD NEW LANG MAP
            $langmap_id = (int)$this->langmap_admin_model->insert( array('langmap_module' => 'page' ) );
        
            //GET DATA FROM POST
            $posts = $this->input->post('post');
            $status = 1;
            $highlight = 1;
            $featured_image = $this->input->post('featured_image');
            $module = $this->input->post('module');
            
            foreach($this->languages as $lang) {
                $post = $posts[$lang['language_id']];
                $post['status'] = $status;
                $post['order'] = $order;
                $post['highlight'] = $highlight;
                $post['featured_image'] = $featured_image;
                $post['language_id'] = $lang['language_id'];
                $post['langmap_id'] = $langmap_id;
                $post['module'] = $module;
                $post['alias'] = ( !empty( $post['alias'] ) ) ? $post['alias'] : ( ( !empty( $post['title'] ) ) ? alias( $post['title'] ) : 'post-' . uniqid('shank_') );
                $post['type'] = 'page';
                
                //INSERT POST
                $post_id = $this->post_admin_model->insert( $post );
            }
            
            //NOTICE
            $this->session->set_flashdata( 'notice', array('status'=>'success', 'message'=>'Insert success') );
            //BACK TO INDEX
            redirect( url_add_params($this->params, '/admin/page') );
        } else {
            $this->data['languages'] = $this->languages;
            $this->data['list'] = array();
            
            //GET LIST
            $filters = array('module_menu'=>1);
            $this->data['list'] = $this->module_admin_model->list_all(array(), $filters);
            
            //RUN VIEW
            $this->template->build( $this->class_view, $this->data);
        }
    }
    
    
    
    /**
     * EDIT ACTION
     * 
     */
    public function edit() {
        $this->load->Model("post_admin_model");
        $this->load->Model("category_admin_model");
        $this->load->Model("langmap_admin_model");
        $this->load->Model("alias_admin_model");
        $this->load->helper('alias');
        $this->load->helper('utility');
        $this->load->helper('select');
        
        $post = array();
        $this->data['posts'] = array();
        $this->data['languages'] = $this->languages;
        
        //IF SUBMITED
        if ( isset($_POST['update']) ) {
            
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
            $filters = array('module_menu'=>1);
            $this->data['list'] = $this->module_admin_model->list_all(array(), $filters);
            
            //RUN VIEW
            $this->template->build( $this->class_view, $this->data);
        }
    }
    
    
    
    
    /**
     * UPDATE STATUS
     * 
     */
    public function status() {
        $this->load->Model("category_admin_model");
        
        //GET DATA
        $status = (int)$this->input->get('status');
        $id = (int)$this->input->get('id');
        
        //GET LANGMAP ID
        $category = $this->category_admin_model->get_by_id($id);
        $langmap_id = $category->langmap_id;
        
        //UPDATE DATA
        $args = array('category_status' => $status);
        $result = $this->category_admin_model->update_by_langmap_id( $args, $langmap_id );
        
        //RESPONSE
        echo json_encode( array('STATUS' => $result) );
    }
    
    
    
    /**
     * UPDATE
     * 
     */
    public function update() {
        $this->load->Model("category_admin_model");
        $this->load->Model("alias_admin_model");
        $this->load->helper('utility');
        $type = $this->input->post('type');
        $sorts = array();
        $ids = array();
        if( $type == 'update' ) {
            $sorts = $this->input->post('sorts');
            if( count($sorts) > 0 ) {
                foreach($sorts as $id => $value) {
                    //GET LANGMAP ID
                    $category = $this->category_admin_model->get_by_id($id);
                    $langmap_id = $category->langmap_id;
                    
                    //UPDATE DATA
                    $args = array('category_order' => $value);
                    $this->category_admin_model->update_by_langmap_id( $args, $langmap_id );
                }
            }
        } elseif ( $type == 'delete' ) {
            $ids = $this->input->post('ids');
            if( count($ids) > 0 ) {
                foreach($ids as $id) {
                    //GET LANGMAP ID
                    $category = $this->category_admin_model->get_by_id($id);
                    $langmap_id = $category->langmap_id;
                    
                    $categories = $this->category_admin_model->get_by_langmap_id($langmap_id);
                    
                    //DELETE DATA
                    $this->category_admin_model->delete_by_langmap_id( $langmap_id );
                    
                    //DELETE ALIAS
                    foreach($categories as $cat) {
                        $alias_id = $cat['alias_id'];
                        $this->alias_admin_model->delete_by_id($alias_id);
                    }
                }
            }
        }
        
        //BACK TO INDEX
        redirect( url_add_params($this->params, '/admin/category') );
    }
    
    
    
    /**
     * DELETE
     * 
     */
    public function delete() {
        $id = $this->input->get('id');
        _pr($id, true);
    }
}
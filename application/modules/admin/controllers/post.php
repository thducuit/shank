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
        
        //SET TITLE FOR VIEW
        $this->template->title( ( !empty($this->module->module_name) ) ? $this->module->module_name : 'Post' );
    }
    
    
    
    /**
     * INDEX ACTION 
     * 
     */
    public function index () {
        $this->load->Model("category_admin_model");
        $this->load->helper('select');
        $this->load->helper('button');
        $this->load->helper('sort_input');
        $this->load->helper('pagination');
        $this->load->helper('utility');
        
        //SELECT
        $select = array('category_id', 'category_title', 'category_order', 'category_status', 'language_id', 'catparent_id', 'category_level');
        //FILTER
        $filters = array('catparent_id' => (int)$this->params['pid']);
        $filters['language_id'] =  ADMIN_LANGUAGE;
        if( (int)$this->params['show'] != -1 ) {
            $filters['category_status'] = (int)$this->params['show'];
        }
        $filters['category_module'] = $this->module_code();
        //ORDER
        $orders = array('category_order' => 'asc');
        
        //PAGINATION
        $page = (int)$this->params['page'];
        $range = (int)$this->params['range'];
        $from = ($page - 1) * $range;
        
        //DATA TO VIEW
        $this->data['list'] = $this->category_admin_model->list_all_by_paging( $select, $filters, $orders, $from, $range, $keyword = $this->params['keyword'] );
        
        //GET LIST SORT
        $filters = array( 'category_status' => 1,  'category_module' => $this->module_code() );
        $rs = $this->category_admin_model->list_all( $select, $filters, $orders );
        $this->data['list_sort'] = get_list_by_language_id(ADMIN_LANGUAGE, $rs);
        
        //RUN VIEW
        $this->template->build( $this->class_view, $this->data);
    }
    
    
    
    /**
     * ADD ACTION 
     * 
     */
    public function add() {
        $this->load->Model("category_admin_model");
        $this->load->Model("post_admin_model");
        $this->load->Model("langmap_admin_model");
        $this->load->Model("alias_admin_model");
        $this->load->helper('alias');
        $this->load->helper('utility');
        $this->load->helper('select');
        $category = array();
        
        //IF SUBMITED
        if ( isset($_POST['add']) ) {
            
        } else {
            $this->data['languages'] = $this->languages;
            $this->data['list'] = array();
            
            //GET LIST
            $rs = $this->category_admin_model->list_all( $select = array( 'category_id', 'category_title', 'catparent_id', 'category_level', 'language_id'),
                                                         $filters = array( 'category_status' => 1,  'category_module' => $this->module_code() ),
                                                         $orders = array() 
                                                      );
            foreach($this->languages as $l) {
                $this->data['list'][$l['language_id']] = get_list_by_language_id($l['language_id'], $rs);
            }
            
            //RUN VIEW
            $this->template->build( $this->class_view, $this->data);
        }
    }
    
    
    
    /**
     * EDIT ACTION
     * 
     */
    public function edit() {
        $this->load->Model("category_admin_model");
        $this->load->Model("langmap_admin_model");
        $this->load->Model("alias_admin_model");
        $this->load->helper('alias');
        $this->load->helper('utility');
        $this->load->helper('select');
        $category = array();
        $this->data['categories'] = array();
        $this->data['languages'] = $this->languages;
        
        //IF SUBMITED
        if ( isset($_POST['update']) ) {
            
        }else{
            //GET CATEGORIES TO SHOW
            /*$id = $this->input->get('id');
            $category   = $this->category_admin_model->get_by_id($id);
            $langmap_id = $category->langmap_id;
            $rs = $this->category_admin_model->get_by_langmap_id($langmap_id);
            foreach($this->languages as $l) {
                $this->data['categories'][$l['language_id']] = get_list_by_language_id($l['language_id'], $rs, true);
            }*/
            
            //GET LIST
            $rs = $this->category_admin_model->list_all( 
                                                        $select = array( 'category_id', 'category_title', 'catparent_id', 'category_level', 'language_id'),
                                                        $filters = array( 'category_status' => 1,  'category_module' => $this->module_code() ),
                                                        $orders = array() 
                                                        );
            foreach($this->languages as $l) {
                $this->data['list'][$l['language_id']] = get_list_by_language_id($l['language_id'], $rs);
            }
            
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
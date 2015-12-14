<?php
//REQUIRE
require_once APPPATH . 'modules/admin/controllers/base_admin_controller.php';

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends Base_Admin_Controller {
    
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
        
        //GET MODULE
        $this->module = $this->module();

        $this->data['languages'] = $this->languages;
        
        //LOAD MODEL
        $this->load_model();
        
        //SET TITLE FOR VIEW
        $this->template->title( ( !empty($this->module->module_name) ) ? $this->module->module_name : 'Gallery' );
    }
    
    
    
    /**
     * INDEX ACTION 
     * 
     */
    public function index () { 
        $data = array();
        $gallery = array();
        $g = $this->media_admin_model->list_all(array(), array('media_module' => $this->module_code()));
        if( isset($_POST['galleries']) )  {
            if( empty($g) ) {
                $this->insert();
            }else {
                $this->update();
            }
        } 
        
        //RUN VIEW
        $this->template->build( $this->class_view, $this->data);
    }
    
    
    private function insert() {
        //ADD NEW LANG MAP
        $langmap_id = (int)$this->langmap_admin_model->insert( array('langmap_module' => $this->module_code() ) );
        
        //GET DATA FROM POST
        $galleries = $this->input->post('galleries');
        
        foreach($this->languages as $lang) {
            $gallery = $galleries[$lang['language_id']];
            $data['media_module'] = $this->module_code();
            $data['media_title'] = 'Gallery ' . $data['media_module'];
            $data['langmap_id'] =  (int)$langmap_id;
            $data['language_id'] = $lang['language_id'];
            $data['media_file'] = addslashes( $gallery['photos'] );
            $this->media_admin_model->insert($data);
        }
    }
    
    
    
    private function update() {
        //GET DATA FROM POST
        $galleries = $this->input->post('galleries');
        foreach($this->languages as $lang) {
            $gallery = $galleries[$lang['language_id']];
            $module = $this->module_code();
            $lang = $lang['language_id'];
            $data['media_file'] = addslashes( $gallery['photos'] );
            $this->media_admin_model->update(array('language_id'=>$lang, 'media_module'=>$module), $data);
        }
    }
    
    /** 
     * LOAD ALL MODEL
     * 
     */
    private function load_model() {
        $this->load->Model("langmap_admin_model");
        $this->load->Model("media_admin_model");
    }
    
}
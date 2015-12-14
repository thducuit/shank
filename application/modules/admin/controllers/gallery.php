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
        //$this->load_model();
        
        //SET TITLE FOR VIEW
        $this->template->title( ( !empty($this->module->module_name) ) ? $this->module->module_name : 'Gallery' );
    }
    
    
    
    /**
     * INDEX ACTION 
     * 
     */
    public function index () { 

        
        //RUN VIEW
        $this->template->build( $this->class_view, $this->data);
    }
    
}